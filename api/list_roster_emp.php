<?php
//require_once("../ValidateAuth.php");
include("conn.php"); 



if(isset($_POST['in_time1']) && !empty($_POST['in_time1'])){
   $in_time4 = $_POST['in_time1'];
 }



 if(isset($_POST['out_time1']) && !empty($_POST['out_time1'])){
    $out_time4 = $_POST['out_time1'];
 }

     
     
     
     
     
$ok=1;

$query = "SELECT vtiger_employee_roster.*,vtiger_users.user_name as name \n"

    . "FROM vtiger_employee_roster\n"

    . "LEFT JOIN vtiger_users ON vtiger_employee_roster.employee_id=vtiger_users.id\n"

    . "WHERE vtiger_employee_roster.date >= '$in_time4' AND  vtiger_employee_roster.date <= '$out_time4'";
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Invalid query: ' . mysqli_error());
} 
$ind = 0; 
$value=array();
$id_list=array();

// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)) {
    if (!in_array($row['name'],$value)) 
  { 
 array_push($value,$row['name']);
  } 
    
  
  
}



 include_once('employeeroaster.php');
?>