<?php
namespace Ra;


class Dbt_ppploan_files extends Dbt_Base{
	
	public static $table_name = "ppploan_files";
	public static $uploads_dir = '/uploads';

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
            "name" => array(
                "code" => "name",
                "title" => "File Name",
                "type" => "varchar(255)",
                "show_in_admin" => true,
                "default_value" => false
            ),
            "src" => array(
                "code" => "src",
                "title" => "File Source",
                "type" => "text",
                "show_in_admin" => true,
                "default_value" => false
            ),
			"src_name" => array(
				"code" => "src_name",
				"title" => "Source File Name",
                "type" => "varchar(255)",
				"show_in_admin" => true,
				"default_value" => false
			),
			"size" => array(
				"code" => "size",
				"title" => "File Size",
                "type" => "int unsigned",
				"show_in_admin" => true,
				"default_value" => false
			),
			"type" => array(
				"code" => "type",
				"title" => "File Type",
                "type" => "varchar(64)",
				"show_in_admin" => true,
				"default_value" => false
			),
			"document_type" => array(
				"code" => "document_type",
				"title" => "Document Type",
                "type" => "varchar(128)",
				"show_in_admin" => true,
				"default_value" => false
			),
		);
		return $db_fields;
	}

}
