<?php 
    class NotFound extends Controller{
        function __construct() {
            // View
            $this->view("NotFoundView", [              
            ]);
        }
    }
