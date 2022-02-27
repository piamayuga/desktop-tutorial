<?php
    class DBQuery {
        // trying this https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/

        
        public function pds_add_employee_sheet($surname, $first_name, $middle_name, $suffix_name) {
            // Performing insert query execution
            // here our table name is employee
            $sql = "INSERT INTO employee VALUES ('$surname', 
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
        
            
        
    }
    

?>