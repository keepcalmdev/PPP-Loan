<?php
namespace Ra;


class Dbt_ppploan_owners extends Dbt_Base{
	
	public static $table_name = "ppploan_owners";

	static function get_db_fields(){
		$db_fields = array(
			"id" => array(
				"code" => "id",
				"title" => "Bussiness owner id",
				"type" => "int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => false
			),
			"request_id" => array(
				"code" => "request_id",
				"title" => "PPP Loan Request id",
				"type" => "int unsigned",
				"foreign" => "FOREIGN KEY (`request_id`) REFERENCES `" . Dbt_ppploan_requests::get_table_name() . "` (`id`) ON DELETE CASCADE ON UPDATE CASCADE",
				"show_in_admin" => true,
                "show_in_front" => false,
				"default_value" => null
			),
			// Owner info
			"fullname" => array(
				"code" => "fullname",
				"title" => "Owner Full Name",
                "type" => "varchar(128)",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => false
			),
			"title" => array(
				"code" => "title",
				"title" => "Title",
                "type" => "varchar(128)",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => false
			),
			"percent" => array(
				"code" => "percent",
				"title" => "Owner %",
                "type" => "varchar(64)",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => false
			),
			"ssn" => array(
				"code" => "ssn",
				"title" => "Owner SSN",
                "type" => "varchar(128)",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => false
			),
			"address" => array(
				"code" => "address",
				"title" => "Address",
                "type" => "varchar(128)",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => false
			),
			"address_2" => array(
				"code" => "address_2",
				"title" => "Address 2",
                "type" => "varchar(128)",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => false
			),
			"city" => array(
				"code" => "city",
				"title" => "City",
                "type" => "varchar(128)",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => false
			),
			"state" => array(
				"code" => "state",
				"title" => "State",
                "type" => "varchar(128)",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => false
			),
			"zip" => array(
				"code" => "zip",
				"title" => "Zip",
                "type" => "varchar(64)",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => false
			),
            "is_active" => array(
                "code" => "is_active",
                "title" => "Active",
                "type" => "boolean  DEFAULT 1",
                "show_in_admin" => true,
                "show_in_front" => false,
                "default_value" => true
            ),
            "created_dt" => array(
                "code" => "created_dt",
                "title" => "Date Created",
                "type" => "datetime NOT NULL DEFAULT CURRENT_TIMESTAMP",
                "show_in_admin" => true,
                "show_in_front" => true,
                "default_value" => null
            ),
            "modified_dt" => array(
                "code" => "modified_dt",
                "title" => "Date Modified",
                "type" => "datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
                "show_in_admin" => true,
                "show_in_front" => false,
                "default_value" => null
            ),
		);
		return $db_fields;
	}

}
