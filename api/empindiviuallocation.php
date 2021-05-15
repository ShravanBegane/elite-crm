
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
$id= $_GET['id'] ;

 //Select all the rows in the markers table
$query = "SELECT vtiger_employee_tracker.*, vtiger_users.user_name as name\n"

    . "FROM vtiger_employee_tracker\n"

    . "LEFT JOIN vtiger_employees ON vtiger_employee_tracker.employee_id = vtiger_users.id\n"

    . "WHERE id='$id'";
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Invalid query: ' . mysqli_error());
}

$dom = new DOMDocument();

$dom->encoding = 'utf-8';

$dom->xmlVersion = '1.0';

$dom->formatOutput = true;

$xml_file_name = 'empindivisual.xml';
$root = $dom->createElement('Markers');
$ind = 0; 
$value=array();
$id_list=array();


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
     
     
        ///name
     $name = new DOMAttr('name', $row['name']);
     $marker->setAttributeNode($name);
     array_push($value,$row['name']);
     array_push($id_list,$row['id']);



    $root->appendChild($marker);
    $dom->appendChild($root);

    $ind = $ind + 1;
}
$dom->save($xml_file_name);

?>