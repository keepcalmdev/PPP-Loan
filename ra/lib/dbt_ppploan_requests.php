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
				"show_in_front" => true,
				"default_value" => false
			),
			"is_received_in_2020_2021" => array(
				"code" => "is_received_in_2020_2021",
				"title" => "Did you receive a PPP loan in 2020 or 2021?",
                "type" => "boolean",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => null
			),
			"business_legal_entity_type" => array(
				"code" => "business_legal_entity_type",
				"title" => "Business Legal Entity Type",
                "type" => "varchar(256)",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => false
			),
			"schedule_f" => array(
				"code" => "schedule_f",
				"title" => "Please Specify what line 9 on Schedule F is",
                "type" => "varchar(128)",
				"show_in_admin" => false,
                "show_in_front" => false,
				"default_value" => false
			),
			"schedule_c" => array(
				"code" => "schedule_c",
				"title" => "Please Specify what line 9 on Schedule C is",
                "type" => "varchar(128)",
				"show_in_admin" => false,
                "show_in_front" => false,
				"default_value" => false
			),
			"company_name" => array(
				"code" => "company_name",
				"title" => "Company Name",
                "type" => "varchar(128)",
				"show_in_admin" => false,
                "show_in_front" => true,
				"default_value" => false
			),
			"first_name" => array(
				"code" => "first_name",
				"title" => "First Name",
                "type" => "varchar(128)",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => false
			),
			"last_name" => array(
				"code" => "last_name",
				"title" => "Last Name",
                "type" => "varchar(128)",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => false
			),
			"email" => array(
				"code" => "email",
				"title" => "Email",
                "type" => "varchar(128)",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => false
			),
			"company_phone" => array(
				"code" => "company_phone",
				"title" => "Company Phone",
                "type" => "varchar(20)",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => false
			),
			"mobile_phone" => array(
				"code" => "mobile_phone",
				"title" => "Mobile Phone",
                "type" => "varchar(20)",
				"show_in_admin" => true,
                "show_in_front" => true,
				"default_value" => false
			),
            "average_monthly_payroll" => array(
                "code" => "average_monthly_payroll",
                "title" => "Average Monthly Payroll",
                "type" => "int unsigned",
                "show_in_admin" => true,
                "show_in_front" => true,
                "default_value" => null
            ),
            "number_employees" => array(
                "code" => "number_employees",
                "title" => "Number Of Employees",
                "type" => "int unsigned",
                "show_in_admin" => true,
                "show_in_front" => true,
                "default_value" => null
            ),
            "loan_amount" => array(
                "code" => "loan_amount",
                "title" => "Loan Amount",
                "type" => "int unsigned",
                "show_in_admin" => true,
                "show_in_front" => true,
                "default_value" => null
            ),
            "business_industry" => array(
                "code" => "business_industry",
                "title" => "What Is Your Business Industry",
                "type" => "varchar(128)",
                "show_in_admin" => true,
                "show_in_front" => true,
                "default_value" => false
            ),
            "question_1" => array(
                "code" => "question_1",
                "title" => "Is the Applicant or any owner of the Applicant presently suspended, debarred, proposed for debarment, declared ineligible,voluntarily excluded from participation in this transaction by any Federal department or agency, or presently involved in any bankruptcy?",
                "type" => "boolean",
                "show_in_admin" => true,
                "show_in_front" => true,
                "default_value" => null
            ),
            "question_2" => array(
                "code" => "question_2",
                "title" => "Has the Applicant, any owner of the Applicant, or any business owned or controlled by any of them, ever obtained a direct orguaranteed loan from SBA or any other Federal agency (other than a Federal student loan made or guaranteed through a programadministered by the Department of Education) that is (a) currently delinquent, or (b) has defaulted in the last 7 years and caused a loss to the government?",
                "type" => "boolean",
                "show_in_admin" => true,
                "show_in_front" => true,
                "default_value" => null
            ),
            "question_3" => array(
                "code" => "question_3",
                "title" => "Within the last 5 years, for any felony involving fraud, bribery, embezzlement, or a false statement in a loan application or anapplication for federal financial assistance, has the Applicant (if an individual) or any owner of the Applicant 1) been convicted; 2)pleaded guilty; 3) pleaded nolo contendere; or 4) commenced any form of parole or probation (including probation before judgment)?",
                "type" => "boolean",
                "show_in_admin" => true,
                "show_in_front" => true,
                "default_value" => null
            ),
            "question_4" => array(
                "code" => "question_4",
                "title" => "Within the last 5 years, for any felony involving fraud, bribery, embezzlement, or a false statement in a loan application or anapplication for federal financial assistance, has the Applicant (if an individual) or any owner of the Applicant 1) been convicted; 2)pleaded guilty; 3) pleaded nolo contendere; or 4) commenced any form of parole or probation (including probation before judgment)?",
                "type" => "boolean",
                "show_in_admin" => true,
                "show_in_front" => true,
                "default_value" => null
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
                "show_in_front" => false,
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

	static function get_foreign_fields(){
		$db_fgn_fields = array(
			"owners" => array(
				"code" => "owners",
				"prefix" => "owner_",
				"title" => "Business Owners",
				"show_in_admin" => true,
				"show_in_front" => true,
				"default_value" => false
			),
			"files" => array(
				"code" => "files",
                "prefix" => "files_",
				"title" => "Files",
				"show_in_admin" => true,
				"show_in_front" => false,
				"default_value" => false
			),
			"tax_documents" => array(
				"code" => "tax_documents",
                "prefix" => "files_",
				"title" => "Tax Documents",
				"show_in_admin" => true,
				"show_in_front" => true,
				"default_value" => false
			),
			"articles_incorporations" => array(
				"code" => "articles_incorporations",
                "prefix" => "files_",
				"title" => "Articles Incorporations",
				"show_in_admin" => true,
				"show_in_front" => true,
				"default_value" => false
			),
		);
		return $db_fgn_fields;
	}

}
