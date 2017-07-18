<<?php
header("Content-Type:application/json");

//1. Process Cliet request.
if (!empty($_GET['name'])) {
  $name=$_GET['name'];
  $price=$_GET['price']

  deliver_response(200, "Found", $price);

}else {
  deliver_response(400, "Invalid Request", NULL);
}

function deliver_response($status, $status_message, $data ){
  header("HTTP/1.1 $status, status_message");

  $response['status']=$status;
  $response['status_message']=$status_message;
  $response['data']=$data;

  $json_response=json_encode($response);
  echo $json_response;
}

 ?>
