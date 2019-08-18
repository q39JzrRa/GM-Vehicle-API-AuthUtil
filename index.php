<?php
include 'JWT.php';
use \Firebase\JWT\JWT;

$brand = $_GET['brand'];

$config = json_decode($_ENV['config'],true);

$brandConfig = $config[$brand];

$payload = json_decode(file_get_contents('php://input'),true);



$client_id = $brandConfig['client_id'];
$client_secret = $brandConfig['client_secret'];

$payload['client_id'] = $client_id;

$jwt = JWT::encode($payload, $client_secret);

Print $jwt;
?>
