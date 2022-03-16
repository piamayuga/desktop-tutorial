<?php
    class DBQuery {
        // trying this https://www.geeksforgeeks.org/how-to-insert-form-data-into-database-using-php/

        

        // servername => localhost
        // username => root
        // password => empty
        // database name => pcoo_test
        $conn = mysqli_connect("localhost", "root", "", "staff");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        public function pds_add_employee_sheet($surname, $first_name, $middle_name, $suffix,$birth_date,$birth_place,$gender,$civil_status,
        $height,$weight,$bloodType,$gsisID,$pagibigID,$philhealthID,$sssID,$tinID,$employeeNo,$telephone_number,$cellphone_number,
        $email_add,$citizenship,$immigrant,$country,$residential_house_number,$residential_street,$residential_subdivision,$residential_barangay,
        $residential_city,$residential_province,$residential_zip_code, $permanent_house_number,$permanent_street,$permanent_subdivision,$permanent_barangay,
        $permanent_city,$permanent_province,$permanent_zip_code,$spouse_surname,$spouse_first_name,$spouse_middle_name,$spouse_suffix,$spouse_occupation,
        $spouse_business_name, $spouse_business_address,$spouse_telephone_number,$father_surname,$father_first_name,$father_middle_name,$father_suffix,
        $mother_surname,$mother_first_name,$mother_middle_name,$mother_suffix,$name_child,$child_birth_date,$elementary_school_name,$elementary_basic_education,
        $elementary_period_attendance_from,$elementary_period_attendance_to,$elementary_highest_level,$elementary_year_graduated,$elementary_scholarship,
        $secondary_school_name,$secondary_basic_education,$secondary_period_attendance_from,$secondary_period_attendance_to,$secondary_highest_level,
        $secondary_year_graduated,$secondary_scholarship,$vocational_school_name,$vocational_basic_education,$vocational_period_attendance_from,
        $vocational_period_attendance_to,$vocational_highest_level,$vocational_year_graduated,$vocational_scholarship,$college_school_name,
        $college_basic_education,$college_period_attendance_from,$college_period_attendance_to,$college_highest_level,
        $college_year_graduated,$college_scholarship,$graduate_school_name,$graduate_basic_education,$graduate_period_attendance_from,
        $graduate_period_attendance_to,$graduate_highest_level,$graduate_year_graduated,$graduate_scholarship,$career_service,$career_rating,
        $career_examination_date,$career_examination_place,$career_number,$career_validity_date,$work_inclusive_dates_from,$work_inclusive_dates_to,
        $work_position_title,$work_department,$work_monthly_salary,$work_salary,$work_status_appointment,$work_govt_service,$voluntary_organization_name,
        $voluntary_organization_address,$voluntary_inclusive_date_from,$voluntary_inclusive_date_to,$voluntary_number_hours,$voluntary_position,$training_program,
        $training_inclusive_date_from,$training_inclusive_date_to,$training_number_hours,$training_ld_type,$training_conducted, $special_skills, $recognition, 
        $membership_association, $q1a, $q1b, $q2a, $q2b, $q3, $q4, $q5a, $q5b, $q6, $q7a, $q7b, $q7c, $reference_name, $reference_address, $reference_contact_number,
        $government_issued_id, $id_license_passport_number, $government_date_issuance, $government_place_issuance, $oath) {
            // Performing insert query execution
            // here our table name is employee
            $sql = "INSERT INTO employeetbl VALUES (`$surName`, `$firstName`, `$middleName`, `$suffix`, `$birthDate`, `$birthPlace`, `$gender`, `$civilStatus`, `$height`, `$weight`, `$bloodType`, `$gsisID`, `$pagibigID`, `$philhealthID`, `$sssID`, `$tinID`, `$employeeNo`, `$telephone_number`, `$cellphone_number`, `$email_add`, `$citizenship`, `$immigrant`, `$country`, `$residential_house_number`, `$residential_street`, `$residential_subdivision`, `$residential_barangay`, `$residential_city`, `$residential_province`, `$residential_zip_code`, `$permanent_house_number`, `$permanent_street`, `$permanent_subdivision`, `$permanent_barangay`, `$permanent_city`, `$permanent_province`, `$permanent_zip_code`)";
            

            $sql = "INSERT INTO employee2tbl VALUES (`$spouse_surname`, `$spouse_first_name`, `$spouse_middle_name`, `$spouse_suffix`, `$spouse_occupation`, `$spouse_business_name`, `$spouse_business_address`, `$spouse_telephone_number`, `$father_surname`, `$father_first_name`, `$father_middle_name`, `$father_suffix`, `$mother_surname`, `$mother_first_name`, `$mother_middle_name`, `$mother_suffix`, `$name_child`, `$child_birth_date`)";

            $sql = "INSERT INTO employee3tbl VALUES (`$elementary_school_name`, `$elementary_basic_education`, `$elementary_period_attendance_from`, `$elementary_period_attendance_to`, `$elementary_highest_level`, `$elementary_year_graduated`, `$elementary_scholarship`, `$secondary_school_name`, `$secondary_basic_education`, `$secondary_period_attendance_from`, `$secondary_period_attendance_to`, `$secondary_highest_level`, `$secondary_year_graduated`, `$secondary_scholarship`, `$vocational_school_name`, `$vocational_basic_education`, `$vocational_period_attendance_from`, `$vocational_period_attendance_to`, `$vocational_highest_level`, `$vocational_year_graduated`, `$vocational_scholarship`, `$college_school_name`, `$college_basic_education`, `$college_period_attendance_from`, `$college_period_attendance_to`, `$college_highest_level`, `$college_year_graduated`, `$college_scholarship`, `$graduate_school_name`, `$graduate_basic_education`, `$graduate_period_attendance_from`, `$graduate_period_attendance_to`, `$graduate_highest_level`, `$graduate_year_graduated`, `$graduate_scholarship`)";

            $sql = "INSERT INTO employee4tbl VALUES (`$career_service`, `$career_rating`,`$career_examination_date`, `$career_examination_place`, `$career_number`, `$career_validity_date`, `$work_inclusive_dates_from`, `$work_inclusive_dates_to`, `$work_position_title`, `$work_department`, `$work_monthly_salary`, `$work_salary`, `$work_status_appointment`, `$work_govt_service`)";

            $sql = "INSERT INTO employee5tbl VALUES (`$voluntary_organization_name`, `$voluntary_organization_address`, `$voluntary_inclusive_date_from`, `$voluntary_inclusive_date_to`, `$voluntary_number_hours`, `$voluntary_position`, `$training_program`, `$training_inclusive_date_from`, `$training_inclusive_date_to`, `$training_number_hours`, `$training_ld_type`, `$training_conducted`)";

            $sql = "INSERT INTO employee6tbl VALUES (`$special_skills`, `$recognition`, `$membership_association`, `$q1a`, `$q1b`, `$q2a`, `$q2b`, `$q3`, `$q4`, `$q5a`, `$q5b`, `$q6`, `$q7a`, `$q7b`, `$q7c`)";

            $sql = "INSERT INTO employee7tbl VALUES (`$reference_name`, `$reference_address`, `$reference_contact_number`, `$government_issued_id`, `$id_license_passport_number`, `$government_date_issuance`, `$government_place_issuance`, `$oath`)";

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
        
        public function index_login($username, $password) {
            $sql = "SELECT id FROM employeeTbl WHERE username = '$username' and password = '$password'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $active = $row['active'];

            $count = mysqli_num_rows($result);
            
            // If result matched $username and $password, table row must be 1 row
                
            if($count == 1) {
                session_register("username");
                $_SESSION['login_user'] = $username;
                
                header("location: dashboard.html");
            }else {
                $error = "Your Login Name or Password is invalid";
            }
        }
            
        
    }
    

?>