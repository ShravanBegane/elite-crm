<?php
require_once '../ValidateAuth.php';
header("Content-Type:application/json");
include("conn.php");
$statusMsg = '';

$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$json1 = array();						
        if(empty($_POST['password']))
        {
            response("error","Please Enter Password");
        }
        else if(empty($_POST['email']))
        {
            response("error","Please Enter Email");
        }
        if(trim($_POST["password"]) != trim($_POST["confirm_password"])){
            echo json_encode(array("status"=>"error","result"=>"Password and confirm password doesn\'t match"));
            exit();
        }
        else{
            $query="SELECT * FROM `vtiger_users` where `email1` = '$email' ";
            $result =mysqli_query($conn,$query);
            $total_rows = mysqli_num_rows($result);

            if($total_rows > 0)
            {
                $salt = substr($email, 0, 2);
			    $salt = '$1$' . str_pad($salt, 9, '0');

			    $newpassword = crypt($password, $salt);
			    $sql = mysqli_query($conn, "UPDATE vtiger_users set user_password = '$newpassword' where email1='$email'");
			    if($sql){
			        $json1["status"] = "Success";
					$json1["message"] = "Password is Changed Successfully";
					echo json_encode($json1);
			    }
			    else{
			        $json1["status"] = "Error";
					$json1["message"] = "Please Try Again";
					echo json_encode($json1);
			    }
            }
            else{
                $json1["status"] = "Error";
					$json1["message"] = "Please Enter the Valid Email / Email not Found";
					echo json_encode($json1);
            }
        }
            
?>
