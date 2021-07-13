<?php
class Login extends Controller
{
    function __construct()
    {
        // Model
        $login = $this->model("LoginModel"); // tao doi tuong login
        $result = $login->check_login();
        if ($result) {
            $row = mysqli_fetch_row($result);
            if ($row && count($row)) {
                $_SESSION['login'] = $row;
                header("location: Home");
            }
        }

        // View
        $this->view("LoginView", []);
    }
}
