<?php
//require_once("../ValidateAuth.php");
$url = 'https://internal.my360crm.com/api/listnew.php';
$data = array('email' => 'democrm@gmail.com', 'password' => 'democrm123');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);


?>