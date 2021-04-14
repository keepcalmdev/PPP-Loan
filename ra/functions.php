<?php
/**
 * (RA) Helpers
 */

function ppr($_arr, $_ar_name){
    echo "<pre>$_ar_name<br>";
    print_r($_arr);
    echo "</pre>";
}
function fppr($_arr, $_ar_name, $_log_name=false, $append=FILE_APPEND){
    $_log_name = ($_log_name) ? $_log_name : "rlog";
    $str = date("d.m.y H:m:s") . "\r\n" . $_ar_name . "\r\n" . print_r($_arr, true) . "\r\n-------------------\r\n";
    file_put_contents(ROOT_PATH . '/ra/logs/'.$_log_name.'.log', $str, $append);
}
