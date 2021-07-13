<?php
class LoginModel extends Database
{
    public function check_login()
    {
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            // Khi nhan nut remember me
            if (isset($_POST['remember'])) {
                setcookie('email', $email);
                setcookie('password', $_POST['password']);
            }

            $sql = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'";
            return mysqli_query($this->connect, $sql);
        }
    }
}
