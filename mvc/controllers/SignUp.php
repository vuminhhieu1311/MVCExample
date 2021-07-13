<?php
class SignUp extends Controller
{
    function __construct()
    {
        // Model
        $signup = $this->model("SignUpModel"); // tao doi tuong login
        $result = $signup->submit();
        if($result) {
            header("location: Login");
        }

        // View
        $this->view("SignUpView", []); 
    }
}
