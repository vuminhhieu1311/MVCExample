<?php 
    class StudentModel extends Database {
        public function get_all_students() {
            $query = "SELECT * FROM users";
            return mysqli_query($this->connect, $query);
        }
    }
?>