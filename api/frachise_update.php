<?php
require_once("../ValidateAuth.php");
session_start();
//header("Content-Type:application/json");
include("conn.php");

if(isset($_POST['ids']) && !empty($_POST['ids'])){
    $id = $_POST['ids'];
 }
 if(isset($_POST['zipcodes']) && !empty($_POST['zipcodes'])){
    $zipcodes = $_POST['zipcodes'];
 }
  if(isset($_POST['accessedpermissions']) && !empty($_POST['accessedpermissions'])){
    $accessedpermissions = $_POST['accessedpermissions'];
 }
$dup=array();
$notdup=array();
$selectpostcod=array();
$selectpostcodeary= array();
$selectpostcodearyById= array();
$newpostcodetocheck= array();
$dupsrting = "";
$zipcodesNew = "";


$selectQryById = "select * from vtiger_franchise_detail WHERE id = '$id'";  // where accessedpermission='$accessedpermission'
$selectresultById = mysqli_query($conn, $selectQryById);
while($resById = $selectresultById->fetch_assoc())
{
    $selectpostcodesById = $resById['zipcode'];
    $selectpostcodearyforloopById = explode(" ",$selectpostcodesById);
   foreach($selectpostcodearyforloopById as $selectpostcodearyById1)
    {
        array_push($selectpostcodearyById,$selectpostcodearyById1);
    }
    
}




$selectQry = "select * from vtiger_franchise_detail";  // where accessedpermission='$accessedpermission'
$selectresult = mysqli_query($conn, $selectQry);
while($res = $selectresult->fetch_assoc())
{
    $selectpostcodes = $res['zipcode'];
    $selectpostcodearyforloop = explode(" ",$selectpostcodes);
   foreach($selectpostcodearyforloop as $selectpostcodeary1)
    {
        array_push($selectpostcodeary,$selectpostcodeary1);
    }
    
}
//$selectpostcodearyById
$zipcodeary = explode(" ",$zipcodes);
$zipcodeary = array_unique($zipcodeary);
$newpostcodetocheck = array_diff($zipcodeary,$selectpostcodearyById);
foreach($zipcodeary as $zipcod1)
{
    $zipcodesNew.=" ".$zipcod1;
}
foreach($newpostcodetocheck as $zipcod)
{
    if (in_array($zipcod, $selectpostcodeary)) {
        $dup[] = " ".$zipcod;
        $dupsrting.=" ".$zipcod;
    }
    
}

if(!empty($dup))
{
    $_SESSION['addMsg'] = "You have Already Assigned $dupsrting this Postcode to Different group";
    die('Duplicate record exists-red-');
}else{
    $query = "UPDATE vtiger_franchise_detail SET zipcode='$zipcodesNew', accessedpermission='$accessedpermissions' WHERE id = '$id'";
    $result = mysqli_query($conn, $query); 
 
    if (!$result) {
        die('Invalid query: ' . mysqli_error().'-red-');
    }else{
        $_SESSION['addMsg'] = "Data Updated Successfully";
        die(  'Data updated successfully -green-');
    }
}
?>