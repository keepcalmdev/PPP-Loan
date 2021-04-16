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
				"default_value" => false
			),
			"request_id" => array(
				"code" => "request_id",
				"title" => "PPP Loan Request id",
				"type" => "int unsigned",
				"foreign" => "FOREIGN KEY (`request_id`) REFERENCES `" . Dbt_ppploan_requests::get_table_name() . "` (`id`) ON DELETE CASCADE ON UPDATE CASCADE",
				"show_in_admin" => true,
				"default_value" => false
			),
			// Owner info
			"owner_fullname" => array(
				"code" => "owner_fullname",
				"title" => "Owner Full Name",
                "type" => "varchar(128)",
				"show_in_admin" => true,
				"default_value" => false
			),
			"owner_title" => array(
				"code" => "owner_title",
				"title" => "Title",
                "type" => "varchar(128)",
				"show_in_admin" => true,
				"default_value" => false
			),
			"owner_percent" => array(
				"code" => "owner_percent",
				"title" => "Owner %",
                "type" => "varchar(64)",
				"show_in_admin" => true,
				"default_value" => false
			),
			"owner_ssn" => array(
				"code" => "owner_ssn",
				"title" => "Owner SSN",
                "type" => "varchar(128)",
				"show_in_admin" => true,
				"default_value" => false
			),
			"owner_address" => array(
				"code" => "owner_address",
				"title" => "Address",
                "type" => "varchar(128)",
				"show_in_admin" => true,
				"default_value" => false
			),
			"owner_address_2" => array(
				"code" => "owner_address_2",
				"title" => "Address 2",
                "type" => "varchar(128)",
				"show_in_admin" => true,
				"default_value" => false
			),
			"owner_city" => array(
				"code" => "owner_city",
				"title" => "City",
                "type" => "varchar(128)",
				"show_in_admin" => true,
				"default_value" => false
			),
			"owner_state" => array(
				"code" => "owner_state",
				"title" => "State",
                "type" => "varchar(128)",
				"show_in_admin" => true,
				"default_value" => false
			),
			"owner_zip" => array(
				"code" => "owner_zip",
				"title" => "Zip",
                "type" => "varchar(64)",
				"show_in_admin" => true,
				"default_value" => false
			),
		);
		return $db_fields;
	}

}
