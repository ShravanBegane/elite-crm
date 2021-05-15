<?php
require_once '../ValidateAuth.php';
header("Content-Type:application/json");
include("conn.php");
$statusMsg = '';

$username = $_POST['username'];
$email = $_POST['email'];
$json1 = array();						
			/* if(empty($_POST['username']))
			{
				response("error","Please Enter Username");
			}
			else */
			if(empty($_POST['email']))
			{
				response("error","Please Enter Email");
			}
			else
			{
				//$query="SELECT * FROM `vtiger_users` where `email1` = '$email' and `user_name`='$username'";
				$query="SELECT * FROM `vtiger_users` where `email1` = '$email' ";
				$result =mysqli_query($conn,$query);
				$total_rows = mysqli_num_rows($result);

				if($total_rows > 0)
				{
                    $to_email = $email;
                    $subject = "Change Password";
                    $body = "<html>
                    <head>
                    <title>Reset Password for Right Choice </title>
                    </head>
                    <body style='width:600px; margin:20px auto; border:1px solid #000;'>
                    <div style=' padding:20px;'>
                    <div style=' font-family:'Comic Sans MS', cursive;'>
                    <p style='font-size:18px;'>You recently requested a password reset for your Account.
                    To create a new password, click on the link <a href='http://newcrm.rightchoice.io/cleanApi/ChangePassword.php'>here</a></p> 
                    </div>
                    <div style=' font-family:'Comic Sans MS', cursive;'></div>
                                    <p><b>Thanks & Regards</b></p>
                    <p><b> https://rightchoice.io </b></p>
                    </div>
                    </body>
                    </html>";
                    $headers = "From: sender\'s email";
                    $headers .= "MIME-Version: 1.0\n" ;
                    $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
                    
                    if (mail($to_email, $subject, $body, $headers)) {
                        $json1["status"] = "Success";
					    $json1["message"] = "Email successfully sent to $to_email...";
				    	echo json_encode($json1);
                    } else {
                        echo "Email sending failed...";
                        //echo 'Mailer Error: ' . $mail->ErrorInfo;
                    }
                }
                else {
                    response("error","Email is not Match");
                }
			}
			
?>
