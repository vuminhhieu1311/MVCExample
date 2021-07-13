<?php 
    class Home extends Controller{
        function __construct()
        {
            var_dump($_SESSION);
            // Model
            $student = $this->model("StudentModel"); // tao doi tuong student

            // View
            $this->view("MainLayout", [
                "Page" => "Student",
                "Students" => $student->get_all_students(),
                "Color" => "red"
            ]);
        }
        function abc() {
            echo "Home - abc";
        }
    }
