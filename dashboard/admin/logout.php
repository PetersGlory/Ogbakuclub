<?php
ini_set('display_errors',1);
error_reporting("E_ALL");
require "../../backend/config.php";

$end = session_destroy();
if ($end) {
    header("location: ../../index.html");    
}
?>