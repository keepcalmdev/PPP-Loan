<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

require_once  __DIR__ . '/../init.php';

// DB table to use
$table = $ppploan::get_table_name();
$db_fields = $ppploan->get_db_fields();
//$db_fgn_fields = $ppploan->get_foreign_fields();
//$fields = array_merge($db_fields, $db_fgn_fields);

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes

$columns = array();
foreach ($db_fields as $key => $field) {
    if($field["show_in_front"]){
        $columns[] = array(
            'db' => $field['code'],
            'dt' => $key
        );
    }
}
//fppr($columns, __FILE__.' $columns');


// SQL server connection information
$sql_details = array(
	'user' => DB_USER,
	'pass' => DB_PASSWORD,
	'db'   => DB_NAME,
	'host' => DB_HOST
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

$result = Ra\SSP_ppploan::complex( $_POST, $sql_details, $table, $primaryKey, $columns );

//fppr($result, __FILE__.' $result');

echo json_encode($result);


