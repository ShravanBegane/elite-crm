<?php
error_reporting(1);
header("Content-Type:application/json");
include("session.php");

$field_name=key($_FILES);
$enroll_face_details=enrollFace();
$enroll_face=json_decode($enroll_face_details[1]);
$accessuser_faceURL=$enroll_face->faceURL;
$accessuser_faceId=$enroll_face->faceId[0];
if($accessuser_faceURL == NULL)
{
	echo json_encode(array("status"=>"error","result"=>"Already registered"));
} 
else 
{
$accessuserid1=useraccessid();
$accessuserid=$accessuserid1 + 1;


$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$user_name=$_POST["user_name"];
$work_email=$_POST["work_email"];
$mobile_phone=$_POST["mobile_phone"];
$type=$_POST["type"];
$address1=$_POST["address1"];

$date=date("Y/m/d");
$time=date("h:i:sa");
$user_type="user";

include "db.php";

	$user_data = array(
		'status_id'       => 10, //Active
		'first_name'      => $first_name,
		'last_name'       => $last_name,
		'employee_number' => rand( 10000, 99999 ),
		'user_name'       => $user_name . rand( 10000, 99999 ),
		'hire_date'       => '01-Aug-1990',
		'currency_id'     => $new_hire_defaults['currency_id'],
		'company'     => "My360CRM",
		'company_id'       => "11e96d8d-199e-6920-96e2-14d35962053e",
		'legal_entity_id'       => "11e96d8d-19a2-cc10-b946-14d35962053e",
		'legal_name'       => "My360CRM",
		'permission_control_id' => "11e96d90-1e08-1190-ae6f-14d35962053e",
        	'permission_control' => "Regular Employee (Punch In/Out)",
        	'pay_period_schedule_id' => "11e97b64-13e6-0ef0-b970-14d35962053e",
        	'pay_period_schedule' => "Standard Week",
        	'policy_group_id' => "11e96d8d-1a01-8ae0-bfee-14d35962053e",
        	'policy_group' => "- Hourly Employees",
		'other_id2' => $accessuser_faceId,
		'other_id3' => $accessuser_faceURL,
		'address1' => $address1,
		'mobile_phone' => $mobile_phone,
		'work_email' => $work_email,

		);
		
		$result = postToURL( buildURL( 'APIUser', 'setUser' ), array($user_data));

	$sql ="SELECT * from users where other_id2='$accessuser_faceId'";
	$userid = [];
	$result = pg_query($db, $sql);
	while($row = pg_fetch_row($result)) 
	{		
		$userid[]=$row[0];
	}

	$punchstatus = 'IN';
	$punch_data = array(
		'user_id' => $userid[0], //ID from above newly added employee
		'type_id'   => 10, //Normal
		'status_id' => 10, //10 - In, 20 - Out
		'time_stamp' => strtotime(date("d-M-Y h:ia")),
		'branch_id'     => $new_hire_defaults['default_branch_id'], //Branch
		'department_id' => $new_hire_defaults['default_department_id'], //Department
	);
	
	//var_dump($punch_data);
	$punchresult = postToURL( buildURL( 'APIPunch', 'setPunch' ), array($punch_data) );
	//var_dump($punch_data);		
        if ( $punchresult !== FALSE ) {
			echo json_encode(array("status"=>"success","userid"=>$userid[0],"name"=>$first_name,"punch"=>$punchstatus ,"date_time"=>date("d-M-Y h:ia"),"type"=>$user_type));						
		} else {
			echo json_encode(array("status"=>"error"));	
		}

}
function useraccessid(){
	include "db.php" ;
	$query = "SELECT * from users ORDER BY id DESC LIMIT 1";
	$result = pg_query($db, $query);
	$id[] = '';
	while($row = pg_fetch_row($result)) {		
		$id[]=$row['0'];
	}
	return $id[0];
}	
//Index face
function enrollFace(){
		$targetDir = "user_photo/";
		$fileName = $_FILES["image"]["name"];
		$targetFilePath = $targetDir.uniqid().$fileName;
       		// Upload file to server
        	if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath))
		{
       			$api_key=apiKey();

       			ini_set('display_errors', 1);

				$curl = curl_init();
				curl_setopt($curl, CURLOPT_URL, 'http://13.211.17.77:5000/api/enroll');
				curl_setopt($curl, CURLOPT_VERBOSE, 1);
				curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
				// Set HTTP Header for POST request 
				curl_setopt($curl, CURLOPT_HTTPHEADER, array(
					'Content-Type: multipart/form-data',
					'authorization:Bearer '.$api_key)
				);
				// download image to temp file for upload
				//$tmp = tempnam(sys_get_temp_dir(), 'prefix');
				//rename($tmp, $tmp.'.jpg');
				//file_put_contents($tmp, file_get_contents($_FILES["tmp_name"]));
				function getCurlValue($filename, $contentType, $postname)
				{
 
					if (function_exists('curl_file_create')) {
						return curl_file_create($filename, $contentType, $postname);
					}

					// Use the old style if using an older version of PHP
					$value = "@{$this->filename};filename=" . $postname;
					if ($contentType) {
						$value .= ';type=' . $contentType;
					}

					return $value;
				}
				//$filename = '/path/to/file.jpg';
				$cfile = getCurlValue($targetFilePath,'image/jpeg','cattle-01.jpg');
				$data = array('image' => $cfile);
				// send a file
				curl_setopt($curl, CURLOPT_POST, true);
				curl_setopt($curl,CURLOPT_POSTFIELDS,$data);
				//var_dump($image_file);
				// output the response
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				$result = array($targetFilePath,curl_exec($curl));
				return $result;
				unlink($tmp); // remove temp file
				curl_close($curl);
		}else{
			echo "error";
		}
}
//Fetch user details
function userDetails($face_id){
	$date=date("Y/m/d");
	$time=date("h:i:sa");
	include "db.php" ;
	$query = "SELECT * FROM users where other_id3='$face_id'";
	$result = pg_query($db, $sql);
	$name=[];
	$id=[];
	while($row = pg_fetch_row($result)) {		
		$name[]=$row['9'];
		$id[]=$row['0'];
	}
	return $name[0];
}
function deleteUserCheck($id){
	include "db.php" ; 
	$query = "SELECT * from users where id='$id'";
	$result = pg_query($db, $sql);
	$deleted_user[] = '';
	while($row = pg_fetch_row($result)) {		
		$deleted_user[]=$row['9'];
		$id[]=$row['0'];
	}
	return $deleted_user[0];
}

//API Key generation

function apiKey(){

			ini_set('display_errors', 1);
			$data = json_encode(array('usernameOrEmail' => 'my360face','password' => 'my360face'));
				$curl = curl_init();
				curl_setopt($curl, CURLOPT_URL, 'http://13.211.17.77:5000/api/auth/signin');
				curl_setopt($curl, CURLOPT_VERBOSE, 1);
				curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
				// Set HTTP Header for POST request 
				curl_setopt($curl, CURLOPT_HTTPHEADER, array(
					'Content-Type: application/json')
				);
				curl_setopt($curl, CURLOPT_POST, true);
				curl_setopt($curl,CURLOPT_POSTFIELDS,$data);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				$api_key=json_decode(curl_exec($curl))->accessToken;
				return $api_key;
				curl_close($curl);


}


function response($status,$status_message,$data)
{
	header("HTTP/1.1 ".$status);				
}



?>