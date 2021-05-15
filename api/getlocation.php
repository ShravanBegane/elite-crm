
<?php
//require_once("../ValidateAuth.php");
//header("Content-Type:application/json");
include("conn.php");

function parseToXML($htmlStr) 
{ 
$xmlStr=str_replace('<','&lt;',$htmlStr); 
$xmlStr=str_replace('>','&gt;',$xmlStr); 
$xmlStr=str_replace('"','&quot;',$xmlStr); 
$xmlStr=str_replace("'",'&apos;',$xmlStr); 
$xmlStr=str_replace("&",'&amp;',$xmlStr); 
return $xmlStr; 
} 
/*// Opens a connection to a mySQL server
$connection=mysql_connect (localhost,$username, $password);
if (!$connection) {
  die('Not connected : ' . mysql_error());
}
// Set the active mySQL database
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}*/








// Select all the rows in the markers table
//$query = "SELECT * FROM vtiger_employee_tracker";
//$results = mysqli_query($conn,$query);
$query = "SELECT vtiger_employee_tracker.*, vtiger_employees.employees_tks_employeename as name\n"

    . "FROM vtiger_employee_tracker\n"

    . "LEFT JOIN vtiger_employees ON vtiger_employee_tracker.employee_id = vtiger_employees.employeesid\n"
    . "WHERE vtiger_employee_tracker.status='active'\n"
    . "ORDER BY vtiger_employee_tracker.id";
// Select all the rows in the markers table
//$query = "SELECT * FROM vtiger_employee_tracker";
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Invalid query: ' . mysqli_error());
}

$dom = new DOMDocument();

$dom->encoding = 'utf-8';

$dom->xmlVersion = '1.0';

$dom->formatOutput = true;

$xml_file_name = 'locations.xml';
$root = $dom->createElement('Markers');
$ind = 0; 
$value=array();
$id_list=array();
$colors=array();


// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)) {
    $marker = $dom->createElement('marker');
    ///id
    $id = new DOMAttr('id', $row['id']);
    $marker->setAttributeNode($id);

    ///client_id
    $client_id = new DOMAttr('client_id', $row['client_id']);
    $marker->setAttributeNode($client_id);

    //employee_id
    $employee_id = new DOMAttr('employee_id', $row['employee_id']);
    $marker->setAttributeNode($employee_id);

    ///date
    $date = new DOMAttr('date', $row['date']);
    $marker->setAttributeNode($date);

    ///time
    $time = new DOMAttr('time', $row['time']);
    $marker->setAttributeNode($time);

     ///lat
     $lat = new DOMAttr('lat', $row['lat']);
     $marker->setAttributeNode($lat);
     
        ///lng
     $lng = new DOMAttr('lng', $row['lng']);
     $marker->setAttributeNode($lng);
     
      ///color
     $color = new DOMAttr('color', $row['colors']);
     $marker->setAttributeNode($color);
     
     
        ///name
     $name = new DOMAttr('name', $row['name']);
     $marker->setAttributeNode($name);
     array_push($value,$row['name']);
     array_push($id_list,$row['id']);
      array_push($colors,$row['colors']);



    $root->appendChild($marker);
    $dom->appendChild($root);

    $ind = $ind + 1;
}
$dom->save($xml_file_name);

?>