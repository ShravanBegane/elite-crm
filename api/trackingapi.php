<?php
//require_once("../ValidateAuth.php");
//header("Content-Type:application/json");
include("conn.php");

$statusMsg = '';

if (empty($_POST['client_id'])) {
    response("false", "client_id Not Found");
} else if (empty($_POST['employee_id'])) {
    response("false", "employee_id Not Found");
} else if (empty($_POST['lat'])) {
    response("false", "latitude  Not Found");
} else if (empty($_POST['lng'])) {
    response("false", "longitude Not Found");
} else {
    $date = date("Y-m-d");
    $time = date("h:i:sa");

    $client_id = $_POst['client_id'];
    function random_color_part()
    {
        return str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
    }

    function random_color()
    {
        return random_color_part() . random_color_part() . random_color_part();
    }
    $colors = '#' . random_color();
    $employee_id = $_POST['employee_id'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $sql = "SELECT * FROM vtiger_employee_tracker WHERE employee_id='$employee_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $query = "UPDATE vtiger_employee_tracker SET date='$date',time='$time',lat='$lat',lng='$lng' WHERE employee_id='$employee_id'";
    } else {
        $query = "INSERT INTO vtiger_employee_tracker (client_id,employee_id,date,time,lat,lng,colors)
                           VALUES ('$client_id','$employee_id','$date','$time','$lat','$lng','$colors')";
    }
    $json = array();


    if (mysqli_query($conn, $query)) {

        $json1 = array();

        //echo json_encode($data);
        $json1["status"] = "success";

        echo json_encode($json1);
    } else {

        $data[] = $json;
        //echo json_encode($data);
        $json1["status"] = "error";

        echo json_encode($json1);
    }
}





 
