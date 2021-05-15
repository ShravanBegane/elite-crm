    
<?php
require_once("../ValidateAuth.php");
//header("Content-Type:application/json");
include("conn.php");


if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
 }
 

   
 

$query = "DELETE FROM vtiger_employee_roster\n"
    . "WHERE vtiger_employee_roster.Id = '".$id."'";

$result = mysqli_query($conn, $query); 
 
if (!$result) {
    die('Invalid query: ' . mysqli_error());
}
else{
    $json1["value"] =  "Data Delete Sucessfully";
}


   $json = array();
    

        echo json_encode($json1);





?>