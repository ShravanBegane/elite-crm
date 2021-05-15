<?php
require_once '../ValidateAuth.php';


error_reporting(1);
header('Content-type: application/json');

if(!isset($_POST['username'])){
	echo json_encode(array("status"=>"error","result"=>"please enter your User Name"));
	exit();	
}
if(!isset($_POST['password'])){
		echo json_encode(array("status"=>"error","result"=>"please enter your password"));
		exit();	
}


if($userDet = userCheckByEmailorPhoneInEmp($_POST['username'])){
    $user_id = $userDet['id'];
	$userDetin = userDetailsCf($user_id);
	$workD = getWork($user_id);//getWorkDetails($user_id);
	$company_data = getCompanyDetails($companyId);
	$check_user_active=userActiveCheck($userDetin["id"]);
	if($check_user_active == "Deactive"){
		echo json_encode(array("status"=>"error","result"=>"inactive user"));
		exit();
	}
	$check_user_status=deleteUserCheck($userDetin["id"]);
	if($check_user_status == "1"){
		exit(json_encode(array("status"=>"error","result"=>"deleted user")));		
	}
	$user_password =$_POST['password'];
	$dbuser_password = $userDet['user_password'];
	
	//if($userDet['user_password'] == encrypt_password($pwd)) {		
	if(password_verify($user_password, $dbuser_password)) {	
		$newClientList = getMyClients($_POST['username']);

		// print_r($newClientList); die;
		$empAllDetails = getEmpInfo($_POST['username']);
        
// 		if($empAllDetails[0]->cf_1338 != ""){
// //if($userDetin['image'] != ""){
// 			$pathList = [];
// 			$pathList2 = [];
// 			$pathFila;
// 			$year = date('Y');
// 			$month = date('F');
// 			$currentDate = date('d-m-Y');
// 			$week = weekOfMonth($currentDate);
            
// 			$it = new RecursiveDirectoryIterator($root_directory."storage");
// 			//echo "-------"; die();
// 			$display = Array ( 'jpeg', 'jpg', 'png' );
// 			foreach(new RecursiveIteratorIterator($it) as $file)
// 			{
// 			    if (in_array(strtolower(array_pop(explode('.', $file))), $display)){
// 			    	array_push($pathList, $file);
// 			        // echo $file . "<br/> \n";
// 			    }
// 			}
// 			foreach ($pathList as $value) {
// 				# code...
// 				// array_push($pathList2, $value->getFilename());
// 				array_push($pathList2, substr($value->getFilename(),5));
// 				// $tmpFname = explode("_",$value->getFilename());
// 				// if($value->getFilename() == $empAllDetails[0]->cf_1338)
// 				// {
// 				// 	$pathFila = $value->getPathName();
// 				// }else{
// 				// 	$pathFila = $value->getFilename()."-".$empAllDetails[0]->cf_1338;
// 				// }
				
// 			// print_r($value->getFilename());
// 			}
// 			// echo $empAllDetails[0]->cf_1338;
// 			// var_dump(array_search($empAllDetails[0]->cf_1338,$pathList2));
// 			$imgAbsPath = $pathList[array_search($empAllDetails[0]->cf_1338,$pathList2)]->getPathName();
// 			$relativePath = str_replace("/var/www/html/reception/Free/200826165138QueenslandCleaningClub/",$site_URL,$imgAbsPath);
// 			// var_dump($relativePath);
            
            
            
// 			$empImage = $relativePath;
// 		}else{
// 			$empImage = "https://dev-reception.rightchoice.io/reception/Free/200826165138QueenslandCleaningClub/test/logo/NEW%20Quessland%20logo.png";
// 		}

		if($userDetin['image'] != "")
		    $empImage = getUserImage($userDetin['image']);
		else
		    $empImage = "";
		//"clientsData"=>$newClientList['Client'],
		// "companyData"=>$company_data,
		// "workData" => $workD,
		// "clientsData"=>'',
		exit(json_encode(array(
		    "status"=>"success",
		    "data"=> array(
		    "name"=>$userDetin["name"], 
		    "image"=> $empImage,
		    "userType"=>$userDetin['privillage'],
		    "userData"=>$userDetin['allData'],
		    ),
		    ))
		);
	}else{
		exit(json_encode(array("status"=>"error","result"=>"Incorrect Password".$pwd."req".encrypt_password($pwd))));
	}
	exit(json_encode(array("status"=>"error","result"=>"No User Found")));
}else{
	exit(json_encode(array("status"=>"error","result"=>"No User Found")));
}


function get_dir_content($directory,$filename){
	// print_r($directory); die;
	$res = "No file found";
	$files = scandir($directory."storage");
	foreach ($files as $file) {
		# code...
		if($file == '.' || $file == '..'){
			continue;
		}
		$is_file = false;
		$path = realpath($directory. DIRECTORY_SEPARATOR .$file);

		if(is_dir($path)){
			get_dir_content($path);
		}else{
			$is_file = true;
		}

		if($is_file){
			if($file == $filename){
				$res = $path;
			}
		}
	}
	return $res;
}

function getImageDirectory($ipaPath,$ipath) {
    $oDirectory = new RecursiveDirectoryIterator($ipaPath);
    $oIterator = new RecursiveIteratorIterator($oDirectory);
    foreach($oIterator as $oFile) {
        if ($oFile->getFilename() == $ipath) {
           return $oFile->getPath();
        }
    }
}

function weekOfMonth($date) {
    //Get the first day of the month.
    $firstOfMonth = strtotime(date("Y-m-01", $date));
    //Apply above formula.
    return intval(date("W", $date)) - intval(date("W", $firstOfMonth)) + 1;
}



function getMyClients($email){
	$site_URL 		= 'http://newcrm.rightchoice.io/';
	$username 		= 'admin';
	//$password   	= 'shan@aussiebuspartners.com';
	$service_url 	= $site_URL."webservice.php";
	$url 			= $service_url."?operation=getchallenge&username=".$username;

	$contents = file_get_contents($url);
	$clima   = json_decode($contents);

			if($clima->success == true)
			{
					
					
						$sessionName = $clima->result->sessionName;
						$userId = $clima->result->userId;
					
						
						$url1 = $service_url."?operation=query&sessionName=".$sessionName."&query=SELECT * FROM Employees where cf_1056='".$email."';";
						//$url1 = $service_url."?operation=query&sessionName=".$sessionName."&query=SELECT * FROM Employees where cf_1066='f6072a64-1be4-4fb2-a62e-14efdaf105da';";
						$newurl1 = preg_replace("/ /", "%20", $url1);
						$contents1 = file_get_contents($newurl1);
						$clima1=json_decode($contents1);
						
						
						if($clima1->success == 1)
						{
							
							/* $s = explode("x",$clima1->result[0]->id);
							$cleanempid  = end($s); */
							$id = $clima1->result[0]->id;
							$cleanempname = $clima1->result[0]->employees_tks_employeename;
							$cleanempurl = $clima1->result[0]->cf_1064;
							
							/* echo "Emp Id :". $id."<br/>";
							echo "Emp Name :".$cleanempname."<br/>"; */
							$relatedLabel = "Clients";
							$cleanclientname = "";
							$cleanservicetypename = "";

							/* $json = array();
							$json['EmployeeName'] = $cleanempname;
							$json['EmployeeImage'] = $cleanempurl; */

							

							//echo json_encode(array("status"=>"success","id"=>$id,"Emp"=>$cleanempname,"url"=>$cleanempurl));
							
							$url2 = $service_url."?operation=retrieve_related&sessionName=".$sessionName."&id=".$id."&relatedLabel=".$relatedLabel."&relatedType=".$relatedLabel."";
							$newurl2 = preg_replace("/ /", "%20", $url2);
							$contents2 = file_get_contents($newurl2);
							$clima2=json_decode($contents2);
							$client_id = array();

							$id = $clima2->result[0]->id;
							$clientname = $clima1->result[0]->clients_tks_clientname;
							$clientemail = $clima1->result[0]->cf_1072;
							$clientphone = $clima1->result[0]->cf_1074;
							$cleanempname = $clima1->result[0]->cf_1076;
							$cleanempurl = $clima1->result[0]->cf_1064;
							$id = $clima1->result[0]->id;
							$cleanempname = $clima1->result[0]->employees_tks_employeename;
							$cleanempurl = $clima1->result[0]->cf_1064;

							$clima2->result[0]->cf_1082 = date('H:i:s', strtotime($clima2->result[0]->cf_1082));
							$result_set_all = [];
							foreach ($clima2->result as $key => $value) {
								# code...
								// $id = explode('x', string)
								$result_set = [
									'clientsno' 		=> $value->clientsno,
									'clients_tks_clientname' => $value->clients_tks_clientname,
									'assigned_user_id' 	=> $value->assigned_user_id,
									'createdtime' 		=> $value->createdtime,
									'modifiedtime' 		=> $value->modifiedtime,
									'source' 			=> $value->source,
									'starred' 			=> $value->starred,
									'tags' 				=> $value->tags,
									'email' 			=> $value->cf_1072,
									'phone' 			=> $value->cf_1074,
									'address'	 		=> $value->cf_1076,
									'frequency' 		=> $value->cf_1078,
									'day' 				=> $value->cf_1080,
									'hours' 			=> $value->cf_1082,
									'access' 			=> $value->cf_1084,
									'products' 			=> $value->cf_1086,
									'time' 				=> $value->cf_1146,
									'description' 		=> $value->cf_1148,
									'id'				=> substr($value->id, 3)
								];
								array_push($result_set_all, $result_set);
							}

							return (array("Client"=>$result_set_all));																						
									
						}
														
						

			}
}



function getEmpInfo($email){


	$site_URL 		= 'http://newcrm.rightchoice.io/';
	$username 		= 'admin';
	//$password   	= 'shan@aussiebuspartners.com';
	$service_url 	= $site_URL."webservice.php";
	$url 			= $service_url."?operation=getchallenge&username=".$username;

	$contents = file_get_contents($url);
	$clima   = json_decode($contents);

			if($clima->success == true)
			{
					
					
						$sessionName = $clima->result->sessionName;
						$userId = $clima->result->userId;
					
						
						$url1 = $service_url."?operation=query&sessionName=".$sessionName."&query=SELECT * FROM Users where email1='".$email."';";
						//$url1 = $service_url."?operation=query&sessionName=".$sessionName."&query=SELECT * FROM Employees where cf_1066='f6072a64-1be4-4fb2-a62e-14efdaf105da';";
						$newurl1 = preg_replace("/ /", "%20", $url1);
						$contents1 = file_get_contents($newurl1);
						$clima1=json_decode($contents1);
														
						return $clima1->result;

			}
}
function userCheckByEmailorPhoneInEmp($val){
	include "db.php" ; 
	$query = "SELECT * from vtiger_users where user_name='$val'";
	$result = mysqli_query($con,$query);
	$check_user = mysqli_num_rows($result);	
	return mysqli_fetch_assoc($result);
}
//User exists check
function userCheckByEmailorPhoneInClient($val){
	include "db.php" ; 
	$query = "SELECT * from vtiger_employeescf where cf_1056='$val'";
	$result = mysqli_query($con,$query);
	$check_user = mysqli_num_rows($result);
	if($check_user <= 0){
		$query = "SELECT * from vtiger_employeescf where cf_1058='$val'";
		$result = mysqli_query($con,$query);
		$check_user = mysqli_num_rows($result);		
	}
	return mysqli_fetch_assoc($result);
}
//User exists check
function userCheckByEmailorPhoneUsers($val){
	include "db.php" ; 
	$query = "SELECT * from vtiger_users where user_name='$val'";
	$result = mysqli_query($con,$query);
	$check_user = mysqli_num_rows($result);
	return mysqli_fetch_assoc($check_user);
}
function userDetailsCf($id){
	$date=date("Y/m/d");
	$time=date("h:i:sa");
	include "db.php" ;
	$query = "SELECT * FROM vtiger_users WHERE id='$id'";
	$result = mysqli_query($con,$query);
	$cleanempLists = mysqli_fetch_assoc($result);
	$cleanempname= $cleanempLists['user_name'];
	$employeesid=$cleanempLists['id'];
	$empno=$cleanempLists['id'];
	$image=$cleanempLists['imagename'];
 	//print_r($cleanempLists); die;

	$query2 = "SELECT * FROM vtiger_users WHERE id='$id'";
	$result2 = mysqli_query($con,$query2);
	$cleanempLists2 = mysqli_fetch_assoc($result2);
	$allData['employeesid'] = $cleanempLists2['id'];
	$allData['email'] = $cleanempLists2['email1'];
	$allData['phone'] = $cleanempLists2['phone_mobile'];
	$address = $cleanempLists2['address_street'].$cleanempLists2['address_city'].
	$cleanempLists2['address_state'].$cleanempLists2['address_country'].$cleanempLists2['address_postalcode']; 
	$allData['address'] = $address;
	$allData['regKey'] = '';//$cleanempLists2[''];
	$allData['employeestatus'] = $cleanempLists2['status'];
	// print_r($cleanempLists2); die;

	$privillage="Employee";
// 	print_r($privillage); die;

	$insert_query = "INSERT INTO vtiger_cleanemp_login_details (employeesid, cleanempdate, cleanemptime) VALUES ('$employeesid','$date','$time')";
	$insert_result = mysqli_query($con,$insert_query); 
	
	$result=array("name"=>$cleanempname,"id"=>$employeesid,"empno"=>$empno,"privillage"=>$privillage,"image"=>$image,"allData"=>$allData);
	return $result;
}

function userActiveCheck($id){
	include "db.php" ; 	
	$query = "SELECT * from vtiger_users  WHERE id='$id'";
	$result = mysqli_query($con,$query);
	$deleted_user = mysqli_fetch_assoc($result);
	return $deleted_user["status"];
}

function getUserImage($imgname){
	include "db.php";
	$query = "SELECT * from vtiger_attachments  WHERE name='$imgname'";
	$result = mysqli_query($con,$query);
	$usr_attach = mysqli_fetch_assoc($result);
    $attachmentsid = $usr_attach["attachmentsid"];
    $attachmentsid = $usr_attach["attachmentsid"];
    $path = $usr_attach["path"];
    $storedname = $usr_attach["storedname"];
    $img_path = $path.$attachmentsid."_".$storedname;
    return $img_path;
}

//Deleted user check
// function deleteUserCheck($id){
// 	include "db.php" ; 	
// 	$query = "SELECT * from vtiger_crmentity where crmid='$id' and deleted != 0";
// 	$result = mysqli_query($con,$query);
// 	$deleted_user = mysqli_fetch_assoc($result);
// 	return $deleted_user["deleted"];
// }

function deleteUserCheck($id){
	include "db.php" ; 	
	$query = "SELECT * from vtiger_users where id='$id' and deleted != 0";
	$result = mysqli_query($con,$query);
	$deleted_user = mysqli_fetch_assoc($result);
	return $deleted_user["deleted"];
}

function getWorkDetails($id){
    $allW = [];
	include "db.php" ; 	
	$query = "SELECT * from vtiger_transcationdetails INNER JOIN vtiger_transcationdetailscf ON vtiger_transcationdetails.transcationdetailsid = vtiger_transcationdetailscf.transcationdetailsid where vtiger_transcationdetails.transaction_tks_employees='$id'";
	$result = mysqli_query($con,$query);
// 	$allWorks = mysqli_fetch_assoc($result);
// 	$tid = $allWorks['transactionid'];
    // if (mysqli_num_rows($result) > 0) {
    //     while($row = mysqli_fetch_assoc($result)) {
    //         $query21 = "SELECT clients_tks_clientname from vtiger_clients where vtiger_clients.clientsid='".$row['cf_1054']."'";
	   //      $result21 = mysqli_query($con,$query21);
	   //      $allWorks = mysqli_fetch_assoc($result21);
	   //      $row['cf_1054'] = $allWorks['clients_tks_clientname'];
    //         array_push($allW,$row);
    //     }
    // }
	// print_r($allW); die;
	//'hours' 						=> $value['cf_1342'],
	$result_set_all = [];
	 while($value = mysqli_fetch_assoc($result)) {
		# code...
		$result_set = [
			'transactionid' 				=> $value['transcationdetailsid'],
			'transactionno' 				=> $value['transcationdetailsno'],
			'transaction_tks_employees' 	=> $value['transcationdetails_tks_employe'],
			'tags' 							=> $value['tags'],
			'clientname' 					=> $value['transcationdetails_tks_client'],
			'punchIn' 						=> $value['transcationdetails_tks_timein'],
			'punchOut' 						=> $value['transcationdetails_tks_timeout'],
			'servicelist' 					=> $value['transcationdetails_tks_service'],
			'hours' 						=> '',
		];
		array_push($result_set_all, $result_set);
	}
// 	$query = "SELECT * from vtiger_transactioncf where transactionid='$tid'";
// 	$result = mysqli_query($con,$query);
// 	$workDetails = mysqli_fetch_assoc($result);
	return $result_set_all;
}

function getClients($id){
    $allW = [];
	include "db.php" ; 	
	$query = "SELECT * from vtiger_clients INNER JOIN vtiger_clientscf ON vtiger_transaction.clientsid = vtiger_transactioncf.clientsid where vtiger_transaction.transaction_tks_employees='$id'";
	$result = mysqli_query($con,$query);
// 	$allWorks = mysqli_fetch_assoc($result);
// 	$tid = $allWorks['transactionid'];
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $query21 = "SELECT clients_tks_clientname from vtiger_clients where vtiger_clients.clientsid='".$row['cf_1054']."'";
	        $result21 = mysqli_query($con,$query21);
	        $allWorks = mysqli_fetch_assoc($result21);
	        $row['cf_1054'] = $allWorks['clients_tks_clientname'];
            array_push($allW,$row);
        }
    }
// 	print_r($allW); die;
// 	$query = "SELECT * from vtiger_transactioncf where transactionid='$tid'";
// 	$result = mysqli_query($con,$query);
// 	$workDetails = mysqli_fetch_assoc($result);
	return $allW;
}

function getCompanyDetails($id){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,"https://dev.rightchoice.io/include/Webservices/getcompanyInfo.php");
    curl_setopt($ch, CURLOPT_POST, 1);
    // curl_setopt($ch, CURLOPT_POSTFIELDS,
    //             "id=value1&postvar2=value2&postvar3=value3");
    
    // In real life you should use something like:
    curl_setopt($ch, CURLOPT_POSTFIELDS, 
             http_build_query(array('id' => $id)));
    
    // Receive server response ...
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $server_output = json_decode(curl_exec($ch));
    
    curl_close ($ch);
    // print_r($server_output->status); die;
    
    // Further processing ...
    if ($server_output->status == "success") { 
        
        // echo "hello";
        // print_r($server_output->result); die;
        return $server_output->result;
        
    }else { 
        
        return array();
        // print_r($server_output); die;
        
    }
}

function getWork($id){
$curl_post_data = [
    'userid' => $id,
];
$service_url = 'http://newcrm.rightchoice.io/scheduler.php';
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_USERPWD, _uName.":"._aKey); //Your credentials goes here
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //IMP if the url has https and you don't want to verify source certificate

$curl_response = curl_exec($curl);
$server_output = json_decode($curl_response);
curl_close($curl);
    if ($server_output->status == "success") { 
        
        // echo "hello";
        // print_r($server_output->result); die;
        return $server_output->result;
        
    }else { 
        
        return $server_output->result;
        // print_r($server_output); die;
        
    }
}


	function encrypt_password($user_password) {
		$salt = null; /* Recommended */
		$crypt_type='PHASH';
		$crypt_type = (version_compare(PHP_VERSION, '5.3.0') >= 0)? 'PHP5.3MD5': 'MD5';
// 		if (version_compare(PHP_VERSION, '5.5.0') >= 0) {
//                     $crypt_type = 'PHASH';
//             }
        
		$encrypted_password = ($crypt_type == 'PHASH') ?
				password_hash($user_password, PASSWORD_DEFAULT) : /* recommended */
				crypt($user_password, $salt); /* backward compatibility */

		return $encrypted_password;
	}
?>