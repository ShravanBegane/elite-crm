<?php
//require_once '../ValidateAuth.php';
include('config.inc.php');
error_reporting(0);
include("conn.php");
header('Content-type: application/json');
	include ("db.php") ; 
	$site_URL 		= 'http://elite.rightchoice.io/';
	$username 		= 'admin';
	$password   	= 'Elie$Right@321';
	$crm_useraccesskey     = 'r7nid3s1DH30pN';
	$service_url 	= $site_URL."webservice.php";
	$url 			= $service_url."?operation=getchallenge&username=".$username."&password=".$password;

if(!isset($_POST['empid'])){
	echo json_encode(array("status"=>"error","result"=>"please enter employee Id"));
	exit();	
}
if(!isset($_POST['clientid'])){
	echo json_encode(array("status"=>"error","result"=>"please enter Client Id"));
	exit();	
}

if (!isset($_POST['lat'])) {
   echo json_encode(array("false", "latitude  Not Found"));
	exit();	
    
} 
if (!isset($_POST['lng'])) {
    echo json_encode(array("false", "longitude Not Found"));
	exit();	
    
} 
 $dates = date("Y-m-d");
 $time = date("h:i:s A");
// if(!isset($_POST['punchin'])){
// 	echo json_encode(array("status"=>"error","result"=>"please enter punch in time"));
// 	exit();	
// }
// if(!isset($_POST['mainwork'])){
// 	echo json_encode(array("status"=>"error","result"=>"please enter main work"));
// 	exit();	
// }
// if(!isset($_POST['subwork'])){
// 	echo json_encode(array("status"=>"error","result"=>"please enter sub work"));
// 	exit();	
// }	
			$empid = $_POST['empid'];
			$clientid = $_POST['clientid'];
			//  date_default_timezone_set("Asia/Calcutta");
			// date("H:i:s"); 
			$punchin =$time;
			$mainwork = $_POST['mainwork'];
			$subwork = $_POST['subwork'];

			$wordDesc = $mainwork.",".$subwork;
			
				$contents = file_get_contents($url);
				$clima=json_decode($contents);
				if($clima->success == 1)
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
						curl_exec($curl);
						$curl_response = json_decode(curl_exec($curl));

						if ($curl_response->success != 1) die('Invalid user credentials');

						$crm_session = $curl_response->result->sessionName;
						$userId = $curl_response->result->userId;

							//$curl = curl_init($service_url);
							
							
								$curl_post_data1 = array(
										'operation' => 'create',
										'sessionName' => $crm_session,
										'elementType' => 'Transaction',
										'element' => '{"transaction_tks_employees":"19x'.$empid.'",
														"cf_1054":"11x'.$clientid.'",
														"cf_1170":"'.$punchin.'",
														"cf_1185":"'.$wordDesc.'",
															"cf_2948":"In Progress",
														"assigned_user_id":"'.$userId.'"}',
										
								);

							
							
							curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
							curl_setopt($curl, CURLOPT_POST, true);
							curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data1);
							$curl_response = curl_exec($curl);
							if ($curl_response === false) 
							{
								$info = curl_getinfo($curl);
								curl_close($curl);
								die('error occured during curl exec. Additioanl info: ' . var_export($info));
							}
							curl_close($curl);
							$decoded = json_decode($curl_response);
							// echo "<pre>"; print_r($decoded);echo "</pre>";
							// echo $decoded->result->id;
							$s = explode("x",$decoded->result->id);
							$record_id  = end($s);
							if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') 
							{
								die('error occured: ' . $decoded->response->errormessage);
							}
							else
							{
							    $statusMsg = '';
                                echo json_encode(array("status"=>"success","empid"=>$empid,"clientid"=>$clientid,"id"=>$decoded->result->id));      
                                
                                   
                                
                                  
                                    $colors = '#' . random_color();
                                    //$employee_id = $_POST['employee_id'];
                                    $lat = $_POST['lat'];
                                    $lng = $_POST['lng'];
                                   
                                        $query = "INSERT INTO vtiger_employee_tracker (record_id,employee_id,date,time,lat,lng,colors,status)
                                                           VALUES ('$record_id','$empid','$dates','$time','$lat','$lng','$colors','active');";
                                     $query .="INSERT INTO vtiger_employee_roster (id, employee_id, date,in_time,out_time,total_working_hour,status,record_id,emp_task) VALUES (NULL,'" . $empid . "','" . $dates . "','" . $time . "','','','In Progress','".$record_id."','".$mainwork."')";
                                    $json = array();
                                
                                
                                   
                                    if (mysqli_multi_query($conn, $query)) {
                                
                                        $json1 = array();
                                
                                        //echo json_encode($data);
                                        $json1["status"] = "success";
                                
                                        echo json_encode($json1);
                                    } else {
                                
                                        $data[] = $json;
                                        
                                        $json1["status"] = "error";
                                
                                        echo json_encode($json1);
                                    }



								                                                        
							}

				}
				else 
				{
					
					echo "error";
				} 
				
				
  function random_color_part()
    {
        return str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
    }

    function random_color()
    {
        return random_color_part() . random_color_part() . random_color_part();
    }

 

				    
?>
