<?php 
    class Controller {
        public function model($model) {
            require_once "./mvc/models/".$model.".php"; // import file model
            return new $model; // tra ve 1 doi tuong model
        }

        public function view($view, $data = []) {
            require_once "./mvc/views/".$view.".php"; // import file view
        }
    }
?>