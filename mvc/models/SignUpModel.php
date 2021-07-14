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
        if (isset($_POST['signup'])) {
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
            $password = md5(mysqli_real_escape_string($this->connect, $_POST['password']));
            $userId = md5($email);

            $sql = "INSERT INTO users(id, email, password) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($this->connect);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                echo "SQL Error!";
            } else {
                mysqli_stmt_bind_param($stmt, "sss", $userId, $email, $password);
                mysqli_stmt_execute($stmt);
                return true;
            }
        }
    }
}
