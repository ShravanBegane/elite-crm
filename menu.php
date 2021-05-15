<?php
session_start();
include("config.inc.php"); 


$conn = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'] , $dbconfig['db_name']);

if ($conn->connect_error) 
{
	die("Connection failed: " . $conn->connect_error);
} 
$RightAccess = $_SESSION['cf_1066'];
$RightAccessPlan = $_SESSION['cf_1078'];
$RightCapture = $_SESSION['cf_1046'];
$RightCapturePlan = $_SESSION['cf_1080'];
$RightClean = $_SESSION['cf_1092'];
$RightCleanPlan = $_SESSION['cf_1094'];
$RightFace = $_SESSION['cf_1076'];
$RightFacePlan = $_SESSION['cf_1082'];
$RightLoyalty = $_SESSION['cf_1074'];
$RightLoyaltyPlan = $_SESSION['cf_1084'];
$RightReception = $_SESSION['cf_1070'];
$RightReceptionPlan = $_SESSION['cf_1064'];
$RightRegister = $_SESSION['cf_1072'];
$RightRegisterPlan = $_SESSION['cf_1086'];
$RightShift = $_SESSION['cf_1068'];
$RightShiftPlan = $_SESSION['cf_1068'];
$RightTrack = $_SESSION['cf_1090'];
$RightTrackPlan = $_SESSION['cf_1090'];
$RightMarket = $_SESSION['cf_1088'];
$RightMarketPlan = $_SESSION['cf_1088'];
$RightSales = $_SESSION['cf_1122'];
$RightInventory = $_SESSION['cf_1124'];
$RightSupport = $_SESSION['cf_1126'];
$RightProjects = $_SESSION['cf_1128'];
$RightTools = $_SESSION['cf_1130'];

$sql = "UPDATE `vtiger_app2tab` SET `visible`= '$RightCapture' where `appname` = 'MARKETING'";
if (!mysqli_query($conn, $sql)) {
    echo "Errormessage: ". mysqli_error($conn);
}

$sql = "UPDATE `vtiger_app2tab` SET `visible`= '$RightSales' where `appname` = 'SALES'";
if (!mysqli_query($conn, $sql)) {
    echo "Errormessage: ". mysqli_error($conn);
}

$sql = "UPDATE `vtiger_app2tab` SET `visible`= '$RightInventory' where `appname` = 'INVENTORY'";
if (!mysqli_query($conn, $sql)) {
    echo "Errormessage: ". mysqli_error($conn);
}

$sql = "UPDATE `vtiger_app2tab` SET `visible`= '$RightSupport' where `appname` = 'SUPPORT'";
if (!mysqli_query($conn, $sql)) {
    echo "Errormessage: ". mysqli_error($conn);
}

$sql = "UPDATE `vtiger_app2tab` SET `visible`= '$RightProjects' where `appname` = 'PROJECT'";
if (!mysqli_query($conn, $sql)) {
    echo "Errormessage: ". mysqli_error($conn);
}

$sql = "UPDATE `vtiger_app2tab` SET `visible`= '$RightTools' where `appname` = 'TOOLS'";
if (!mysqli_query($conn, $sql)) {
    echo "Errormessage: ". mysqli_error($conn);
}

// print_r($result); die;
//print_r($_SESSION['feature_name']);
//print_r($_SESSION['submenu_name']);  

?>		