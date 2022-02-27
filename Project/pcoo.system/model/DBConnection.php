<?php 
    class DBConnection {

        
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "staff");
            


        public function boolean check_database_connection($check_db_connection) {
            // Check connection
            if($conn === false){
                die("ERROR: Could not connect. " 
                    . mysqli_connect_error());
                return false;
            } else {
                return true;
            }

        }

        public function close_database_connection() {
            // Close connection
            mysqli_close($conn);
        }



    }

?>