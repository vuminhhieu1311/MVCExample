<?php
class Authentication extends Database
{
    function authenticate($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = ? AND password = ?";

        $stmt = mysqli_stmt_init($this->connect);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL Error!";
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            mysqli_stmt_execute($stmt);
            return mysqli_stmt_get_result($stmt);
        }
    }
}
