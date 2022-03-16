<?php
    //start session
    session_start();
     
    include_once('../model/DBQuery.php');
     
    $user = new User();

    //tangina mo jaboy
     
    if(isset($_POST['login'])){
    	$username = $user->escape_string($_POST['index_username']);
    	$password = $user->escape_string($_POST['index_password']);
     
    	$auth = $user->check_login($username, $password);
     
    	if(!$auth){
    		$_SESSION['message'] = 'Invalid username or password';
        	header('location:index.php');
    	}
    	else{
    		$_SESSION['user'] = $auth;
    		header('location:home.php');
    	}
    }
    else{
    	$_SESSION['message'] = 'You need to login first';
    	header('location:index.php');
    }
    ?>