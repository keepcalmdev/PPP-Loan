<?php
namespace Ra;


class Dbt_base {

    protected static $pdo;
    private static $table_name;

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
        $args = array_intersect_key($args, self::get_child_db_fields());
        $fields = array_keys($args);
        $sql = sprintf("INSERT INTO %s(%s) VALUES(:%s)", self::get_table_name(), implode(", ", $fields), implode(", :", $fields));

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
}
