<?php
class App
{
    protected $controller = "NotFound";
    protected $action = "";
    protected $params = [];

    function __construct()
    {
        $arr = $this->url_process(); // Xu ly URL cua nguoi dung nhap vao

        $isAuthenticated = false;
        require_once("AuthCookieSessionValidate.php");

        if(isset($arr[0]) && $arr[0] == "SignUp") {
            $this->controller = $arr[0];
            require_once("./mvc/controllers/" . $this->controller . ".php");
            $this->controller = new $this->controller;
        }

        // Neu chua login
        else if (!$isAuthenticated && $arr[0] != "FormValidation") { 
            $this->controller = "Login";
            require_once("./mvc/controllers/" . $this->controller . ".php");
            $this->controller = new $this->controller;
        }

        else {
            // Xu ly Controller
            if (isset($arr[0]) and file_exists("./mvc/controllers/" . $arr[0] . ".php")) {
                $this->controller = $arr[0];
                unset($arr[0]); // xoa phan tu thu 0 cua mang $arr
            } 
            require_once("./mvc/controllers/" . $this->controller . ".php");
            $this->controller = new $this->controller;

            // Xu ly action
            if (isset($arr[1]) && method_exists($this->controller, $arr[1])) {
                // Kiem tra ham $arr[1] co ton tai trong lop $this->controller khong
                $this->action = $arr[1]; // xoa phan tu thu 1 cua mang $arr
                unset($arr[1]);

                // Xu ly params
                $this->params = $arr ? array_values($arr) : [];

                // Goi ham action cua lop controller, voi tham so param
                call_user_func_array([$this->controller, $this->action], $this->params); 
            }
        }
    }

    // Xu ly URL cua nguoi dung nhap vao, tach cho vao 3 controller, action, param
    function url_process()
    {
        if (isset($_GET['url'])) {
            $url =  filter_var(trim($_GET['url'], "/")); // Loai bo cac ki tu dac biet
            return explode("/", $url);
        }
    }
}
