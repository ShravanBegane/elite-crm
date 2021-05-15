<?php
require_once("../ValidateAuth.php");
header("Content-Type:application/json");
include("conn.php");
$statusMsg = '';

$device_id = $_POST['device_id'];
$password = $_POST['password'];
$json1 = array();						
			 if(empty($_POST['device_id']))
			{
				response("error","Device id can't be empty");
			}
			else
			{
				$query="SELECT Password FROM `my360reception_link_device` where device_id ='$device_id' and Status ='active'";
				$result =mysqli_query($conn,$query);
				$total_rows = mysqli_num_rows($result);

				if($total_rows > 0)
				{
					$row = mysqli_fetch_assoc($result);
					$newpassword = $row['Password'];
					if($newpassword == ''){
						$json1["status"] = "error";
						$json1["message"] = "Password needs to be created for this device";
						echo json_encode($json1);
				} else if($password == $newpassword){									
				
					  $json1["status"] = "success";
					  $json1["message"] = "Password verified successfully";
					  echo json_encode($json1);
				} else {
						$json1["status"] = "error";
						$json1["message"] = "Invalid password";
						echo json_encode($json1);
					}
				} 
				else {
					$json1["status"] = "error";
					$json1["message"] = "Device id is not found";
					echo json_encode($json1);
				}
			}
			
?>
