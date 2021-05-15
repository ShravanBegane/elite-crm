<?php
//header("Content-Type:application/json");
require_once("../ValidateAuth.php");

include("conn.php");





if(isset($_POST['names']) && !empty($_POST['names'])){
    $names = $_POST['names'];
 
 }
 else {
     die("Please enter your name");
 }
 
 if(isset($_POST['email']) && !empty($_POST['email'])){
    $email = $_POST['email'];  
 }
 
 else {
     die("Please enter your email");
 }
 
  if(isset($_POST['postcode']) && !empty($_POST['postcode'])){
    
    $group_role = $_POST['postcode'];  
 }
 else if( isset($_POST['suburb'])&& !empty($_POST['suburb'])){
    
    $group_role = $_POST['suburb'];  
 }
 
 else {
     $group_or_role="default";
 }
 
 
  if(isset($_POST['number']) && !empty($_POST['number'])){
    $number = $_POST['number'];  
 }
 
 else{
      $number =0;
 }

  if(isset($_POST['postcode']) && !empty($_POST['postcode'])){
    $postcode = $_POST['postcode'];  
 }
else{
      $postcode =null;
 }
 if(isset($_POST['suburb']) && !empty($_POST['suburb'])){
    $suburb = $_POST['suburb'];  
 }
 
 else{
      $suburb =null;
 }
 
 
 
 if(isset($_POST['comment']) && !empty($_POST['comment'])){
    $comment = $_POST['comment'];  
 }
else{
      $comment =null;
 }
$query = "SELECT accessedpermission FROM vtiger_franchise_detail WHERE zipcode LIKE '%".$group_role."%'" ;
   
 $result = mysqli_query($conn, $query);
if (!$result) {
    die('Invalid query: ' . mysqli_error());
   
}
 if (mysqli_num_rows($result) > 0) {
$row = @mysqli_fetch_assoc($result);
 $group_or_role= $row['accessedpermission'];
        $query = "INSERT INTO vtiger_cleaning_form (name,email,number,postcode,suburb,group_or_role,comment) VALUES ('$names','$email','$number','$postcode','$suburb','$group_or_role','$comment')";

$result = mysqli_query($conn, $query);


if (!$result) {
    die('Invalid query: ' . mysqli_error());
   
}
else{
 die( 'Data insert sucessfully');

}
     
 }
else{
     die( 'Your Post code Or Suburb is invalid ');
}

/*if (!$result) {
    die('Invalid query: ' . mysqli_error());
} 


// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)) {
    
     array_push($zipcodes,$row['zipcode']);
     array_push($accessedpermissions,$row['accessedpermission']);
  
     array_push($ids,$row['id']);



}



*/


     
?>
