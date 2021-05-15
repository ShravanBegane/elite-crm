
<?php
require_once("../ValidateAuth.php");
//header("Content-Type:application/json");
include("conn.php");


if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
 }
 

   
 
$query = "SELECT vtiger_employee_roster.* , vtiger_users.user_name as name \n"

    . "FROM vtiger_employee_roster\n"

    . "LEFT JOIN vtiger_users ON vtiger_employee_roster.employee_id = vtiger_users.id\n"

    . "WHERE vtiger_employee_roster.Id = '".$id."'";

$result = mysqli_query($conn, $query); 
 
if (!$result) {
    die('Invalid query: ' . mysqli_error());
}



$ind = 0; 
  $name="";
$id="";
$employee_id="";
$date="";$in_time="";$out_time="";


echo json_encode($row = @mysqli_fetch_assoc($result));
/*
while ($row = @mysqli_fetch_assoc($result)) {
 
    ///id
    $id = $row['id'];
    $name = $row['name'];
    $employee_id = $row['employee_id'];
    $in_time = $row['in_time']; 
    $out_time = $row['out_time'];
    $name = $row['name'];

    $ind = $ind + 1;
}

*/
?>