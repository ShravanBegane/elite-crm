<?php
require_once("../ValidateAuth.php");
//header("Content-Type:application/json");
include("conn.php");


if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
 }
 

   
 

$query = "DELETE FROM vtiger_franchise_detail\n"
    . "WHERE vtiger_franchise_detail.id = '".$id."'";

$result = mysqli_query($conn, $query); 
 
if (!$result) {
    die('Invalid query: ' . mysqli_error());
}


   $json = array();
    $json1["value"] = "Data successfully deleted";

        echo json_encode($json1);





?>