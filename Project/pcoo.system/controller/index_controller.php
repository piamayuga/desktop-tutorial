<?php
    // Log in, log-out https://www.tutorialspoint.com/php/php_mysql_login.htm

    include("DBConnection.php");

    session_start();

    $read = new Read();
    $dbConnection = new DBConnection();
    $dbQuery = new DBQuery();

    private $username = $_REQUEST['index_username'];
    private $password = $_REQUEST['index_password'];

    $dbConnection->check_database_connection($check_db_connection);
    if ($check_db_connection == true) {
        echo 'connected';
        if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']); 
            
            $dbQuery-> index_login($username, $password)
                
            
        }
    }
    

?>