<?php
    // https://code.tutsplus.com/tutorials/basics-of-object-oriented-programming-in-php--cms-31910 trying pa lang to di ko magets yung sa pag query pero once na ma query ko maayos mas maayos na matitignan yung code

    $read = new Read();
    $dbConnection = new DBConnection();
    $dbQuery = new DBQuery();

    private boolean $check_db_connection;

    // Taking all input from the form data(input)
    private $surname = $_REQUEST['pds_surname'];
    private $first_name =  $_REQUEST['pds_first_name'];
    private $middle_name = $_REQUEST['pds_last_name'];
    private $suffix_name =  $_REQUEST['pds_suffix_name'];
    
    private $birth_date =  $_REQUEST['pds_birth_date']; //this is date
    private $birth_place=  $_REQUEST['pds_birth_place'];
    private $sex =  $_REQUEST['pds_sex']; // MALE or FEMALE
    private $civil_status =  $_REQUEST['pds_civil_status']; // Can be SINGLE or MARRIED
    private $height =  $_REQUEST['pds_height']; // float or double
    private $weight =  $_REQUEST['pds_weight']; // float or double
    private $blood_type =  $_REQUEST['pds_blood_type']; // short
    
    private $gsis_id =  $_REQUEST['pds_gsis_id']; // don't know yet how long this would be
    private $pagibig_id =  $_REQUEST['pds_pagibig_id']; // don't know yet how long this would be
    private $philhealth_id =  $_REQUEST['pds_philhealth_id']; // don't know yet how long this would be
    private $sss_id =  $_REQUEST['pds_sss_id']; // don't know yet how long this would be
    private $tin_id =  $_REQUEST['pds_tin_id']; // don't know yet how long this would be
    private $employee_number =  $_REQUEST['pds_employee_number']; // don't know yet how long this would be
    
    private $telephone_number =  $_REQUEST['pds_telephone_number']; // maximum of 9 numbers
    private $cellphone_number =  $_REQUEST['pds_cellphone_number']; // maximum of 11 numbers
    private $email_add =  $_REQUEST['pds_email_add']; // this should be email
    private $citizenship =  $_REQUEST['pds_citizenship']; // could be FILIPINO or DUAL CITIZENSHIP
    private $immigrant =  $_REQUEST['pds_immigrant']; // could be BY BIRTH or BY NATURALIZATION
    private $country =  $_REQUEST['pds_country'];

    // Residential Address
    private $residential_address =  $_REQUEST['pds_residential_address'];
    private $residential_street =  $_REQUEST['pds_residential_street'];
    private $residential_subdivision =  $_REQUEST['pds_residential_subdivision'];
    private $residential_barangay =  $_REQUEST['pds_residential_barangay'];
    private $residential_city =  $_REQUEST['pds_residential_city'];
    private $residential_province =  $_REQUEST['pds_residential_province'];
    private $residential_zip_code =  $_REQUEST['pds_residential_zip_code'];
    
    // Permanent Address
    private $permanent_address =  $_REQUEST['pds_permanent_address'];
    private $permanent_street =  $_REQUEST['pds_permanent_street'];
    private $permanent_subdivision =  $_REQUEST['pds_permanent_subdivision'];
    private $permanent_barangay =  $_REQUEST['pds_permanent_barangay'];
    private $permanent_city =  $_REQUEST['pds_permanent_city'];
    private $permanent_province =  $_REQUEST['pds_permanent_province'];
    private $permanent_zip_code =  $_REQUEST['pds_permanent_zip_code'];

    // Family Background 

    // Spouse Information
    private $spouse_surname =  $_REQUEST['pds_spouse_surname'];
    private $spouse_first_name =  $_REQUEST['pds_spouse_first_name'];
    private $spouse_middle_name =  $_REQUEST['pds_spouse_middle_name'];
    private $spouse_suffix =  $_REQUEST['pds_spouse_suffix'];
    private $spouse_occupation =  $_REQUEST['pds_spouse_occupation'];
    private $spouse_business_name =  $_REQUEST['pds_spouse_business_name'];
    private $spouse_business_address =  $_REQUEST['pds_spouse_business_address'];
    private $spouse_telephone_number =  $_REQUEST['pds_spouse_telephone_number'];

    // Father Information
    private $father_surname =  $_REQUEST['pds_father_surname'];
    private $father_first_name =  $_REQUEST['pds_father_first_name'];
    private $father_middle_name =  $_REQUEST['pds_father_middle_name'];
    private $father_suffix =  $_REQUEST['pds_father_suffix'];

    // Mother Information
    private $mother_surname =  $_REQUEST['pds_mother_surname'];
    private $mother_first_name =  $_REQUEST['pds_mother_first_name'];
    private $mother_middle_name =  $_REQUEST['pds_mother_middle_name'];
    private $mother_suffix =  $_REQUEST['pds_mother_suffix'];

    // Child Information
    private $name_child =  $_REQUEST['pds_name_child'];
    private $child_birth_date =  $_REQUEST['pds_child_birth_date'];


    // Educational Background

    // Elementary
    private $elementary_school_name =  $_REQUEST['pds_elementary_school_name'];
    private $elementary_basic_education =  $_REQUEST['pds_elementary_basic_education'];
    private $elementary_period_attendance_from =  $_REQUEST['pds_elementary_period_attendance_from'];
    private $elementary_period_attendance_to =  $_REQUEST['pds_elementary_period_attendance_to'];
    private $elementary_highest_level =  $_REQUEST['pds_elementary_highest_level'];
    private $elementary_year_graduated =  $_REQUEST['pds_elementary_year_graduated'];
    private $elementary_scholarship =  $_REQUEST['pds_elementary_scholarship'];

    // Secondary
    private $secondary_school_name =  $_REQUEST['pds_secondary_school_name'];
    private $secondary_basic_education =  $_REQUEST['pds_secondary_basic_education'];
    private $secondary_period_attendance_from =  $_REQUEST['pds_secondary_period_attendance_from'];
    private $secondary_period_attendance_to =  $_REQUEST['pds_secondary_period_attendance_to'];
    private $secondary_highest_level =  $_REQUEST['pds_secondary_highest_level'];
    private $secondary_year_graduated =  $_REQUEST['pds_secondary_year_graduated'];
    private $secondary_scholarship =  $_REQUEST['pds_secondary_scholarship'];

    // Vocational / Trade Course
    private $vocational_school_name =  $_REQUEST['pds_vocational_school_name'];
    private $vocational_basic_education =  $_REQUEST['pds_vocational_basic_education'];
    private $vocational_period_attendance_from =  $_REQUEST['pds_vocational_period_attendance_from'];
    private $vocational_period_attendance_to =  $_REQUEST['pds_vocational_period_attendance_to'];
    private $vocational_highest_level =  $_REQUEST['pds_vocational_highest_level'];
    private $vocational_year_graduated =  $_REQUEST['pds_vocational_year_graduated'];
    private $vocational_scholarship =  $_REQUEST['pds_vocational_scholarship'];

    // College
    private $college_school_name =  $_REQUEST['pds_college_school_name'];
    private $college_basic_education =  $_REQUEST['pds_college_basic_education'];
    private $college_period_attendance_from =  $_REQUEST['pds_college_period_attendance_from'];
    private $college_period_attendance_to =  $_REQUEST['pds_college_period_attendance_to'];
    private $college_highest_level =  $_REQUEST['pds_college_highest_level'];
    private $college_year_graduated =  $_REQUEST['pds_college_year_graduated'];
    private $college_scholarship =  $_REQUEST['pds_college_scholarship'];

    // Graduate Studies
    private $graduate_school_name =  $_REQUEST['pds_graduate_school_name'];
    private $graduate_basic_education =  $_REQUEST['pds_graduate_basic_education'];
    private $graduate_period_attendance_from =  $_REQUEST['pds_graduate_period_attendance_from'];
    private $graduate_period_attendance_to =  $_REQUEST['pds_graduate_period_attendance_to'];
    private $graduate_highest_level =  $_REQUEST['pds_graduate_highest_level'];
    private $graduate_year_graduated =  $_REQUEST['pds_graduate_year_graduated'];
    private $graduate_scholarship =  $_REQUEST['pds_graduate_scholarship'];


    // Civil Service Eligibility
    private $career_service =  $_REQUEST['pds_career_service'];
    private $career_rating =  $_REQUEST['pds_career_rating'];
    private $career_examination_date =  $_REQUEST['pds_career_examination_date'];
    private $career_examination_place =  $_REQUEST['pds_career_examination_place'];
    private $career_number =  $_REQUEST['pds_career_number'];
    private $career_validity_date =  $_REQUEST['pds_career_validity_date'];


    // Work Experience
    private $work_inclusive_dates_from =  $_REQUEST['pds_work_inclusive_dates_from'];
    private $work_inclusive_dates_to =  $_REQUEST['pds_work_inclusive_dates_to'];
    private $work_position_title =  $_REQUEST['pds_work_position_title'];
    private $work_department =  $_REQUEST['pds_work_department'];
    private $work_monthly_salary =  $_REQUEST['pds_work_monthly_salary'];
    private $work_salary =  $_REQUEST['pds_work_salary'];
    private $work_status_appointment =  $_REQUEST['pds_work_status_appointment'];
    private $work_govt_service =  $_REQUEST['pds_work_govt_service'];

    // VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORG/S
    private $voluntary_organization_name =  $_REQUEST['pds_voluntary_organization_name'];
    private $voluntary_organization_address =  $_REQUEST['pds_voluntary_organization_address'];
    private $voluntary_inclusive_date_from =  $_REQUEST['pds_voluntary_inclusive_date_from'];
    private $voluntary_inclusive_date_to =  $_REQUEST['pds_voluntary_inclusive_date_to'];
    private $voluntary_number_hours =  $_REQUEST['pds_voluntary_number_hours'];
    private $voluntary_position =  $_REQUEST['pds_voluntary_position'];

    // LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED
    private $training_program =  $_REQUEST['pds_training_program'];
    private $training_inclusive_date_from =  $_REQUEST['pds_training_inclusive_date_from'];
    private $training_inclusive_date_to =  $_REQUEST['pds_training_inclusive_date_to'];
    private $training_number_hours =  $_REQUEST['pds_training_number_hours'];
    private $training_ld_type =  $_REQUEST['pds_training_ld_type']; // LD TYPE
    private $training_conducted =  $_REQUEST['pds_training_conducted'];

    // Other Information




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