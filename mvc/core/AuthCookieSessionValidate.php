<?php 
    if(isset($_SESSION['login'])) {
        $isAuthenticated = true;
    }
    if(isset($_COOKIE['token'])) {
        require_once("CheckToken.php");
    }
