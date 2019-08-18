<?php
include 'JWT.php';
use \Firebase\JWT\JWT;

$key = "example_key";

$post = file_get_contents('php://input');

$jwt = JWT::encode($post, $key);

Print $jwt;
?>