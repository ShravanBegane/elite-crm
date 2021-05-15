
<?php
require_once("../ValidateAuth.php");
//header("Content-Type:application/json");
include("conn.php");
include("config.inc.php");




if(isset($_POST['ids']) && !empty($_POST['ids'])){
    $id = $_POST['ids'];
 }
 if(isset($_POST['in_time']) && !empty($_POST['in_time'])){
    $in_time = $_POST['in_time'];
 }
  if(isset($_POST['date']) && !empty($_POST['date'])){
    $date = $_POST['date'];
 }
  if(isset($_POST['out_time']) && !empty($_POST['out_time'])){
    $out_time = $_POST['out_time'];
 }
 if(isset($_POST['tid']) && !empty($_POST['tid'])){
    $transactionid = $_POST['tid'];
 }
 if(isset($_POST['task']) && !empty($_POST['task'])){
    $task = $_POST['task'];
 }
    $cal_time= round(((strtotime($out_time)-strtotime($in_time))/60)/60,2);
 
$query = "UPDATE vtiger_employee_roster SET in_time='$in_time',out_time='$out_time', emp_task='$task', total_working_hour='$cal_time', date='$date' WHERE id = '$id';";
$query  .= "UPDATE vtiger_transactioncf SET cf_1170='$in_time',cf_1172='$out_time' WHERE 	transactionid='$transactionid'";
$result = mysqli_multi_query($conn, $query);
 
if (!$result) {
    die('Invalid query: ' . mysqli_error().'-red-');
}

 die(  'Data updated successfully -green-');


?>