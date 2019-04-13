<?php 
    require_once '../config/Database.php';
    class User{
        private $username;
        private $password;

        public function __construct(){
            $this->username = '';
            $this->password = '';
        }

        public function create(){
            $connection = new Database();
            $this->username = $username;
            $this->password = $password;
            $query = "INSERT INTO user (username, password, rol_user) VALUES ('$this->username','$this->password', 2)";
            $connection->connect()->prepare($query)->execute();
        }

        public function update(){
            $connection = new Database();
        }

        public function read(){
            $connection = new Database();
        }

        public function delete(){
            $connection = new Database();

        }

        public function validate($username, $password){

        }
    }
?>