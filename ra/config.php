<?php
/**
 * Config
 */

define( 'DB_HOST', '127.0.0.1' );
define( 'DB_NAME', 'getppphope_ppploan' );
//define( 'DB_USER', 'getppphope_wp551' );
//define( 'DB_PASSWORD', '[(-W)208NcS)2px9' );
define( 'DB_USER', 'rus' );
define( 'DB_PASSWORD', 'rs2311' );

$DSN_OPTIONS = array(
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
);

define('ROOT_PATH', __DIR__ . '/..');
