<?php
class LoginModel extends Database
{
    public function check_login()
    {
        if (isset($_POST['login'])) {
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
            $password = md5(mysqli_real_escape_string($this->connect, $_POST['password']));
            
            $jsonwebtoken = "";
            require_once("mvc/core/CreateToken.php");
            return $jsonwebtoken;
        }
    }
}
