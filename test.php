<?php
session_start();
include_once('WSClient.php');
include("xmlapi.php"); 
include("config.inc.php"); 

$uri = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI']; 


$text = explode("index.php", $uri);
//echo $uri;


$last = explode("/website/", $uri, 3);
// print_r($last); echo "<br>";
//$last1 = explode("/", $last[1], 2);
$parse = parse_url($site_URL);  

$parse1 = $parse['scheme']."://".$parse['host']."/";
$cf_952  = $parse1."website/".$last[1]."/";
$stripped = explode("index.php", $cf_952, 1);
// var_dump($cf_952);
// echo $stripped[0];




$username = "superadmin";
$password= "nAnNzKHH35z4lSd";
$service_url = "https://dev.rightchoice.io/"."webservice.php";
$url = $service_url."?operation=getchallenge&username=".$username."&password=".$password;


$contents = file_get_contents($url);
$clima=json_decode($contents);
//var_dump($clima);

//echo "Success:". $clima->success;

if($clima->success == 1){
    
//echo "Login success";
    
$accesskey = $clima->result->accesskey;
$token = $clima->result->token;
$accesskeymd5 = $clima->result->accesskeymd5; 

//echo "Accesskeymd5: " . $accesskeymd5 ."<br>";
//echo "Accesskey: " . $accesskey ."<br>";
//echo "Token: " . $token ."<br>";

        $sessionName = $clima->result->sessionName;
        $userId = $clima->result->userId;


            $query = urlencode("SELECT * FROM Potentials WHERE cf_952= '$stripped[0]';");
            $service_url1 = $service_url."?operation=query&sessionName=".$sessionName."&query=".$query."";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$service_url1);
            curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_ENCODING,  '');
            $curl_response = curl_exec($ch);
            curl_close($ch);
            $decoded = json_decode($curl_response);
	   // echo "<pre>"; print_r($decoded);
	   
	   //echo $text[0]; 
	   $text[0] = "https://dev-reception.rightchoice.io/reception/Free/200826165138QueenslandCleaningClub/";
	
		//echo "SELECT * FROM Accounts WHERE cf_916 = '$stripped[0]'";	
	    $query1 = urlencode("SELECT * FROM Accounts WHERE cf_916 = '$text[0]';");
            $service_url1 = $service_url."?operation=query&sessionName=".$sessionName."&query=".$query1."";
            $ch1 = curl_init();
            curl_setopt($ch1, CURLOPT_URL,$service_url1);
            curl_setopt($ch1, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
            curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch1, CURLOPT_ENCODING,  '');
            $curl_response1 = curl_exec($ch1);
            curl_close($ch1);
            $decoded1 = json_decode($curl_response1);
	   // echo "<pre>"; print_r($decoded1);
	
			
			
			if ($decoded->result[0]->cf_956 != "")
			{
			
			
				if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') 
				{
					die('error occured: ' . $decoded->response->errormessage);
				}
				else
				{
							//echo "success";
						   // var_dump($decoded);
						//echo "<pre>"; print_r($decoded);
				
						$_SESSION['cf_956'] = $decoded->result[0]->cf_956;
						$_SESSION['related_to'] = $decoded->result[0]->related_to;
						$related_to = $decoded->result[0]->related_to;
							   
						$query = urlencode("SELECT * FROM Accounts where id = '$related_to';");
							$service_url1 = $service_url."?operation=query&sessionName=".$sessionName."&query=".$query."";
						//echo $query;
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_URL,$service_url1);
						curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_ENCODING,  '');
						$curl_response = curl_exec($ch);
						curl_close($ch);
						$decoded = json_decode($curl_response);
						
						if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
							die('error occured: ' . $decoded->response->errormessage);
						}
						else
						{
							//echo "success";
						   // var_dump($decoded);
						   //echo "<pre>"; print_r($decoded);
				
						  $_SESSION['cf_918'] = $decoded->result[0]->cf_918;
						   $_SESSION['cf_922'] = $decoded->result[0]->cf_922;
						   $_SESSION['cf_924'] = $decoded->result[0]->cf_924;
						   $_SESSION['cf_926'] = $decoded->result[0]->cf_926;
						   $_SESSION['cf_928'] = $decoded->result[0]->cf_928;
						   $_SESSION['cf_930'] = $decoded->result[0]->cf_930;
						   $_SESSION['cf_932'] = $decoded->result[0]->cf_932;
						   $_SESSION['cf_934'] = $decoded->result[0]->cf_934;
						   $_SESSION['cf_936'] = $decoded->result[0]->cf_936;
						   $_SESSION['cf_938'] = $decoded->result[0]->cf_938;
						   $_SESSION['cf_940'] = $decoded->result[0]->cf_940;
						   $_SESSION['cf_942'] = $decoded->result[0]->cf_942;
						   $_SESSION['cf_1022'] = $decoded->result[0]->cf_1022;
						   $_SESSION['cf_1046'] = $decoded->result[0]->cf_1046;
						   $_SESSION['cf_1060'] = $decoded->result[0]->cf_1060;
						   $_SESSION['cf_1062'] = $decoded->result[0]->cf_1062;
						   $_SESSION['cf_1064'] = $decoded->result[0]->cf_1064;	
						   $_SESSION['accountid'] = $decoded->result[0]->id;
						   $_SESSION['accountname'] = $decoded->result[0]->accountname;


	
							
							//echo "hi";
					   
						}
				}
			}
			else if ($decoded1->result[0]->cf_916 != "") 
			{
				//echo "empty array";
				if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') 
				{
					die('error occured: ' . $decoded->response->errormessage);
				}
				else
				{
						//echo "<pre>"; print_r($decoded1);
				
						  $_SESSION['cf_956'] = $decoded1->result[0]->cf_956;
						   $_SESSION['cf_918'] = $decoded1->result[0]->cf_918;
						   $_SESSION['cf_922'] = $decoded1->result[0]->cf_922;
						   $_SESSION['cf_924'] = $decoded1->result[0]->cf_924;
						   $_SESSION['cf_926'] = $decoded1->result[0]->cf_926;
						   $_SESSION['cf_928'] = $decoded1->result[0]->cf_928;
						   $_SESSION['cf_930'] = $decoded1->result[0]->cf_930;
						   $_SESSION['cf_932'] = $decoded1->result[0]->cf_932;
						   $_SESSION['cf_934'] = $decoded1->result[0]->cf_934;
						   $_SESSION['cf_936'] = $decoded1->result[0]->cf_936;
						   $_SESSION['cf_938'] = $decoded1->result[0]->cf_938;
						   $_SESSION['cf_940'] = $decoded1->result[0]->cf_940;
						   $_SESSION['cf_942'] = $decoded1->result[0]->cf_942;
						   $_SESSION['cf_1022'] = $decoded1->result[0]->cf_1022;
						   $_SESSION['cf_1056'] = $decoded1->result[0]->cf_1056;
						   $_SESSION['cf_1022'] = $decoded1->result[0]->cf_1022;
						   $_SESSION['cf_1046'] = $decoded1->result[0]->cf_1046;
						   $_SESSION['cf_1060'] = $decoded1->result[0]->cf_1060;
						   $_SESSION['cf_1062'] = $decoded1->result[0]->cf_1062;
						   $_SESSION['cf_1064'] = $decoded1->result[0]->cf_1064;
						   $_SESSION['cf_1066'] = $decoded1->result[0]->cf_1066;
						   $_SESSION['cf_1068'] = $decoded1->result[0]->cf_1068;
						   $_SESSION['cf_1046'] = $decoded1->result[0]->cf_1046;
						   $_SESSION['cf_1070'] = $decoded1->result[0]->cf_1070;
						   $_SESSION['cf_1072'] = $decoded1->result[0]->cf_1072;
						   $_SESSION['cf_1074'] = $decoded1->result[0]->cf_1074;
						   $_SESSION['cf_1076'] = $decoded1->result[0]->cf_1076;
						   $_SESSION['cf_1078'] = $decoded1->result[0]->cf_1078;
						   $_SESSION['cf_1082'] = $decoded1->result[0]->cf_1082;
						   $_SESSION['cf_1084'] = $decoded1->result[0]->cf_1084;
						   $_SESSION['cf_1086'] = $decoded1->result[0]->cf_1086;
						   $_SESSION['cf_1088'] = $decoded1->result[0]->cf_1088;
						   $_SESSION['cf_1090'] = $decoded1->result[0]->cf_1090;
						   $_SESSION['cf_1092'] = $decoded1->result[0]->cf_1092;
						   $_SESSION['cf_1080'] = $decoded1->result[0]->cf_1080;
 						   $_SESSION['cf_1078'] = $decoded1->result[0]->cf_1078;
						   $_SESSION['cf_1094'] = $decoded1->result[0]->cf_1094;
$_SESSION['cf_1098'] = $decoded1->result[0]->cf_1098;
$_SESSION['cf_1096'] = $decoded1->result[0]->cf_1096;
$_SESSION['cf_1100'] = $decoded1->result[0]->cf_1100;
$_SESSION['cf_1102'] = $decoded1->result[0]->cf_1102;
$_SESSION['cf_1104'] = $decoded1->result[0]->cf_1104;
$_SESSION['cf_1106'] = $decoded1->result[0]->cf_1106;
$_SESSION['cf_1108'] = $decoded1->result[0]->cf_1108;
$_SESSION['cf_1110'] = $decoded1->result[0]->cf_1110;
$_SESSION['cf_1112'] = $decoded1->result[0]->cf_1112;
$_SESSION['cf_1114'] = $decoded1->result[0]->cf_1114;
$_SESSION['cf_1116'] = $decoded1->result[0]->cf_1116;
$_SESSION['cf_1122'] = $decoded1->result[0]->cf_1122;
$_SESSION['cf_1124'] = $decoded1->result[0]->cf_1124;
$_SESSION['cf_1126'] = $decoded1->result[0]->cf_1126;
$_SESSION['cf_1128'] = $decoded1->result[0]->cf_1128;
$_SESSION['cf_1130'] = $decoded1->result[0]->cf_1130;

						   $_SESSION['accountid'] = $decoded->result[0]->id;
                          $_SESSION['accountname'] = $decoded->result[0]->accountname;	


						//echo $_SESSION['cf_1022'];


				}
				
			}

    

}else {
    
    echo "error";
}

	

 
/*$servername = "localhost";
$username = "comx";
$password = "password";
$dbname="my360crm_190507150303DEMOCRM";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$date=date("Y-m-d");
$record = $_GET['record'];
$days = $_SESSION['cf_1060'];

$sql = "UPDATE vtiger_visitor_login_details SET deletedtime = '$date', status = 'deleted'  WHERE `visitorid` = '$record' and  `visitordate` < DATE_SUB(NOW(), INTERVAL $days DAY)";

if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
} else {
    //echo "Error updating record: " . $conn->error;
}


$connection = mysqli_connect($servername, $username, $password, $dbname);

$date1 = date('Y-m-d');
 
$sql1 = "SELECT * FROM vtiger_visitor_login_details where visitordate = '$date1'";
$result1 = mysqli_query($connection ,$sql1);
//var_dump($result1);
mysqli_num_rows($result1);*/

    
?>