<?php
//require_once '../ValidateAuth.php';
include('config.inc.php');
error_reporting(0);
include "db.php" ; 
header('Content-type: application/json');
		$site_URL 		= 'http://elite.rightchoice.io/';
	$username 		= 'admin';
	$password   	= 'Elie$Right@321';
	$crm_useraccesskey     = 'r7nid3s1DH30pN';
	$service_url 	= $site_URL."webservice.php";
	$url 			= $service_url."?operation=getchallenge&username=".$username."&password=".$password;

if(!isset($_POST['id'])){
	echo json_encode(array("status"=>"error","result"=>"Transaction Id required"));
	exit();	
}

if(!isset($_POST['servicelist'])){
	echo json_encode(array("status"=>"error","result"=>"Service list required"));
	exit();	
}
$recordid=$_POST['id'];


$filename="";
  $dates = date("Y-m-d");
            $time = date("h:i:s A");
$times=$time; 



 $j = 0; //Variable for indexing uploaded image 

    $target_path = "../storage/emp_transection/"; //Declaring Path for uploaded images
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) { //loop to get individual element from the array

        $validextensions = array("jpeg", "jpg", "png"); //Extensions which are allowed
        $ext = explode('.', basename($_FILES['file']['name'][$i])); //explode file name from dot(.) 
       
        $file_extension = end($ext); //store extensions in the variable

        $target_file =$target_path .  $_FILES["file"]["name"][$i];//set the target path with a new name of image
        
        $j = $j + 1; //increment the number of uploaded images according to the files in array       

        if (($_FILES["file"]["size"][$i] < 2097152) //Approx. 100kb files can be uploaded.
            && in_array($file_extension, $validextensions)) {
                //echo basename($_FILES['file']['name'][$i])."~";
               $filename=basename($_FILES['file']['name'][$i]);
               $label=$_POST['label'];
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_file)) { //if file moved to uploads folder
                

	
	$query = "INSERT INTO vtiger_transection_images (record_id,images_name, label)
VALUES ('$recordid', '$filename', '$label');";

	$result = mysqli_query($con,$query);
            } else { //if file was not moved.
                 $errors[]= $j.
                ').please try again!.';
            }
        } else { //if file size and file type was incorrect.
             $errors[]= $j.').Invalid file Size or Type';
        }}




if(updateTrans($_POST['id'],$time,$_POST['servicelist'])){//$_FILES['image']?$_FILES['image']['name']:""
	//$data = getTransData($_POST['id']);

	echo json_encode(array("status"=>"success","id"=>$_POST['id']));
	exit;
}else{
	echo json_encode(array("status"=>"error","id"=>$_POST['id'],"result"=>"punch out unsuccessfull or already punched out"));	
	exit;
}
	



function updateTrans($tid,$punchout="",$servicelist=""){
	include "db.php" ; 	
	$query = "UPDATE vtiger_transactioncf SET cf_1172 ='".$punchout."',	cf_1185 = '$servicelist',cf_2948='Done' where transactionid='".$tid."'";
	 //print_r($query); die;
	$result = mysqli_query($con,$query);

	if(mysqli_affected_rows($con)){
	    
	    $query = "UPDATE vtiger_employee_tracker SET status ='in-active' where record_id='".$tid."'";
	
	$result = mysqli_query($con,$query);

	if(mysqli_affected_rows($con)){
	    $query = "SELECT * FROM vtiger_employee_roster WHERE record_id='$tid'";
         $result = mysqli_query($con,$query);

               if ($result->num_rows > 0) {
                     while($row = $result->fetch_assoc()) {
                                    $In_date = $row["in_time"];
                                    $id = $row["id"];
                                                  }
                                                $time = date("h:i:s A"); 
                    $cal_time= round(((strtotime($time)-strtotime($In_date))/60)/60,2);
                    $cal_time= abs($cal_time);
                    $query = "UPDATE vtiger_employee_roster SET out_time='".$time."',total_working_hour='$cal_time' ,status='Done' where record_id='".$tid."'";
                    	$result = mysqli_query($con,$query);

	if(mysqli_affected_rows($con)){
                     return true;
                	}
                	else{
                		return true;
                	}
                                             
                    
                	  
                	}
                	else{
                		return true;
                	}
                	
                	}
                	else{
                		return false;
                	}
}

		
		else{
                		return false;
                	}
		
		  
}
		
				    
?>
