<?php
    //start session
    session_start();
     
    include_once('../model/User.php');
     
    $user = new User();
     
    if(isset($_POST['login'])){
        $username = $user->escape_string($_POST['index_username']);
        $password = $user->escape_string($_POST['index_password']);
     
        $auth = $user->check_login($username, $password);
     
        if(!$auth){
            $_SESSION['message'] = 'Invalid username or password';
            header('location:../view/index.php');
        }
        else{
            $_SESSION['user'] = $auth;
            header('location:../view/dashboard.php');
        }
    }
    else{
        $_SESSION['message'] = 'You need to login first';
        
    
    // Log in, log-out https://www.tutorialspoint.com/php/php_mysql_login.htm
    }

 ?>