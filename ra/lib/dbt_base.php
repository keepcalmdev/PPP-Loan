<?php
namespace Ra;


class Dbt_base {

    protected static $pdo;

    public function __construct() {
        self::$pdo = new \PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD, $DSN_OPTIONS);
    }

    public static function get_table_name(){
        return static::$table_name;
    }
}
