<?php
require_once '../ValidateAuth.php';
error_reporting(1);
header('Content-type: application/json');

if(!isset($_POST['companyid'])){
	echo json_encode(array("status"=>"error","result"=>"please enter your Company Id"));
	exit();	
}
if($_POST['companyid'] == '993992')
{
    $id = $_POST['companyid'];
    $company_data = array();//getCompanyDetailsById($id);
    exit(json_encode(array("status"=>"success","result"=>$company_data)));   
}else{
	exit(json_encode(array("status"=>"error","result"=>"No Company Id Found")));
}

function getCompanyDetailsById($id){
	include "conn.php" ; 	
	$query = "SELECT * from vtiger_account NATURAL JOIN vtiger_accountscf where cf_1118='$id'";
	$result = mysqli_query($conn,$query);
	$user = mysqli_fetch_assoc($result);
	return $user;
}
?>