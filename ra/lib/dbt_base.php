<?php
namespace Ra;


class Dbt_base {


    public function __construct() {
    }

    public static function get_table_name(){
        return static::$table_name;
    }
}
