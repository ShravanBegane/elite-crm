<?php
//require_once("../ValidateAuth.php");
//header("Content-Type:application/json");
include("conn.php");


if(function_exists($_POST['f'])) {  
   $_POST['f']();
}


function addInTime()
{
    include("conn.php");  require_once("../ValidateAuth.php");
//header("Content-Type:application/json");
include("conn.php");

 if(isset($_POST['vt_usr']) && !empty($_POST['vt_usr'])){
   $vt_usr = $_POST['vt_usr'];
 
 }else{
     die("please pass user id"."-red-");
       
 }
 
      if(isset($_POST['vt_usr_key']) && !empty($_POST['vt_usr_key'])){
    $vt_usr_key = $_POST['vt_usr_key'];
 
 }else{
     die("please pass user password"."-red-");
 }
    if (isset($_POST['employee_id']) && !empty($_POST['employee_id'])) {
          $date = date("Y-m-d");
        $time = date("h:i:s"); 
           $status="active";
         $employee_id=$_POST['employee_id']; 
echo date_default_timezone_get();
        $sql = "SELECT * FROM vtiger_employee_roster WHERE employee_id='$employee_id' AND date='$date' AND out_time='00:00:00'";
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) {
            $json1 = array();
            $json1["status"] = "already registered";
            echo json_encode($json1);
        } else {
            $query = "INSERT INTO vtiger_employee_roster (id, employee_id, date,in_time,out_time,total_working_hour) VALUES (NULL,'" . $employee_id . "','" . $date . "','" . $time . "','','');";
            $query .= "UPDATE vtiger_employee_tracker SET status='$status' WHERE employee_id='$employee_id'";
            $json = array();
            if (mysqli_multi_query($conn, $query)) { 
                //echo json_encode($data);
                $json1["status"] = "success";
                echo json_encode($json1);
            } else {
                $json = array();
                $data[] = $json;
                echo $mysqli->error;
                //echo json_encode($data);
                $json1["status"] = "connection error";
                echo json_encode($json1);
            }
        }
    } else {
        
         response("false", "employee_id Not Found");
          }
}







 function addEndTime()
    {    include("conn.php"); 
    require_once("../ValidateAuth.php");
//header("Content-Type:application/json");
include("conn.php");

 if(isset($_POST['vt_usr']) && !empty($_POST['vt_usr'])){
   $vt_usr = $_POST['vt_usr'];
 
 }else{
     die("please pass user id"."-red-");
       
 }
 
      if(isset($_POST['vt_usr_key']) && !empty($_POST['vt_usr_key'])){
    $vt_usr_key = $_POST['vt_usr_key'];
 
 }else{
     die("please pass user password"."-red-");
 }
     if (empty($_POST['employee_id'])) {
            response("false", "employee_id Not Found");
        } else {
            $date = date("Y-m-d");
            $time = date("h:i:s");
            $status="in-active";
            $employee_id = $_POST['employee_id'];
              $sql = "SELECT * FROM vtiger_employee_roster WHERE employee_id='$employee_id' AND date='$date' AND out_time='00:00:00' ";
               $result = $conn->query($sql); 
     
       
                if ($result->num_rows > 0) {
                    
                      while($row = $result->fetch_assoc()) {
                                    $In_date = $row["in_time"];
                                    $id = $row["id"];
                                                  }
                                               
                    $cal_time= round(((strtotime($time)-strtotime($In_date))/60)/60,2);
                    
                    $query = "UPDATE vtiger_employee_roster SET out_time='$time',total_working_hour='$cal_time' WHERE id='$id';";
                    $query .= "UPDATE vtiger_employee_tracker SET status='$status' WHERE employee_id='$employee_id'";
                            $json = array();
                            if (mysqli_multi_query($conn, $query)) {
                                $json1 = array();
                                //echo json_encode($data);
                                $json1["status"] = "success";
                                echo json_encode($json1);
                            } else {
                                $data[] = $json;
                                //echo json_encode($data);
                                $json1["status"] = "error";
                                echo json_encode($json1);
                            }
                }
    }
}
