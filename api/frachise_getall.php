<?php 
include("conn.php"); 
$query = "SELECT * FROM vtiger_franchise_detail" ;
   
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Invalid query: ' . mysqli_error());
} 
$zipcodes=array();
$accessedpermissions=array();
$ids=array();
// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)) {
    
     array_push($zipcodes,$row['zipcode']);
     array_push($accessedpermissions,$row['accessedpermission']);
  
     array_push($ids,$row['id']);



}

$query = "SELECT * FROM vtiger_groups" ;
   
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Invalid query: ' . mysqli_error());
} 
$groupnames=array();

// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)) {
    
     array_push($groupnames,$row['groupname']);
 



}

$query = "SELECT * FROM vtiger_role" ;
   
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Invalid query: ' . mysqli_error());
} 
$rolenames=array();

// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)) {
    
     array_push($rolenames,$row['rolename']);
 



}
  
?>