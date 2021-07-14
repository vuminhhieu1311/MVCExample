<?php
class Login extends Controller
{
    function __construct()
    {
        // Model
        $login = $this->model("LoginModel"); // tao doi tuong login

        $token = $login->check_login();
        if ($token != "") {
            $_SESSION['login'] = $token;

            // Set cookie (remember me)
            if (isset($_POST['remember'])) {
                setcookie('token', $token, time() + (86400 * 30)); // 1 day
            }

            header("location: Home");
        }

        // View
        $this->view("LoginView", []);
    }
}
