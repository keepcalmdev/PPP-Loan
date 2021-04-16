<?php
namespace Ra;


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
			"schedule_f" => array(
				"code" => "schedule_f",
				"title" => "Please Specify what line 9 on Schedule F is",
                "type" => "varchar(128)",
				"show_in_admin" => true,
				"default_value" => false
			),
			"schedule_c" => array(
				"code" => "schedule_c",
				"title" => "Please Specify what line 9 on Schedule C is",
                "type" => "varchar(128)",
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

}
