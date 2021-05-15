<?php
require_once("../ValidateAuth.php");
header("Content-Type:application/json");
include("conn.php");
$statusMsg = '';

$id = $_POST['id'];
$break = $_POST['break'];

$dates = date("Y-m-d");
$time = date("H:i:s");

$json1 = array();						
			 if(empty($_POST['id']))
			{
				response("error","id can't be empty");
			}
            else
			{
				$query="SELECT * FROM `vtiger_employee_roster` where  Status !='Stop' and id='$id'";
				$result =mysqli_query($conn,$query);
				$total_rows = mysqli_num_rows($result);

				if($total_rows > 0)
				{
					$row = mysqli_fetch_assoc($result);
					//echo "select * from `vtiger_employee_roasterbreak` where recordid='$id' and `breakend`='00:00:00'";
					$sql1 = mysqli_query($conn, "SELECT * from `vtiger_employee_roasterbreak` where recordid='$id' and `breakend`='00:00:00'");
					if(mysqli_num_rows($sql1)>0){
						$row1 = mysqli_fetch_assoc($sql1);
						$time2 = new DateTime($row1['breakstart']);
						$time1 = new DateTime($time);
						$timediff = $time1->diff($time2);
						$timedifference = $timediff->format('%H:%i:%s')."<br/>";
						mysqli_query($conn, "UPDATE `vtiger_employee_roasterbreak` set `breakend`='$time', tot_break_time = '$timedifference' where id='$row1[id]'");
						mysqli_query($conn, "UPDATE vtiger_employee_roster set status='In progress' where id='$id'");
						$json1["status"] = "Success";
						$json1["message"] = "Break End";
						echo json_encode($json1);
					}
					else{
						mysqli_query($conn, "INSERT INTO `vtiger_employee_roasterbreak`(`id`, `emp_id`, `date`, `breakstart`, `breakend`, `tot_break_time`, `recordid`)
					 	VALUES ('','$row[employee_id]','$dates','$time','','','$id')");
						mysqli_query($conn, "UPDATE vtiger_employee_roster set status='Break' where id='$id'");
						$json1["status"] = "Success";
						$json1["message"] = "Break Taken";
						echo json_encode($json1);
					}
				} 
				else {
					$json1["status"] = "error";
					$json1["message"] = "Work is Already Completed";
					echo json_encode($json1);
				}
			}
			
?>
