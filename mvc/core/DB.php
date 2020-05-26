<?php

    class DB{
        public $con;
        protected $server_name = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $dbname = "Bookonline";

        function __construct()
        {
            $this->con = mysqli_connect($this->server_name, $this->username, $this->password);
            mysqli_select_db($this->con, $this->dbname);
            mysqli_query($this->con, "SET NAMES 'utf8'");
        }
    }

?>