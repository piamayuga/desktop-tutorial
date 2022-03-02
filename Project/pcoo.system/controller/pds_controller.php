<?php
    // https://code.tutsplus.com/tutorials/basics-of-object-oriented-programming-in-php--cms-31910 trying pa lang to di ko magets yung sa pag query pero once na ma query ko maayos mas maayos na matitignan yung code

    $read = new Read();
    $dbConnection = new DBConnection();
    $dbQuery = new DBQuery();

    private boolean $check_db_connection;

    // Taking all 5 values from the form data(input)
    private $surname = $_REQUEST['pds_surname'];
    private $first_name =  $_REQUEST['pds_first_name'];
    private $middle_name = $_REQUEST['pds_last_name'];
    private $suffix_name =  $_REQUEST['pds_suffix_name'];

    
    $read-> pds_construct($surname, $first_name, $middle_name, $suffix_name);
    
    $read-> setSurname($surname);
    $read-> setFirstName($first_name);
    $read-> setMiddleName($middle_name);
    $read-> setSuffixName($suffix_name);

    
    $dbConnection->check_database_connection($check_db_connection);

    if ($check_db_connection == true) {
        echo 'connected';

        $surname = $read-> getSurname();
        $first_name = $read-> getFirstName();
        $middle_name = $read-> getMiddleName();
        $suffix_name = $read-> getSuffixName();

        $dbQuery-> pds_add_employee_sheet($surname, $first_name, $middle_name, $suffix_name);
 
    } 

    
?>