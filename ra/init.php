<?php
/**
 * Init required files
 */

require_once 'config.php';
require_once 'functions.php';
require_once 'lib/dbt_base.php';
require_once 'lib/dbt_ppploan_requests.php';

$ppploan = new Ra\Dbt_ppploan_requests();
$ppploan->create_table();