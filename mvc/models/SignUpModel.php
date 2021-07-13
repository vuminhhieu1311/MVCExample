<?php
class SignUpModel extends Database
{
    public function check_email($email)
    {
        $query = "SELECT * FROM users WHERE Email = '$email'";
        $res = mysqli_query($this->connect, $query);
        return mysqli_num_rows($res); // dua ra so dong cua ket qua
    }

    public function submit()
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
