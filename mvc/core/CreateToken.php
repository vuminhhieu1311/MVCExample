<?php
require("JWT.php");

require_once("Authentication.php");
$auth = new Authentication;
$result = $auth->authenticate($email, $password);

if (mysqli_num_rows($result) == 1) {
    // dang nhap thanh cong
    $u = mysqli_fetch_array($result);

    $token = array();
    $token["id"] = $u["id"];
    $token["email"] = $u["email"];
    $token["password"] = $u["password"];

    $jsonwebtoken = JWT::encode($token, "SECRET_KEY");
}