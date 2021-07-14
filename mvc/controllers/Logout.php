<?php
class Logout extends Controller
{
    function __construct()
    {
        session_destroy();

        if (isset($_COOKIE['token'])) {
            setcookie("token", "", time()-3600);
        }

        header("location: Login");
    }
}