<?php
    session_start();
    $read = new Read();
    $dbConnection = new DBConnection();
    $dbQuery = new DBQuery();
    class index_controller extends DBConnection{
        

    

        private $username = $_REQUEST['index_username'];
        private $password = $_REQUEST['index_password'];

        public function check_database_connection($check_db_connection){
            if ($dbConnection == true) {
                echo 'connected';
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                // username and password sent from form 
                
                    $username = mysqli_real_escape_string($connection, $_POST['username']);
                    $password = mysqli_real_escape_string($connection, $_POST['password']); 
                    
                    $dbQuery-> check_login($username, $password)
                        
                    
                }
            }
        }
    
    }
    // Log in, log-out https://www.tutorialspoint.com/php/php_mysql_login.htm


    
    

 ?>