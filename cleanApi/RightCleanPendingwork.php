<?php
require_once '../ValidateAuth.php';
include('../config.inc.php');

error_reporting(1);
header('Content-type: application/json');

if(!isset($_POST['empid'])){
	echo json_encode(array("status"=>"error","result"=>"please enter your email or mobile number"));
	exit();	
}
if(!isset($_POST['clientid'])){
	echo json_encode(array("status"=>"error","result"=>"please enter your email or mobile number"));
	exit();	
}

 	$pendingWorkList =[];
 	$flag = false;

$tid="";
 if($result = getMyTransactions($_POST['empid'],$_POST['clientid'])){

// $hehaha =getWorkDetails($_POST['empid']);
	// $mainStorage = ($result);

	// print_r($mainStorage[0]['Services']); die;
	// print_r($result['Transactions']); die;
	$i=0;
	foreach($result['Transactions'] as $val){
	// 	// $services['Services'][$i] = getAllSServices($id);
		if($val->punchOut == null){
			array_push($pendingWorkList,$val);
			$flag = true;
		}
	// 	$mainStorage[0]['Transactions']['Sub Services']= $i;
		$i++;
	}

 	echo json_encode(array("status"=>"success","isWorkPending"=>$flag,"result"=>$pendingWorkList));
 }


function getMyTransactions($empid,$clientId){

	$null = "";

	$site_URL 		= 'http://elite.rightchoice.io/';
	$username 		= 'admin';
	$password   	= 'Elie$Right@321';
	$crm_useraccesskey     = 'r7nid3s1DH30pN';
	$service_url 	= $site_URL."webservice.php";
	$url 			= $service_url."?operation=getchallenge&username=".$username."&password=".$password;

	$contents = file_get_contents($url);
	$clima   = json_decode($contents);

			if($clima->success == true)
			{
				$token = $clima->result->token;
				$service_url = $site_URL."/webservice.php";
				$curl = curl_init($service_url);
				$curl_post_data = array(
					'operation' => 'login',
					'username' => $username,
					'accessKey' => md5($token.$crm_useraccesskey),
				);

				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($curl, CURLOPT_POST, true);
				curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
				//echo curl_exec($curl);
				$curl_response = json_decode(curl_exec($curl));

				if ($curl_response->success != 1) die('Invalid user credentials');

				$sessionName = $curl_response->result->sessionName;
				$userId = $curl_response->result->userId;

					
						
						$url = $service_url."?operation=query&sessionName=".$sessionName."&query=SELECT * FROM Transaction where transaction_tks_employees='19x".$empid."' AND cf_1054='11x".$clientId."';";
						//$url1 = $service_url."?operation=query&sessionName=".$sessionName."&query=SELECT * FROM Employees where cf_1066='f6072a64-1be4-4fb2-a62e-14efdaf105da';";
						$newurl = preg_replace("/ /", "%20", $url);
						$contents = file_get_contents($newurl);
						$clima=json_decode($contents);

						// print_r($clima); die;
						$result_set_all = [];
						foreach ($clima->result as $key => $value) {
							# code...
							if ($value->cf_1172 == "") {
								# code...
								$tid=substr(strstr($value->id, 'x'), strlen('x'));
								$result_set = [
									'transactionid' 				=> substr(strstr($value->id, 'x'), strlen('x')),
									'transactionno' 				=> $value->transactionno,
									'employeeId' 					=> substr($value->transaction_tks_employees, 3),
									'tags' 							=> $value->tags,
									'clientId' 						=> substr($value->cf_1054, 3),
									'punchIn' 						=> $value->cf_1170,
									'punchOut' 						=> $value->cf_1172,
									'servicelist' 					=> $value->cf_1185,
									'hours' 						=> $value->cf_1342,
								];
								array_push($result_set_all, $result_set);
								include "db.php" ; 	
                            	$query = "UPDATE vtiger_transactioncf     SET cf_2948='Pending' where transactionid='".$tid."'";
                            	$result = mysqli_query($con,$query);
                            	if(mysqli_affected_rows($con)){
                            	$query = "UPDATE vtiger_employee_roster   SET status='Pending'  where record_id='".$tid."'";
                            	$result = mysqli_query($con,$query);
                            	if(mysqli_affected_rows($con)){
                            	 $query = "UPDATE vtiger_employee_tracker SET status ='active'  where record_id='".$tid."'";
                                 $result = mysqli_query($con,$query);
                            	if(mysqli_affected_rows($con)){
                                              echo true;
                                            	}
                            	                }
                            	                }
							}
						}
						
						// print_r($result_set_all); die;
						return (array("Transactions"=>$result_set_all));	
														
						

			}
}


//Deleted user check
function getWorkDetails($id){
    $allW = [];
	include "db.php" ; 	
	$query = "SELECT * from vtiger_transaction INNER JOIN vtiger_transactioncf ON vtiger_transaction.transactionid = vtiger_transactioncf.transactionid where vtiger_transaction.transaction_tks_employees='$id'";
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


function checkEmp($empid){

	$null = "";

	$site_URL 		= 'http://newcrm.rightchoice.io/';
	$username 		= 'admin';
	$password   	= 'Comxtech@321';
	$crm_useraccesskey     = 'r7nid3s1DH30pN';
	$service_url 	= $site_URL."webservice.php";
	$url 			= $service_url."?operation=getchallenge&username=".$username."&password=".$password;

	$contents = file_get_contents($url);
	$clima   = json_decode($contents);

			if($clima->success == true)
			{
					
					
				$token = $clima->result->token;
				$service_url = $site_URL."/webservice.php";
				$curl = curl_init($service_url);
				$curl_post_data = array(
					'operation' => 'login',
					'username' => $username,
					'accessKey' => md5($token.$crm_useraccesskey),
				);

				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($curl, CURLOPT_POST, true);
				curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
				echo curl_exec($curl);
				$curl_response = json_decode(curl_exec($curl));

				if ($curl_response->success != 1) die('Invalid user credentials');

				$crm_session = $curl_response->result->sessionName;
				$userId = $curl_response->result->userId;

						
						$url = $service_url."?operation=query&sessionName=".$sessionName."&query=SELECT * FROM Employees where employeeId='".$empid."';";
						//$url1 = $service_url."?operation=query&sessionName=".$sessionName."&query=SELECT * FROM Employees where cf_1066='f6072a64-1be4-4fb2-a62e-14efdaf105da';";
						$newurl = preg_replace("/ /", "%20", $url);
						$contents = file_get_contents($newurl);
						$clima=json_decode($contents);

						print_r($clima); die;
			}else{
				return false;
			}
}


	
	
		

?>