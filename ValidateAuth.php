<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
	die('Only Post Method Supported');
}
function validate_auth($vt_usr,$vt_usr_key)
{

		$serveraddress = 'http://elite.rightchoice.io/'; 
		$crm_username = $vt_usr;
		$crm_useraccesskey = $vt_usr_key;	

		$token_url = $serveraddress."/webservice.php?operation=getchallenge&username=".$crm_username;
		$token_data = json_decode(file_get_contents($token_url));



		if ($token_data->success != 1){
			return false;
		} 

		$crm_token = $token_data->result->token;

		// Attempt Login
		$service_url = $serveraddress."/webservice.php";
		$curl = curl_init($service_url);
		$curl_post_data = array(
			'operation' => 'login',
			'username' => $crm_username,
			'accessKey' => md5($crm_token.$crm_useraccesskey),
		);

		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);

		$curl_response = json_decode(curl_exec($curl));

		if ($curl_response->success != 1)
		{
			return false;
		}else{
			return true;
		} 

		$crm_session = $curl_response->result->sessionName;
}

function get_user_id($user_name) {
		global $adb;
		$query = "SELECT id from vtiger_users where user_name=? AND deleted=0";
		$result  =$adb->pquery($query, array($user_name));
		$userid = $adb->query_result($result,0,'id');
		return $userid;
	}

// ref  ------>   https://docstore.mik.ua/orelly/webprog/pcook/ch08_10.htm
    
if (@!validate_auth($_SERVER['PHP_AUTH_USER'],$_SERVER['PHP_AUTH_PW']))
{
   header('WWW-Authenticate: Basic realm=\"thetutlage\"');
   header('HTTP/1.0 401 Unauthorized');
   echo 'Please Enter Valid Username and Password';
   exit;
}
?>