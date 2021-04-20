<?php
namespace Ra;


class Dbt_base {

    protected static $pdo;
    private static $table_name;
    private static $limit;

    public function __construct() {
        self::$pdo = new \PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD, $DSN_OPTIONS);
        self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public static function get_table_name(){
        return static::$table_name;
    }

    public static function get_child_db_fields(){
        return static::get_db_fields();
    }

    /**
     * create the table
     * @return $pdo->exec() or PDOException error messsage
     */
    static function create_table(){
        try{
            $fields = self::get_child_db_fields();
            $sql_fields = array();
            $sql_foreigns = "";
            foreach ($fields as $key => $field) {
                $sql_fields[] = sprintf("`%s` %s", $field["code"], $field["type"]);
                $sql_foreigns .= isset($field["foreign"]) && $field["foreign"] ? ", " . $field["foreign"] : "";
            }
            $sql = sprintf("CREATE TABLE IF NOT EXISTS `%s` (%s%s) ENGINE='InnoDB' COLLATE 'utf8_general_ci' AUTO_INCREMENT=1;",
                self::get_table_name(), implode(", ", $sql_fields), $sql_foreigns
            );
            return self::$pdo->exec($sql);

        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }

    /**
     * @param array $args = array(db_field_name => value,...)
     * @return array
     */
    public function insert(array $args){
        $result = array("errors" => array(), "success" => false, "id"=>false);
        $df_fields = self::get_child_db_fields();
        $args = array_intersect_key($args, $df_fields);
        $fields = array_keys($args);
        $sql = sprintf("INSERT INTO %s(%s) VALUES(:%s)", self::get_table_name(), implode(", ", $fields), implode(", :", $fields));
        foreach ($args as $key => $value) {
            if(!isset($args[$key]) || $args[$key] === ''){
                $args[$key] = $df_fields[$key]["default_value"];
            }
        }
        try {
            $stmt = self::$pdo->prepare($sql);
            $stmt->execute($args);
            if ($stmt->error) {
                $result["errors"][] = $stmt->errorInfo();
            } else {
                $result["success"] = true;
                $result["id"] = self::$pdo->lastInsertId();
            }
        }catch (\PDOException $e) {
            $result["errors"][] =  $e->getMessage();
        }
        return $result;
    }

    /**
     * @return array $items
     */
    static function get_by_ids( $ids = array() )
    {
        $sql = sprintf( "SELECT * FROM  %s WHERE `id` IN(%s)", self::get_table_name(), implode(", ", $ids));
        $items = self::$pdo->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
        return $items;
    }

    /**
     * @return array $items
     */
    static function get_by_request_ids( $ids = array() )
    {
        $sql = sprintf( "SELECT * FROM  %s WHERE `request_id` IN(%s)", self::get_table_name(), implode(", ", $ids));
        $items = self::$pdo->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
        return $items;
    }

    /**
     * @return array $items with request_id as keys or empty array
     */
    static function arrange_by_request_id( array $items ){
        $new_items = array();
        foreach ($items as $item) {
            $new_items[$item["request_id"]][] = $item;
        }
        return $new_items;
    }

    /**
     * @return array $items with request_id as keys or empty array
     */
    static function get_strings( array $items ){
        $new_items = array();
        foreach ($items as $k => $item) {
            $strs = array();
            foreach ($item as $key => $subitem) {
                $strs2 = array();
                foreach ($subitem as $key => $value) {
                    $strs2[] = $key . ": <strong>" . $value . "</strong>";
                }
                $strs[] = implode(", ", $strs2);
            }
            $new_items[$k] = implode("<br><br>", $strs);
        }
        return $new_items;
    }
}
