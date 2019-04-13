<?php 
	class Database{
		private $type_database;
		private $user;
		private $password;
		private $server;
		private $conection;
		private $database;

		public function __construct(){
			$this->type_database = 'mysql';
			$this->user = 'root';
			$this->password = '';
			$this->server = 'localhost';
			$this->conection = '';
			$this->database = 'otra';
		}

		public function connect(){
			try {
				$string = $this->type_database.':host='.$this->server.';dbname='.$this->database;
				$conection = new PDO($string, $this->user, $this->password);
				return $conection;
			} catch (PDOException $e) {
				exit("Error : ".$e->getMessage());
			}
		}

		public function desconnect(){
			$this->conection = null;
		}
	}	
