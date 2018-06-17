<?php
include 'Response.php';
$file = "data.json";
$body = file_get_contents('php://input');
$data = array();
parse_str($body, $data);
if(sizeof($data)>0){
    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($file,$json);
    $res = new Response("all good, data saved",true);
    echo json_encode($res);
    die();
}else{
    $res = new Response("no data", false);
    echo json_encode($res);
    die();
}