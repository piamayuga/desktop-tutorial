<?php
    class Query {
        // trying this https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "staff");
            
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }



        public function pds_add_employee_sheet {
            // Performing insert query execution
            // here our table name is college
            $sql = "INSERT INTO college  VALUES ('$surname', 
            '$first_name','$last_name','$suffix_name')";
            
            if(mysqli_query($conn, $sql)){
                echo "<h3>data stored in a database successfully." 
                    . " Please browse your localhost php my admin" 
                    . " to view the updated data</h3>"; 

                echo nl2br("\n$first_name\n $last_name\n "
                    . "$gender\n $address\n $email");
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }

        }
        
            
        // Close connection
        mysqli_close($conn);
    }
    

?>