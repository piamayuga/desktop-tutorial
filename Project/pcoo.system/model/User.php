<?php
    include_once('DBConnection.php');
     
    class User extends DBConnection{
     
        public function __construct(){
     
            parent::__construct();
        }
     
        public function check_login($username, $password) {
/*
            $sql3 = "SELECT * FROM admintbl WHERE username='$username' AND password='$password'";
            $sql2 = "SELECT * FROM hrtbl WHERE username='$username' OR employeeID='$username' AND password='$password'";
            $sql = "SELECT * FROM employeetbl WHERE username = '$username' OR employeeID='$username' AND password='$password'";
            
            

            $query = $this->connection->query($sql);

            if($query->num_rows > 0){
                $row = $query->fetch_array();
                return $row['username'];

            }
        }
        
    */

            
            $sql1 = "SELECT * FROM admintbl WHERE username = '$username' AND password = '$password'";
            $sql2 = "SELECT * FROM hrtbl WHERE username = '$username' OR employeeID = '$username' AND password = '$password'";
            $sql3 = "SELECT * FROM employeetbl WHERE username = '$username' OR employeeID = '$username' AND password = '$password'";
            
            $query1 = $this->connection->query($sql1);
            $query2 = $this->connection->query($sql2);
            $query3 = $this->connection->query($sql3);
     
            if($query1->num_rows > 0){
                $row = $query1->fetch_array();
                return $row['username'];

            } elseif ($query2->num_rows > 0){
                $row = $query2->fetch_array();
                return $row['username'];

            } elseif ($query3->num_rows > 0){
                $row = $query2->fetch_array();
                return $row['username'];

            } else {
                return false;
            }
        }
        
     
        public function details($sql){
     
            $query = $this->connection->query($sql);
     
            //$row = $query->fetch_array();
     
            //return $row;       
        }
     
        public function escape_string($value){
     
            return $this->connection->real_escape_string($value);
        }
    }