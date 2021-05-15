<?php
include "config.inc.php";

$conn = mysqli_connect($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'], $dbconfig['db_name']);
 if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
    }
?>