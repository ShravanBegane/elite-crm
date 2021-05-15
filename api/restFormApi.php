<?php
include('checkToken.php');

//echo "<pre>"; print_r($_POST);
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
 $postcode = $_POST['postcode']; 
 
 $comm = $_POST['comm']; 
 
if (isset($_POST['btnUpload']))
{
$url = "http://vitger.ihelpapp.com/leadAttachment.php"; // e.g. http://localhost/myuploader/upload.php // request URL

if (isset($_FILES['file']['tmp_name']))
{

    $csv_file = new CURLFile($_FILES['file']['tmp_name'],$_FILES['file']['type'],$_FILES['file']['name']);
			
	$curl = curl_init();
	
	$post_data = array(
      "file" => $csv_file, "first_name" => $first_name, "last_name" => $last_name, "email" => $email, "phone" => $phone, "postcode" => $postcode , "comm" => $comm );
	
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
	$response = curl_exec($curl);
	if($response == true){
		echo "file posted";
	} else {
		echo "ERROR : " . curl_error($curl);
	}
	/*$resArr = array();
	$resArr = json_decode($response);
	echo "<pre>"; print_r($resArr); echo "</pre>";
	$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);*/
	curl_close($curl);
	
}
else
{
    $errmsg = "Please select the file";
}
}

?>