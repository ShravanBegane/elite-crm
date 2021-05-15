<?php
require_once("../ValidateAuth.php");
header("Content-Type:application/json");
include("conn.php");
$statusMsg = '';

if(empty($_POST['device_id']))
{
	response("error","Device id can't be empty");
}
if(empty($_POST['visitorsid']))
{
	response("error","Visitor Id can't be empty");
}
if(empty($_POST['comment'])){
	response("error","Comment is empty");
}
if(empty($_POST['rank'])){
	response("error","Rating is empty");
}
else
{
	$visitorsid = $_POST['visitorsid'];
	$device_id = $_POST['device_id'];
	$comment = $_POST['comment'];
	$rank = $_POST['rank'];
	$query="SELECT * FROM `my360reception_link_device`";
	$result =mysqli_query($conn,$query);
	$total_rows = mysqli_num_rows($result);

	if($total_rows > 0){
		$query = "INSERT into rightchoice_reception_feedback(visitorsid,comment,rank,device_id) 
		VALUES('".$visitorsid."','".$comment."','".$rank."','".$device_id."')";
		$result =mysqli_query($conn,$query);

		if($result){
			$response = ['status'=>'success','message'=>'Thank You for your Feedback'];
			echo json_encode($response);
		}else{
			$response = ['status'=>'unsuccessful','message'=>'Error saving the data'];
			echo json_encode($response);
		}
		
		mysqli_free_result($result);
	}else{
		$response = ['status'=>'unsuccessful','message'=>'Device id not found'];
		echo json_encode($response);
	}
}	
mysqli_close($conn);
?>
