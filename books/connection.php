<?php  
    class Connection {
        private $dbHost = "localhost";
        private $dbName = "booksdb";
        private $dbUser = "root";
        private $dbPassword = '';
        private $dbConn;

        public function __construct () {
            try{  
                $this->dbConn= new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName."",$this->dbUser,$this->dbPassword);  
            } catch(Exception $e){  
            Echo "Connection failed" . $e->getMessage();  
            }  
        }
        public function connection () {
            return $this->dbConn;
        } 
    }
?>