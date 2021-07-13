<?php 
    class Database {
        public $connect;
        protected $serverName = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $dbName = "personal_management";

        function __construct()
        {
            // Connect database
            $this->connect = mysqli_connect($this->serverName, $this->username, $this->password);
            mysqli_select_db($this->connect, $this->dbName);
            mysqli_query($this->connect, "SET NAMES 'utf8'");
        }
        
        // Close connection
        function close_database() {
            $this->connect->close();
        }
    }
?>