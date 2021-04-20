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
                "show_in_front" => true,
				"default_value" => false
			),
			"request_id" => array(
				"code" => "request_id",
				"title" => "PPP Loan Request id",
				"type" => "int unsigned",
				"foreign" => "FOREIGN KEY (`request_id`) REFERENCES `" . Dbt_ppploan_requests::get_table_name() . "` (`id`) ON DELETE CASCADE ON UPDATE CASCADE",
				"show_in_admin" => true,
                "show_in_front" => true, // must be always true
				"default_value" => null
			),
            "name" => array(
                "code" => "name",
                "title" => "File Name",
                "type" => "varchar(255)",
                "show_in_admin" => true,
                "show_in_front" => false,
                "default_value" => false
            ),
            "type" => array(
                "code" => "type",
                "title" => "File Type",
                "type" => "varchar(64)",
                "show_in_admin" => true,
                "show_in_front" => false,
                "default_value" => false
            ),
            "src_name" => array(
                "code" => "src_name",
                "title" => "Source File Name",
                "type" => "varchar(255)",
                "show_in_admin" => true,
                "show_in_front" => true,
                "default_value" => false
            ),
            "size" => array(
                "code" => "size",
                "title" => "File Size",
                "type" => "int unsigned",
                "show_in_admin" => true,
                "show_in_front" => false,
                "default_value" =>  null
            ),
            "src" => array(
                "code" => "src",
                "title" => "File Source Url",
                "type" => "text",
                "show_in_admin" => true,
                "show_in_front" => true,
                "default_value" => false
            ),
            "file" => array(
                "code" => "file",
                "title" => "Path to file",
                "type" => "text",
                "show_in_admin" => true,
                "show_in_front" => false,
                "default_value" => false
            ),
			"document_type" => array(
				"code" => "document_type",
				"title" => "Document Type",
                "type" => "varchar(128)",
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

    /**
     * @return array of allowed mime types
     */
    static function get_allowed_mime(){
	    $allowed_mime = array(
            'image/jpg' => 'jpg',
            'image/jpeg' => 'jpg',
            'image/png' => 'png',
            'image/gif' => 'gif',
            'application/pdf' => 'pdf',
        );
        return $allowed_mime;
    }

    /**
     * @param $mime
     * @return string extention if mime allowed or bool false
     */
    static function get_ext_by_mime($mime){
        $allowed_mime = self::get_allowed_mime();
        if(key_exists($mime, $allowed_mime)){
            $ext = $allowed_mime[$mime];
        }else{
            $ext = false;
        }
        return $ext;
    }

    /**
     * @param array $form_files: $_FILES
     * @return array with data of uploaded files or empty array
     */
    static function upload($form_files){
        if(!is_dir(ROOT_PATH . self::$uploads_dir)){
            mkdir(ROOT_PATH . self::$uploads_dir, 0777);
        }
        $finfo = new \finfo(FILEINFO_MIME_TYPE);
        $uploaded_files = array();
        $db_fields = self::get_db_fields();
        foreach ($form_files as $k => $files) {
            $document_type = $k;
            foreach ($files["error"] as $key => $error) {
                if ($error === 0) {
                    $tmp_file = $files["tmp_name"][$key];
                    $ext =  self::get_ext_by_mime($finfo->file($tmp_file));
                    if($ext){
                        $name = sha1_file($tmp_file) . "." . $ext;
                        move_uploaded_file($tmp_file, ROOT_PATH . self::$uploads_dir . "/" . $name);
                        $uploaded_files[] = array(
                            $db_fields["name"]["code"] => $name,
                            $db_fields["src_name"]["code"] => filter_var($files["name"][$key], FILTER_SANITIZE_STRING),
                            $db_fields["type"]["code"] => $files["type"][$key],
                            $db_fields["size"]["code"] => $files["size"][$key],
                            $db_fields["src"]["code"] => ROOT_URL . self::$uploads_dir  . "/" . $name,
                            $db_fields["file"]["code"] => ROOT_PATH . self::$uploads_dir . "/" . $name,
                            $db_fields["document_type"]["code"] => $document_type,
                        );
                    }
                }
            }
        }
        return $uploaded_files;
    }


    /**
     * @return array $items
     */
    static function get_request_documents( $request_ids = array(), $document_type )
    {
        $db_fields = self::get_db_fields();
        $select_fields = array();
        foreach ($db_fields as $key => $field) {
            if($field["show_in_front"]){
                $select_fields[] = $field["code"];
            }
        }
        $sql = sprintf( "SELECT %s FROM %s WHERE `request_id` IN(%s) AND `document_type`='%s'", implode(", ", $select_fields), self::get_table_name(), implode(", ", $request_ids), $document_type);
        $items = self::$pdo->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
        return $items;
    }


    /**
     * @return array with request_id as keys and with key/values pairs as strings
     */
    static function get_ceils( array $items ){
        $hidden_fields = array("id", "request_id", "src_name", "document_type");
        $new_items = array();
        foreach ($items as $k => $item) {
            $strs = array();
            foreach ($item as $key => $subitem) {
                $strs2 = array();
                foreach ($subitem as $key => $value) {
                    if(!in_array($key, $hidden_fields)){
                        if($key == "src"){
                            $strs2[] = sprintf('<a href="%s" target="_blank"><img src="%s" width="50px" height="auto" alt="%s"></a>', $subitem["src"], $value, $value, $subitem["src_name"]);
                        }else{
                            $strs2[] = "<small>" . $key . ": </small><strong>" . $value . "</strong>";
                        }
                    }
                }
                $strs[] = implode(", ", $strs2);
            }
            $new_items[$k] = implode("<br><br>", $strs);
        }
        return $new_items;
    }

}
