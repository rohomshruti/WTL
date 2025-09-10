<?php

$data = file_get_contents("php://input");


$data = json_decode($data, true);


$firstName = $data['firstName'];
$lastName = $data['lastName'];


$response = [
    "firstName" => $firstName,
    "lastName" => $lastName,
    "message" => "Data received"
];


header('Content-Type: application/json');


echo json_encode($response);
?>
