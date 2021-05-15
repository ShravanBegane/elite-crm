<?php
require_once("../ValidateAuth.php");
header("Content-Type:application/json");
include("conn.php");
$statusMsg = '';

			 if(empty($_POST['device_id']))
			{
				response("error","Device id can't be empty");
			}
			if(empty($_POST['id']))
			{
				response("error","Id can't be empty");
			}
			if(empty($_POST['device_count']))
			{
				response("error","Device count can't be empty");
			}

			else
			{
				$id = $_POST['id'];
				$device_count = $_POST['device_count'];
				$device_id = $_POST['device_id'];
				$query="SELECT * FROM `my360reception_link_device`";
				$result =mysqli_query($conn,$query);
				$total_rows = mysqli_num_rows($result);
				
   				if($device_count == $total_rows){
				$query1="SELECT * FROM `my360reception_link_device` where device_id ='$device_id'";
				$result1 =mysqli_query($conn,$query1);
				$total_rows = mysqli_num_rows($result1);
				if($total_rows > 0){
					$json1["status"] = "error";
					$json1["message"] = "Device id is already registered";
					$json1["id"] = $id;
					$json1["device_count"] = $device_count;
					echo json_encode($json1);
				} else {
				$json1["status"] = "error";
				$json1["message"] = "Device count has been reached";
				$json1["id"] = $id;
			        $json1["device_count"] = $device_count;
				echo json_encode($json1);
				}
				} else {
				$query1="SELECT * FROM `my360reception_link_device` where device_id ='$device_id'";
				$result1 =mysqli_query($conn,$query1);
				$total_rows = mysqli_num_rows($result1);
				if($total_rows > 0){
				$json1["status"] = "error";
				$json1["message"] = "Device id is already registered";
				$json1["id"] = $id;
				$json1["device_count"] = $device_count;
				echo json_encode($json1);
				} else {
				$query="INSERT INTO `my360reception_link_device` (device_id,Password,Status) VALUES ('$device_id','','active')";
				$result = mysqli_query($conn,$query);
					if ($result) {				
					$json1 = array();
														
					$json1["status"] = "success";
					$json1["message"] = "Device id is Registered";
					$json1["id"] = $id;
					$json1["device_count"] = $device_count;
					echo json_encode($json1);
						
					
				}
			}
        }
	}	
			
?>
