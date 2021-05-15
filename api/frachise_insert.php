<?php
require_once("../ValidateAuth.php");
session_start();
//header("Content-Type:application/json");
include("conn.php");


     
  if(isset($_POST['accessedpermission']) && !empty($_POST['accessedpermission'])){
    $accessedpermission= $_POST['accessedpermission'];  
 
 }
  if(isset($_POST['zipcode']) && !empty($_POST['zipcode'])){
    $zipcode = $_POST['zipcode'];  
 }
$dup=array();
$notdup=array();
$selectpostcod=array();
$selectpostcodeary= array();
$dupsrting = "";
 $selectQry = "select * from vtiger_franchise_detail"; 
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
$zipcodeary = explode(" ",$zipcode);
foreach($zipcodeary as $zipcod)
{
    if (in_array($zipcod, $selectpostcodeary)) {
        $dup[] = " ".$zipcod;
        $dupsrting.=" ".$zipcod;
    }
}
//print_r($dup);
if(!empty($dup))
{
    $_SESSION['addMsg'] = "You have Already Assigned $dupsrting this Postcode to Different group";
    die('Duplicate record exists-red-');
}else{
            $query = "INSERT INTO vtiger_franchise_detail (zipcode,accessedpermission) VALUES ('$zipcode','$accessedpermission')";

$result = mysqli_query($conn, $query);


if (!$result) {
    die('Invalid query: ' . mysqli_error()."-red-");
   
}
else{
    $_SESSION['addMsg'] = "Data Added Successfully";
 die( 'Data insert sucessfully-green-');

}
}
?>

        
        
   


