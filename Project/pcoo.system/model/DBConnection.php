<?php 
    class DBConnection {

        
        // servername => localhost
        // username => test
        // password => admin
        // database name => pcoo_test

        private $host = 'localhost';
        private $username = 'root';
        private $password = '';
        private $database = 'pcoo_test';

        protected $connection;
 
        public function __construct(){
     
            if (!isset($this->connection)) {
     
                $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
                
                if (!$this->connection) {
                    echo 'Cannot connect to database server';
                    exit;
                } else {
                    return true;
                }
            }    
     
            return $this->connection;
        }



    }

?>