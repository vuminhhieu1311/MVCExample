<?php 
    class API_Student extends Controller{
        function get_student_list() {
            // Model
            $student = $this->model("StudentModel"); // tao doi tuong student

            $res = $student->get_all_students();
            $array = [];
            while($row = mysqli_fetch_object($res)) {
                $array[] = $row;
            }
            mysqli_free_result($res);
            echo json_encode($array);
        }
    }
