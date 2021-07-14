<?php
$token = $_COOKIE['token'];
require("JWT.php");

$json = JWT::decode($token, "SECRET_KEY", true);

$email = $json->email;
$password = $json->password;

require_once("Authentication.php");
$auth = new Authentication;
$result = $auth->authenticate($email, $password);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['login'] = $token;
    $isAuthenticated =true;
}

var_dump($isAuthenticated);
