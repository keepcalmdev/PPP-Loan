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
				"title" => "id", 
				"show_in_admin" => true,
				"default_value" => false
			),
			"name" => array(
				"code" => "name", 
				"title" => __("Name", "courtres"), 
				"show_in_admin" => true,
				"default_value" => "New challenge"
			),
			"court_id" => array(
				"code" => "court_id", 
				"title" => __("Court Id", "courtres"), 
				"show_in_admin" => false,
				"default_value" => false
			),
			"piramid_id" => array(
				"code" => "piramid_id", 
				"title" => __("Piramid Id", "courtres"), 
				"show_in_admin" => true,
				"default_value" => false
			),
			"challenger_id" => array(
				"code" => "challenger_id", 
				"title" => __("Challenger", "courtres"), 
				"show_in_admin" => true,
				"default_value" => false
			),
			"challenged_id" => array(
				"code" => "challenged_id", 
				"title" => __("Challenged", "courtres"), 
				"show_in_admin" => true,
				"default_value" => false
			),
			"winner_id" => array(
				"code" => "winner_id", 
				"title" => __("Winner", "courtres"), 
				"show_in_admin" => true,
				"default_value" => false
			),
			"results" => array(
				"code" => "winner_id", 
				"title" => __("Results", "courtres"), 
				"show_in_admin" => false,
				"default_value" => false
			),
			"event_id" => array(
				"code" => "event_id", 
				"title" => __("Event", "courtres"), 
				"show_in_admin" => true,
				"default_value" => false
			),
			"status" => array(
				"code" => "status", 
				"title" => __("Status", "courtres"), 
				"show_in_admin" => true,
				"default_value" => "created"
			),
			"start_ts" => array(
				"code" => "start_ts", 
				"title" => __("Start", "courtres"), 
				"show_in_admin" => true,
				"default_value" => 0
			),
			"end_ts" => array(
				"code" => "end_ts", 
				"title" => __("End", "courtres"), 
				"show_in_admin" => true,
				"default_value" => 0
			),
			"is_active" => array(
				"code" => "is_active", 
				"title" => __("Active", "courtres"), 
				"show_in_admin" => false,
				"default_value" => true
			),
			"created_dt" => array(
				"code" => "created_dt", 
				"title" => __("Created date and time", "courtres"), 
				"show_in_admin" => false,
				"default_value" => false
			),
			"accepted_dt" => array(
				"code" => "accepted_dt", 
				"title" => __("Accepted date and time", "courtres"), 
				"show_in_admin" => false,
				"default_value" => false
			),
			"closed_dt" => array(
				"code" => "closed_dt", 
				"title" => __("Closed date and time", "courtres"), 
				"show_in_admin" => false,
				"default_value" => false
			),
			"modified_dt" => array(
				"code" => "modified_dt", 
				"title" => __("Modified date", "courtres"), 
				"show_in_admin" => false,
				"default_value" =>  false
			),
		);
		return $db_fields;
	}

	static function create_table(){
		global $wpdb;
		$db_fields = self::get_db_fields();
		$sql = sprintf(
			"CREATE TABLE IF NOT EXISTS `%1\$s` (
				`id` int unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
				`name` varchar(128) NOT NULL DEFAULT '%2\$s',
				`piramid_id` int unsigned NOT NULL,
				`court_id` mediumint(9),
				`event_id` mediumint(9),
				`challenger_id` bigint(20) NOT NULL,
				`challenged_id` bigint(20) NOT NULL,
				`winner_id` bigint(20),
				`results` text,
				`status` ENUM ('created', 'accepted', 'scheduled', 'played', 'closed') NOT NULL DEFAULT 'created',
				`is_active` boolean  DEFAULT 1,
				`start_ts` int unsigned,
				`end_ts` int unsigned,
				`created_dt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
				`accepted_dt` datetime,
				`closed_dt` datetime,
				`modified_dt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
				FOREIGN KEY (`piramid_id`) REFERENCES `%3\$s` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
				) ENGINE='InnoDB' %6\$s AUTO_INCREMENT=1;",
				
				self::get_table_name(),
				$db_fields["name"]["default_value"],
				Courtres_Entity_Piramid::get_table_name(),
				$wpdb->prefix . 'courtres_courts',
				$wpdb->prefix . 'courtres_events',
				self::get_charset_collate()
		);
		$wpdb->query( $sql );
	}

}
