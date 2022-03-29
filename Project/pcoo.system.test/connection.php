<?php
    $db_host = ""; //Localhost server
    $db_user = ""; //Database username
    $db_password = ""; //Database password 
    $db_name = ""; //Database name

    try {
        $db = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_password);
        $db -> setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        
    } catch(PDOEXCEPTION $e) {
        $e -> getMessage();

    }


?>