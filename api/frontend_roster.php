
<?php
require_once("../ValidateAuth.php");
//header("Content-Type:application/json");
include("conn.php");
include("config.inc.php"); 
include("getallemployees.php");
$data=array();
if(isset($_POST['in_time']) && !empty($_POST['in_time'])){
    $in_time = $_POST['in_time'];
 }
 

 $movefrwd="1";

 

 if(isset($_POST['out_time']) && !empty($_POST['out_time'])){
    $out_time = $_POST['out_time'];

 }

 if(isset($_POST['names']) && !empty($_POST['names'])){
    $names = $_POST['names'];
 } 
 


 

  array_push($data,$in_time);
    array_push($data,$out_time);
      array_push($data,$names);

      
      $date=date_create( $in_time);
 $in_time =date_format($date,"Y-m-d");
      
   
    $date=date_create($out_time);
$out_time=date_format($date,"Y-m-d");
      
 
$query = "SELECT vtiger_employee_roster.*,vtiger_users.user_name as name \n"

    . "FROM vtiger_employee_roster\n"

    . "LEFT JOIN vtiger_users ON vtiger_employee_roster.employee_id= vtiger_users.id\n"

    . "WHERE vtiger_employee_roster.date >= '$in_time' AND  vtiger_employee_roster.date<= '$out_time' AND vtiger_users.user_name='$names'"
    
    ."ORDER BY date";
// Select all the rows in the markers table
//$query = "SELECT * FROM vtiger_employee_tracker";
$result = mysqli_query($conn, $query); 
 
if (!$result) {
    die('Invalid query: ' . mysqli_error());
}

$inds = 0; 
$empname=array();
$working=array();
$dates=array();
$ids=array();
$employee_id=array();
$employeeintime=array();
$employeeouttime=array();
while ($row = @mysqli_fetch_assoc($result)) {
  array_push($empname,$row['name']);
     array_push($working,$row['total_working_hour']);
          array_push($employeeintime,$row['in_time']);
          array_push($employeeouttime,$row['out_time']);
       array_push($dates,$row['date']);
           array_push($ids,$row['id']);
           
            array_push($employee_id,$row['employee_id']);
    $inds = $inds + $row['total_working_hour'];
}

  array_push($data,$inds);
  

  
      
$ok=1;



 $in_time4=$in_time;
 $out_time4=$out_time;
$query = "SELECT vtiger_employee_roster.*,vtiger_users.user_name  as name \n"

    . "FROM vtiger_employee_roster\n"

    . "LEFT JOIN vtiger_users ON vtiger_employee_roster.employee_id=vtiger_users.id\n"

    . "WHERE vtiger_employee_roster.date >= '$in_time' AND  vtiger_employee_roster.date<= '$out_time'";
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Invalid query: ' . mysqli_error());
} 
$ind = 0; 
$value1=array();
$id_list=array();

// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)) {
    if (!in_array($row['name'],$value1)) 
  { 
 array_push($value1,$row['name']);
  } 
    
 
  
}
  
 include_once('../employeeroaster.php');
?>