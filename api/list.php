<?php
//require_once("../ValidateAuth.php");
//header("Content-Type:application/json");
include("conn.php");

$statusMsg = '';

			if(empty($_POST['email']))
			{
				response("false","Email Not Found");
			}
			
			else if(empty($_POST['password']))
			{
				response("false","Password Not Found");
			}
			else
			{
			

				$email = $_POST['email'];
				$password = $_POST['password'];
				$query="SELECT * from vtiger_contactdetails ct,vtiger_contactsubdetails cst,vtiger_contactaddress cad,vtiger_contactscf csc WHERE cst.contactsubscriptionid = ct.contactid AND cad.contactaddressid = ct.contactid AND csc.contactid = ct.contactid and ct.email = '".$email."' and csc.cf_876 = '".md5($password)."'";
				$result = mysqli_query($conn,$query);
				$total_rows = mysqli_num_rows($result);
				$json = array();


				if ($total_rows > 0) 
				{

					$json1 = array();


					while($row1 = mysqli_fetch_assoc($result))
					{
						$json['id'] = "12x".$row1['contactid'];
						$json['email'] = $row1['email'];
						$json['cf_854'] = $row1['cf_854'];
						$data[] = $json;
							
					}
									
					//echo json_encode($data);
					$json1["success"] = "true";
					$json1['result'] = $data;
					echo json_encode($json1);
						
					
				}
				else 
				{

					$data[] = $json;
					//echo json_encode($data);
					$json1["success"] = "false";
					$json1['result'] = "No record found";
					echo json_encode($json1);
				}
			}
?>
