<?php
class SignUp extends Controller
{
    function __construct()
    {
        $signup = $this->model("SignUpModel"); // tao doi tuong login
        // View
        $this->view("SignUpView", []);
    }
}
