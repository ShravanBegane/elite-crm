
<?php
//header("Content-Type:application/json");
include("api/conn.php");
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
$statuss=array();
$employeeintime=array();
$employeeouttime=array();
$tasks=array();
$break=array();
$total=array();
while ($row = @mysqli_fetch_assoc($result)) {
    
    $sql1 = mysqli_query($conn, "select SEC_TO_TIME( SUM( TIME_TO_SEC( `tot_break_time` ) ) ) AS timeSum from vtiger_employee_roasterbreak where recordid='$row[id]'");
  while($row1 = mysqli_fetch_array($sql1)){
    $break1 = $row1[0];
  }
  if($row['out_time'] != '00:00:00'){
    $time1 = strtotime($row['in_time']);
    $time2 = strtotime($row['out_time']);
    $diff = $time2 - $time1;
    $timedifference =  date('H:i:s', $diff);
  }
  else{
    $timedifference='';
  }
  if($row['status'] == 'Done'){
    $time3 = strtotime($timedifference);
    $time4 = strtotime($break1);
    $timediff1 = $time3 - $time4;
    $timediff2 = date('H:i:s', $timediff1);
  }
  else{
    $timediff2='';
  }
  
  
  array_push($empname,$row['name']);
     array_push($working,$timedifference);
          array_push($employeeintime,$row['in_time']);
          array_push($employeeouttime,$row['out_time']);
       array_push($dates,$row['date']);
           array_push($ids,$row['id']);
           array_push($statuss,$row['status']);
            array_push($employee_id,$row['employee_id']); 
             array_push($tasks,$row['emp_task']); 
             array_push($break, $break1);
     array_push($total, $timediff2);
            
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
  
 include_once('roaster.php');
?>