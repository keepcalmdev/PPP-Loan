<?php
/**
 * Init required files
 */

error_reporting(E_ERROR | E_WARNING | E_PARSE);

require_once 'config.php';
require_once 'functions.php';
require_once 'lib/dbt_base.php';
require_once 'lib/dbt_ppploan_requests.php';
require_once 'lib/dbt_ppploan_owners.php';
require_once 'lib/dbt_ppploan_files.php';
require_once ROOT_PATH . '/vendor/datatables/ssp.class.php';
require_once 'lib/ssp_ppploan.class.php';

$ppploan = new Ra\Dbt_ppploan_requests();
$ppploan->create_table();

$ppploan_owners = new Ra\Dbt_ppploan_owners();
$ppploan_owners->create_table();

$ppploan_files = new Ra\Dbt_ppploan_files();
$ppploan_files->create_table();