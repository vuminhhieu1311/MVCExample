<?php
class Login extends Controller
{
    function __construct()
    {
        // Model
        $login = $this->model("LoginModel"); // tao doi tuong login
        $login_error = "";
        $token = $login->check_login();
        if ($token != "") {
            $_SESSION['login'] = $token;

            // Set cookie (remember me)
            if (isset($_POST['remember'])) {
                setcookie('token', $token, time() + (86400 * 30)); // 1 day
            }
            header("location: /MVCExample/CompanyList");
        } else {
            $login_error = "Your email or password is incorrect. Please try again.";
        }

        // View
        $this->view("LoginView", ["error" => $login_error]);
    }
}
