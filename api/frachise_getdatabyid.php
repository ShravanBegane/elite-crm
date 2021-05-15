
<?php
require_once("../ValidateAuth.php");
//header("Content-Type:application/json");
include("conn.php");


if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
 }
 

   
 
$query = "SELECT * FROM vtiger_franchise_detail WHERE id = '$id'";

$result = mysqli_query($conn, $query); 
 
if (!$result) {
    die('Invalid query: ' . mysqli_error());
}



echo json_encode($row = @mysqli_fetch_assoc($result));

?>