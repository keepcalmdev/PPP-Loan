<?php
namespace Ra;

//if (!defined("ASSISTANTS_TABLE")){
//    define ("ASSISTANTS_TABLE", $wpdb->users);
//}

class Dbt_ppploan_requests extends Dbt_Base{
	
	public static $table_name = "ppploan_requests";

	static function get_db_fields(){
		$db_fields = array(
			"id" => array(
				"code" => "id",
				"title" => "request id",
				"type" => "int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY",
				"show_in_admin" => true,
				"default_value" => false
			),
			"is_received_in_2020_2021" => array(
				"code" => "is_received_in_2020_2021",
				"title" => "Did you receive a PPP loan in 2020 or 2021?",
                "type" => "boolean",
				"show_in_admin" => true,
				"default_value" => false
			),
			"business_legal_entity_type" => array(
				"code" => "business_legal_entity_type",
				"title" => "Business Legal Entity Type",
                "type" => "varchar(256)",
				"show_in_admin" => true,
				"default_value" => false
			),
			"company_name" => array(
				"code" => "company_name",
				"title" => "Company Name",
                "type" => "varchar(128)",
				"show_in_admin" => false,
				"default_value" => false
			),
			"first_name" => array(
				"code" => "first_name",
				"title" => "First Name",
                "type" => "varchar(128)",
				"show_in_admin" => true,
				"default_value" => false
			),
			"last_name" => array(
				"code" => "last_name",
				"title" => "Last Name",
                "type" => "varchar(128)",
				"show_in_admin" => true,
				"default_value" => false
			),
			"email" => array(
				"code" => "email",
				"title" => "Email",
                "type" => "varchar(128)",
				"show_in_admin" => true,
				"default_value" => false
			),
			"company_phone" => array(
				"code" => "company_phone",
				"title" => "Company Phone",
                "type" => "varchar(20)",
				"show_in_admin" => true,
				"default_value" => false
			),
			"mobile_phone" => array(
				"code" => "mobile_phone",
				"title" => "Mobile Phone",
                "type" => "varchar(20)",
				"show_in_admin" => true,
				"default_value" => false
			),
		);
		return $db_fields;
	}

    /**
     * create the table
     */
	static function create_table(){
        try{
            $fields = self::get_db_fields();
            $sql_fields = array();
            foreach ($fields as $key => $field) {
                $sql_fields[] = sprintf("`%s` %s", $field["code"], $field["type"]);
            }
            $sql = sprintf("CREATE TABLE IF NOT EXISTS `%s` (%s) COLLATE 'utf8_general_ci' AUTO_INCREMENT=1;",
                self::get_table_name(), implode(", ", $sql_fields)
            );
            self::$pdo->exec($sql);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
	}

    /**
     * @param array $args = array(db_field_name => value,...)
     * @return bool
     */
    public function insert(array $args){
        $args = array_intersect_key($args, self::get_db_fields());
        $fields = array_keys($args);
        $sql = sprintf("INSERT INTO %s(%s) VALUES(:%s)", self::get_table_name(), implode(", ", $fields), implode(", :", $fields));
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute($args);
        if($stmt->error){
//            $result = $stmt->errorInfo();
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

}
