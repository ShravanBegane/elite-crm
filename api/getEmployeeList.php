<?php 
//require_once("../ValidateAuth.php");
include("conn.php"); 
$query = "SELECT vtiger_employee_tracker.*, vtiger_users.user_name as name\n" 
    . "FROM vtiger_employee_tracker\n" 
    . "LEFT JOIN vtiger_users ON vtiger_employee_tracker.employee_id = vtiger_users.id\n" 
    . "WHERE vtiger_employee_tracker.status='active'\n"
    . "ORDER BY vtiger_employee_tracker.id"; 
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Invalid query: ' . mysqli_error());
} 
$ind = 0; 
$value=array();
$id_list=array();
$colors=array();
// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)) {
    
     array_push($value,$row['name']);
     array_push($id_list,$row['id']);
      array_push($colors,$row['colors']);
     
    $ind = $ind + 1;
}
  
?>