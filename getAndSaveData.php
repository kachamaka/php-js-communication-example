<?php
include 'Response.php';
$file = "data.json";
$body = file_get_contents('php://input');
$data = array();
parse_str($body, $data);
if(sizeof($data)>0 && in_array("",$data) == false){
    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($file,$json);
    $res = new Response(200,true);
}else{
    $res = new Response(404, false);
}
echo json_encode($res);
die();