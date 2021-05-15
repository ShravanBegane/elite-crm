<?php 
//require_once("../ValidateAuth.php");
include("config.inc.php"); 
//include("conn.php"); 
$conn = new mysqli($dbconfig['db_server'], $dbconfig['db_username'], $dbconfig['db_password'], $dbconfig['db_name']);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM vtiger_users" ;
   
   
   //$query = "SELECT vtiger_employee_tracker.*, vtiger_users.*\n" 
    //. "FROM vtiger_employee_tracker\n" 
    //. "LEFT JOIN vtiger_users ON vtiger_employee_tracker.employee_id = vtiger_users.id\n" 
    //. "WHERE vtiger_employee_tracker.status='active'\n"
    //. "ORDER BY vtiger_employee_tracker.id"; 
   
   
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Invalid query: ' . mysqli_error());
} 
else{
$namelist=array();
$empid_list=array();

// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)) {
    
     array_push($namelist,$row['user_name']);
     array_push($empid_list,$row['id']);

    
    
    

}
}

  
?>