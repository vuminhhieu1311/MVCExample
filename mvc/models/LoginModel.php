<?php
class LoginModel extends Database
{
    public function check_login()
    {
        if (isset($_POST['login'])) {
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
            $password = md5(mysqli_real_escape_string($this->connect, $_POST['password']));
            
            // Set cookie (remember me)
            if (isset($_POST['remember'])) {
                setcookie('email', $email);
                setcookie('password', $_POST['password']);
            }

            $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
            $stmt = mysqli_stmt_init($this->connect);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                echo "SQL Error!";
            } else {
                mysqli_stmt_bind_param($stmt, "ss", $email, $password);
                mysqli_stmt_execute($stmt);
                return mysqli_stmt_get_result($stmt);
            }
        }
    }
}
