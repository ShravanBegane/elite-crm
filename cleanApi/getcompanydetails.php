<?php
require_once '../ValidateAuth.php';
header("Content-Type:application/json");
include("conn.php");
$statusMsg = '';

$id = $_POST['id'];
$json1 = array();						
			 if(empty($_POST['id']))
			{
				response("error","Company id can't be empty");
			}
			else
			{
				$query="SELECT * FROM `vtiger_companydetails` where company_id ='$id'";
				$result =mysqli_query($conn,$query);
				$total_rows = mysqli_num_rows($result);

				if($total_rows > 0)
				{
					$row = mysqli_fetch_assoc($result);
					$sql = mysqli_query($conn, "SELECT * FROM `vtiger_organizationdetails` WHERE organization_id='1'");
					while($row1 = mysqli_fetch_assoc($sql)){
						$image = $row1['logoname'];
						$name = $row1['organizationname'];
					}
                    $response = 
                    json_encode(
                        array(
                            "status"=>"success",
                            "result"=>array(
                                "id"=> $_POST['id'],
                                "url"=>$row['url'],
                                "name"=> $name,
                                "logo" => $row['logo'].$image,
                            )
                        )
                    );
                    echo $response;
				} 
				else {
					$json1["status"] = "error";
					$json1["message"] = "Company id is not found";
					echo json_encode($json1);
				}
			}
			
?>
