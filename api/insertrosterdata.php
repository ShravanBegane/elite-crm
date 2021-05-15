<?php

require_once("../ValidateAuth.php");

//header("Content-Type:application/json");
include("conn.php");
include_once('../config.inc.php');
include_once('config.inc.php');


if(isset($_POST['newemployee_id']) && !empty($_POST['newemployee_id'])){
    $employee_id = $_POST['newemployee_id'];
 }
 if(isset($_POST['newin_time']) && !empty($_POST['newin_time'])){
    $in_time = $_POST['newin_time'];  
 }
  if(isset($_POST['newdate']) && !empty($_POST['newdate'])){
    $date = $_POST['newdate'];  
 }
  if(isset($_POST['newout_time']) && !empty($_POST['newout_time'])){
    $out_time = $_POST['newout_time'];  
 }
 if(isset($_POST['task']) && !empty($_POST['task'])){
    $task = $_POST['task'];  
 }
     
   $cal_time= round(((strtotime($out_time)-strtotime($in_time))/60)/60,2);
            $query = "INSERT INTO vtiger_employee_roster (employee_id,date,in_time,out_time,total_working_hour,emp_task) VALUES ('$employee_id','$date','$in_time','$out_time','$cal_time','$task')";

$result = mysqli_query($conn, $query);


if (!$result) {
    die('Invalid query: ' . mysqli_error()."-red-");
   //echo 'Invalid query: ' . mysqli_error()."-red-";
}
else{
 die( 'Data insert sucessfully-green-');
 //echo 'Data insert sucessfully-green-';
}
?>

        
        
   


