<?php
    // https://code.tutsplus.com/tutorials/basics-of-object-oriented-programming-in-php--cms-31910 trying pa lang to di ko magets yung sa pag query pero once na ma query ko maayos mas maayos na matitignan yung code


    include '../model/DBQuery.php';

    $dbConnection = new DBConnection();
    $dbQuery = new DBQuery();
    $read = new Read();
    
    
    if(isset($_POST["submit"])) { 
        // Taking all input from the form data(input)
        $surname = $_REQUEST['pds_surname'];
        $first_name =  $_REQUEST['pds_first_name'];
        $middle_name = $_REQUEST['pds_last_name'];
        $suffix_name =  $_REQUEST['pds_suffix_name'];
        
        $birth_date =  $_REQUEST['pds_birth_date']; //this is date
        $birth_place=  $_REQUEST['pds_birth_place'];
        $sex =  $_REQUEST['pds_sex']; // MALE or FEMALE
        $civil_status =  $_REQUEST['pds_civil_status']; // Can be SINGLE or MARRIED
        $height =  $_REQUEST['pds_height']; // float or double
        $weight =  $_REQUEST['pds_weight']; // float or double
        $blood_type =  $_REQUEST['pds_blood_type']; // short
        
        $gsis_id =  $_REQUEST['pds_gsis_id']; // don't know yet how long this would be
        $pagibig_id =  $_REQUEST['pds_pagibig_id']; // don't know yet how long this would be
        $philhealth_id =  $_REQUEST['pds_philhealth_id']; // don't know yet how long this would be
        $sss_id =  $_REQUEST['pds_sss_id']; // don't know yet how long this would be
        $tin_id =  $_REQUEST['pds_tin_id']; // don't know yet how long this would be
        $employee_number =  $_REQUEST['pds_employee_number']; // don't know yet how long this would be
        
        $telephone_number =  $_REQUEST['pds_telephone_number']; // maximum of 9 numbers
        $cellphone_number =  $_REQUEST['pds_cellphone_number']; // maximum of 11 numbers
        $email_add =  $_REQUEST['pds_email_add']; // this should be email
        $citizenship =  $_REQUEST['pds_citizenship']; // could be FILIPINO or DUAL CITIZENSHIP
        $immigrant =  $_REQUEST['pds_immigrant']; // could be BY BIRTH or BY NATURALIZATION
        $country =  $_REQUEST['pds_country'];

        // Residential Address
        $residential_house_number =  $_REQUEST['pds_residential_house_number'];
        $residential_street =  $_REQUEST['pds_residential_street'];
        $residential_subdivision =  $_REQUEST['pds_residential_subdivision'];
        $residential_barangay =  $_REQUEST['pds_residential_barangay'];
        $residential_city =  $_REQUEST['pds_residential_city'];
        $residential_province =  $_REQUEST['pds_residential_province'];
        $residential_zip_code =  $_REQUEST['pds_residential_zip_code'];
        
        // Permanent Address
        $permanent_house_number =  $_REQUEST['pds_permanent_house_number'];
        $permanent_street =  $_REQUEST['pds_permanent_street'];
        $permanent_subdivision =  $_REQUEST['pds_permanent_subdivision'];
        $permanent_barangay =  $_REQUEST['pds_permanent_barangay'];
        $permanent_city =  $_REQUEST['pds_permanent_city'];
        $permanent_province =  $_REQUEST['pds_permanent_province'];
        $permanent_zip_code =  $_REQUEST['pds_permanent_zip_code'];

        // Family Background 

        // Spouse Information
        $spouse_surname =  $_REQUEST['pds_spouse_surname'];
        $spouse_first_name =  $_REQUEST['pds_spouse_first_name'];
        $spouse_middle_name =  $_REQUEST['pds_spouse_middle_name'];
        $spouse_suffix =  $_REQUEST['pds_spouse_suffix'];
        $spouse_occupation =  $_REQUEST['pds_spouse_occupation'];
        $spouse_business_name =  $_REQUEST['pds_spouse_business_name'];
        $spouse_business_address =  $_REQUEST['pds_spouse_business_address'];
        $spouse_telephone_number =  $_REQUEST['pds_spouse_telephone_number'];

        // Father Information
        $father_surname =  $_REQUEST['pds_father_surname'];
        $father_first_name =  $_REQUEST['pds_father_first_name'];
        $father_middle_name =  $_REQUEST['pds_father_middle_name'];
        $father_suffix =  $_REQUEST['pds_father_suffix'];

        // Mother Information
        $mother_surname =  $_REQUEST['pds_mother_surname'];
        $mother_first_name =  $_REQUEST['pds_mother_first_name'];
        $mother_middle_name =  $_REQUEST['pds_mother_middle_name'];
        $mother_suffix =  $_REQUEST['pds_mother_suffix'];

        // Child Information
        $name_child =  $_REQUEST['pds_name_child'];
        $child_birth_date =  $_REQUEST['pds_child_birth_date'];


        // Educational Background

        // Elementary
        $elementary_school_name =  $_REQUEST['pds_elementary_school_name'];
        $elementary_basic_education =  $_REQUEST['pds_elementary_basic_education'];
        $elementary_period_attendance_from =  $_REQUEST['pds_elementary_period_attendance_from'];
        $elementary_period_attendance_to =  $_REQUEST['pds_elementary_period_attendance_to'];
        $elementary_highest_level =  $_REQUEST['pds_elementary_highest_level'];
        $elementary_year_graduated =  $_REQUEST['pds_elementary_year_graduated'];
        $elementary_scholarship =  $_REQUEST['pds_elementary_scholarship'];

        // Secondary
        $secondary_school_name =  $_REQUEST['pds_secondary_school_name'];
        $secondary_basic_education =  $_REQUEST['pds_secondary_basic_education'];
        $secondary_period_attendance_from =  $_REQUEST['pds_secondary_period_attendance_from'];
        $secondary_period_attendance_to =  $_REQUEST['pds_secondary_period_attendance_to'];
        $secondary_highest_level =  $_REQUEST['pds_secondary_highest_level'];
        $secondary_year_graduated =  $_REQUEST['pds_secondary_year_graduated'];
        $secondary_scholarship =  $_REQUEST['pds_secondary_scholarship'];

        // Vocational / Trade Course
        $vocational_school_name =  $_REQUEST['pds_vocational_school_name'];
        $vocational_basic_education =  $_REQUEST['pds_vocational_basic_education'];
        $vocational_period_attendance_from =  $_REQUEST['pds_vocational_period_attendance_from'];
        $vocational_period_attendance_to =  $_REQUEST['pds_vocational_period_attendance_to'];
        $vocational_highest_level =  $_REQUEST['pds_vocational_highest_level'];
        $vocational_year_graduated =  $_REQUEST['pds_vocational_year_graduated'];
        $vocational_scholarship =  $_REQUEST['pds_vocational_scholarship'];

        // College
        $college_school_name =  $_REQUEST['pds_college_school_name'];
        $college_basic_education =  $_REQUEST['pds_college_basic_education'];
        $college_period_attendance_from =  $_REQUEST['pds_college_period_attendance_from'];
        $college_period_attendance_to =  $_REQUEST['pds_college_period_attendance_to'];
        $college_highest_level =  $_REQUEST['pds_college_highest_level'];
        $college_year_graduated =  $_REQUEST['pds_college_year_graduated'];
        $college_scholarship =  $_REQUEST['pds_college_scholarship'];

        // Graduate Studies
        $graduate_school_name =  $_REQUEST['pds_graduate_school_name'];
        $graduate_basic_education =  $_REQUEST['pds_graduate_basic_education'];
        $graduate_period_attendance_from =  $_REQUEST['pds_graduate_period_attendance_from'];
        $graduate_period_attendance_to =  $_REQUEST['pds_graduate_period_attendance_to'];
        $graduate_highest_level =  $_REQUEST['pds_graduate_highest_level'];
        $graduate_year_graduated =  $_REQUEST['pds_graduate_year_graduated'];
        $graduate_scholarship =  $_REQUEST['pds_graduate_scholarship'];


        // Civil Service Eligibility
        $career_service =  $_REQUEST['pds_career_service'];
        $career_rating =  $_REQUEST['pds_career_rating'];
        $career_examination_date =  $_REQUEST['pds_career_examination_date'];
        $career_examination_place =  $_REQUEST['pds_career_examination_place'];
        $career_number =  $_REQUEST['pds_career_number'];
        $career_validity_date =  $_REQUEST['pds_career_validity_date'];


        // Work Experience
        $work_inclusive_dates_from =  $_REQUEST['pds_work_inclusive_dates_from'];
        $work_inclusive_dates_to =  $_REQUEST['pds_work_inclusive_dates_to'];
        $work_position_title =  $_REQUEST['pds_work_position_title'];
        $work_department =  $_REQUEST['pds_work_department'];
        $work_monthly_salary =  $_REQUEST['pds_work_monthly_salary'];
        $work_salary =  $_REQUEST['pds_work_salary'];
        $work_status_appointment =  $_REQUEST['pds_work_status_appointment'];
        $work_govt_service =  $_REQUEST['pds_work_govt_service'];

        // VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORG/S
        $voluntary_organization_name =  $_REQUEST['pds_voluntary_organization_name'];
        $voluntary_organization_address =  $_REQUEST['pds_voluntary_organization_address'];
        $voluntary_inclusive_date_from =  $_REQUEST['pds_voluntary_inclusive_date_from'];
        $voluntary_inclusive_date_to =  $_REQUEST['pds_voluntary_inclusive_date_to'];
        $voluntary_number_hours =  $_REQUEST['pds_voluntary_number_hours'];
        $voluntary_position =  $_REQUEST['pds_voluntary_position'];

        // LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED
        $training_program =  $_REQUEST['pds_training_program'];
        $training_inclusive_date_from =  $_REQUEST['pds_training_inclusive_date_from'];
        $training_inclusive_date_to =  $_REQUEST['pds_training_inclusive_date_to'];
        $training_number_hours =  $_REQUEST['pds_training_number_hours'];
        $training_ld_type =  $_REQUEST['pds_training_ld_type']; // LD TYPE
        $training_conducted =  $_REQUEST['pds_training_conducted'];

        // Other Information
        $special_skills =  $_REQUEST['pds_special_skills'];
        $recognition =  $_REQUEST['pds_recognition'];
        $membership_association =  $_REQUEST['pds_membership_association'];

        // Exam Type
        // Question 1 Type A
        $q1a =  $_REQUEST['pds_q1a'];
        // Question 1 Type B
        $q1b =  $_REQUEST['pds_q1b'];
        // Question 2 Type A
        $q2a =  $_REQUEST['pds_q2a'];
        // Question 2 Type B
        $q2b =  $_REQUEST['pds_q2b'];
        // Question 3
        $q3 =  $_REQUEST['pds_q3'];
        // Question 4
        $q4 =  $_REQUEST['pds_q4'];
        // Question 5 Type A
        $q5a =  $_REQUEST['pds_q5a'];
        // Question 5 Type B
        $q5b =  $_REQUEST['pds_q5b'];
        // Question 6
        $q6 =  $_REQUEST['pds_q6'];
        // Question 7 Type A
        $q7a =  $_REQUEST['pds_q7a'];
        // Question 7 Type B
        $q7b =  $_REQUEST['pds_q7b'];
        // Question 7 Type C
        $q7c =  $_REQUEST['pds_q7c'];

        // References (can be one or more)
        $reference_name =  $_REQUEST['pds_reference_name'];
        $reference_address =  $_REQUEST['pds_reference_address'];
        $reference_contact_number =  $_REQUEST['pds_reference_contact_number'];

        // Government Issued ID
        $government_issued_id =  $_REQUEST['pds_government_issued_id'];
        $id_license_passport_number =  $_REQUEST['pds_id_license_passport_number'];
        $government_date_issuance =  $_REQUEST['pds_government_date_issuance'];
        $government_place_issuance =  $_REQUEST['pds_government_place_issuance'];

        // Declaration under oath
        $oath =  $_REQUEST['pds_oath'];



        $read-> pds_construct($surname, $first_name, $middle_name, $suffix_name);
        
        $read-> setSurname($surname);
        $read-> setFirstName($first_name);
        $read-> setMiddleName($middle_name);
        $read-> setSuffixName($suffix_name);

        $read-> setBirthDate($birth_date);
        $read-> setBirthPlace($birth_place);
        $read-> setSex($sex);
        $read-> setCivilStatus($civil_status);
        $read-> setHeight($height);
        $read-> setWeight($weight);
        $read-> setBloodType($blood_type);

        $read-> setGsisId($gsis_id);
        $read-> setPagibigId($pagibig_id);
        $read-> setPhilhealthId($philhealth_id);
        $read-> setSssId($sss_id);
        $read-> setTinId($tin_id);
        $read-> setEmployeeNumber($employee_number);

        $read-> setTelephoneNumber($telephone_number);
        $read-> setCellphoneNumber($cellphone_number);
        $read-> setEmailAdd($email_add);
        $read-> setCitizenship($citizenship);
        $read-> setImmigrant($immigrant);
        $read-> setCountry($country);

        $read-> setResidentialHouseNumber($residential_house_number);
        $read-> setResidentialStreet($residential_street);
        $read-> setResidentialSubdivision($residential_subdivision);
        $read-> setResidentialBarangay($residential_barangay);
        $read-> setResidentialCity($residential_city);
        $read-> setResidentialProvince($residential_province);
        $read-> setResidentialZipCode($residential_zip_code);

        $read-> setPermanentHouseNumber($permanent_house_number);
        $read-> setPermanentStreet($permanent_street);
        $read-> setPermanentSubdivision($permanent_subdivision);
        $read-> setPermanentBarangay($permanent_barangay);
        $read-> setPermanentCity($permanent_city);
        $read-> setPermanentProvince($permanent_province);
        $read-> setPermanentZipCode($permanent_zip_code);

        $read-> setSpouseSurname($spouse_surname);
        $read-> setSpouseFirstName($spouse_first_name);
        $read-> setSpouseMiddleName($spouse_middle_name);
        $read-> setSpouseSuffix($spouse_suffix);
        $read-> setSpouseOccupation($spouse_occupation);
        $read-> setSpouseBusinessName($spouse_business_name);
        $read-> setSpouseBusinessAddress($spouse_business_address);
        $read-> setSpouseTelephoneNumber($spouse_telephone_number);
        
        $read-> setFatherSurname($father_surname);
        $read-> setFatherFirstName($father_first_name);
        $read-> setFatherMiddleName($father_middle_name);
        $read-> setFatherSuffix($father_suffix);

        $read-> setMotherSurname($mother_surname);
        $read-> setMotherFirstName($mother_first_name);
        $read-> setMotherMiddleName($mother_middle_name);
        $read-> setMotherSuffix($mother_suffix);

        $read-> setNameChild($name_child);
        $read-> setChildBirthDate($child_birth_date);

        $read-> setElementarySchoolName($elementary_school_name);
        $read-> setElementaryBasicEducation($elementary_basic_education);
        $read-> setElementaryPeriodAttendanceFrom($elementary_period_attendance_from);
        $read-> setElementaryPeriodAttendanceTo($elementary_period_attendance_to);
        $read-> setElementaryHighestLevel($elementary_highest_level);
        $read-> setElementaryYearGraduated($elementary_year_graduated);
        $read-> setElementaryScholarship($elementary_scholarship);

        $read-> setSecondarySchoolName($secondary_school_name);
        $read-> setSecondaryBasicEducation($secondary_basic_education);
        $read-> setSecondaryPeriodAttendanceFrom($secondary_period_attendance_from);
        $read-> setSecondaryPeriodAttendanceTo($secondary_period_attendance_to);
        $read-> setSecondaryHighestLevel($secondary_highest_level);
        $read-> setSecondaryYearGraduated($secondary_year_graduated);
        $read-> setSecondaryScholarship($secondary_scholarship);

        $read-> setVocationalSchoolName($vocational_school_name);
        $read-> setVocationalBasicEducation($vocational_basic_education);
        $read-> setVocationalPeriodAttendanceFrom($vocational_period_attendance_from);
        $read-> setVocationalPeriodAttendanceTo($vocational_period_attendance_to);
        $read-> setVocationalHighestLevel($vocational_highest_level);
        $read-> setVocationalYearGraduated($vocational_year_graduated);
        $read-> setVocationalScholarship($vocational_scholarship);

        $read-> setCollegeSchoolName($college_school_name);
        $read-> setCollegeBasicEducation($college_basic_education);
        $read-> setCollegePeriodAttendanceFrom($college_period_attendance_from);
        $read-> setCollegePeriodAttendanceTo($college_period_attendance_to);
        $read-> setCollegeHighestLevel($college_highest_level);
        $read-> setCollegeYearGraduated($college_year_graduated);
        $read-> setCollegeScholarship($college_scholarship);

        $read-> setGraduateSchoolName($graduate_school_name);
        $read-> setGraduateBasicEducation($graduate_basic_education);
        $read-> setGraduatePeriodAttendanceFrom($graduate_period_attendance_from);
        $read-> setGraduatePeriodAttendanceTo($graduate_period_attendance_to);
        $read-> setGraduateHighestLevel($graduate_highest_level);
        $read-> setGraduateYearGraduated($graduate_year_graduated);
        $read-> setGraduateScholarship($graduate_scholarship);

        $read-> setCareerService($career_service);
        $read-> setCareerRating($career_rating);
        $read-> setCareerExaminationDate($career_examination_date);
        $read-> setCareerExaminationPlace($career_examination_place);
        $read-> setCareerNumber($career_number);
        $read-> setCareerValidityDate($career_validity_date);

        $read-> setWorkInclusiveDatesFrom($work_inclusive_dates_from);
        $read-> setWorkInclusiveDatesTo($work_inclusive_dates_to);
        $read-> setWorkPositionTitle($work_position_title);
        $read-> setWorkDepartment($work_department);
        $read-> setWorkMonthlySalary($work_monthly_salary);
        $read-> setWorkSalary($work_salary);
        $read-> setWorkStatusAppointment($work_status_appointment);
        $read-> setWorkGovtService($work_govt_service);

        $read-> setVoluntaryOrganiztionName($voluntary_organization_name);
        $read-> setVoluntaryOrganiztionAddress($voluntary_organization_address);
        $read-> setVoluntaryInclusiveDateFrom($voluntary_inclusive_date_from);
        $read-> setVoluntaryInclusiveDateTo($voluntary_inclusive_date_to);
        $read-> setVoluntaryNumberHours($voluntary_number_hours);
        $read-> setVoluntaryPosition($voluntary_position);

        $read-> setTrainingProgram($training_program);
        $read-> setTrainingInclusiveDateFrom($training_inclusive_date_from);
        $read-> setTrainingInclusiveDateTo($training_inclusive_date_to);
        $read-> setTrainingNumberHours($training_number_hours);
        $read-> setTrainingLdType($training_ld_type);
        $read-> setTrainingConducted($training_conducted);

        $read-> setSpecialSkills($special_skills);
        $read-> setRecognition($recognition);
        $read-> setMembershipAssociation($membership_association);

        $read-> setQ1a($q1a);
        $read-> setQ1b($q1b);
        $read-> setQ2a($q2a);
        $read-> setQ2b($q2b);
        $read-> setQ3($q3);
        $read-> setQ4($q4);
        $read-> setQ5a($q5a);
        $read-> setQ5b($q5b);
        $read-> setQ6($q6);
        $read-> setQ7a($q7a);
        $read-> setQ7b($q7b);
        $read-> setQ7c($q7c);


        $read-> setReferenceName($reference_name);
        $read-> setReferenceAddress($reference_address);
        $read-> setReferenceContactNumber($reference_contact_number);


        $read-> setGovernmentIssuedId($government_issued_id);
        $read-> setIdLicensePassportNumber($id_license_passport_number);
        $read-> setGovernmentDateIssuance($government_date_issuance);
        $read-> setGovernmentPlaceIssuance($government_place_issuance);

        $read-> setOath($oath);
        
        $dbConnection->__construct($check_db_connection);

        if ($check_db_connection == true) {
            echo 'connected';

            $surname = $read-> getSurname();
            $first_name = $read-> getFirstName();
            $middle_name = $read-> getMiddleName();
            $suffix_name = $read-> getSuffixName();

            $birth_date = $read -> getBirthDate();
            $birth_place = $read -> getBirthPlace();
            $sex = $read -> getSex();
            $civil_status = $read -> getCivilStatus();
            $height = $read -> getHeight();
            $weight = $read -> getWeight();
            $blood_type = $read -> getBloodType();
            
            $gsis_id = $read -> getGsisId();
            $pagibig_id = $read -> getPagibigId();
            $philhealth_id = $read -> getPhilhealthId();
            $sss_id = $read -> getSssId();
            $tin_id = $read -> getTinId();
            $employee_number = $read -> getEmployeeNumber();

            $telephone_number = $read -> getTelephoneNumber();
            $cellphone_number = $read -> getCellphoneNumber();
            $email_add = $read -> getEmailAdd();
            $citizenship = $read -> getCitizenship();
            $immigrant = $read -> getImmigrant();
            $country = $read -> getCountry();

            $residential_house_number = $read -> getResidentialHouseNumber();
            $residential_street = $read -> getResidentialStreet();
            $residential_subdivision = $read -> getResidentialSubdivision();
            $residential_barangay = $read -> getResidentialBarangay();
            $residential_city = $read -> getResidentialCity();
            $residential_province = $read -> getResidentialProvince();
            $residential_zip_code = $read -> getResidentialZipCode();

            $permanent_house_number = $read -> getPermanentHouseNumber();
            $permanent_street = $read -> getPermanentStreet();
            $permanent_subdivision = $read -> getPermanentSubdivision();
            $permanent_barangay = $read -> getPermanentBarangay();
            $permanent_city = $read -> getPermanentCity();
            $permanent_province = $read -> getPermanentProvince();
            $permanent_zip_code = $read -> getPermanentZipCode();

            $spouse_surname = $read -> getSpouseSurname();
            $spouse_first_name = $read -> getSpouseFirstName();
            $spouse_middle_name = $read -> getSpouseMiddleName();
            $spouse_suffix = $read -> getSpouseSuffix();
            $spouse_occupation = $read -> getSpouseOccupation();
            $spouse_business_name = $read -> getSpouseBusinessName();
            $spouse_business_address = $read -> getSpouseBusinessAddress();
            $spouse_telephone_number = $read -> getSpouseTelephoneNumber();

            $father_surname = $read -> getFatherSurname();
            $father_first_name = $read -> getFatherFirstName();
            $father_middle_name = $read -> getFatherMiddleName();
            $father_suffix = $read -> getFatherSuffix();

            $mother_surname = $read -> getMotherSurname();
            $mother_first_name = $read -> getMotherFirstName();
            $mother_middle_name = $read -> getMotherMiddleName();
            $mother_suffix = $read -> getMotherSuffix();

            $name_child = $read -> getNameChild();
            $child_birth_date = $read -> getChildBirthDate();

            $elementary_school_name = $read -> getElementarySchoolName();
            $elementary_basic_education = $read -> getElementaryBasicEducation();
            $elementary_period_attendance_from = $read -> getElementaryPeriodAttendanceFrom();
            $elementary_period_attendance_to = $read -> getElementaryPeriodAttendanceTo();
            $elementary_highest_level = $read -> getElementaryHighestLevel();
            $elementary_year_graduated = $read -> getElementaryYearGraduated();
            $elementary_scholarship = $read -> getElementaryScholarship();

            $secondary_school_name = $read -> getSecondarySchoolName();
            $secondary_basic_education = $read -> getSecondaryBasicEducation();
            $secondary_period_attendance_from = $read -> getSecondaryPeriodAttendanceFrom();
            $secondary_period_attendance_to = $read -> getSecondaryPeriodAttendanceTo();
            $secondary_highest_level = $read -> getSecondaryHighestLevel();
            $secondary_year_graduated = $read -> getSecondaryYearGraduated();
            $secondary_scholarship = $read -> getSecondaryScholarship();

            $vocational_school_name = $read -> getVocationalSchoolName();
            $vocational_basic_education = $read -> getVocationalBasicEducation();
            $vocational_period_attendance_from = $read -> getVocationalPeriodAttendanceFrom();
            $vocational_period_attendance_to = $read -> getVocationalPeriodAttendanceTo();
            $vocational_highest_level = $read -> getVocationalHighestLevel();
            $vocational_year_graduated = $read -> getVocationalYearGraduated();
            $vocational_scholarship = $read -> getVocationalScholarship();

            $college_school_name = $read -> getCollegeSchoolName();
            $college_basic_education = $read -> getCollegeBasicEducation();
            $college_period_attendance_from = $read -> getCollegePeriodAttendanceFrom();
            $college_period_attendance_to = $read -> getCollegePeriodAttendanceTo();
            $college_highest_level = $read -> getCollegeHighestLevel();
            $college_year_graduated = $read -> getCollegeYearGraduated();
            $college_scholarship = $read -> getCollegeScholarship();

            $graduate_school_name = $read -> getGraduateSchoolName();
            $graduate_basic_education = $read -> getGraduateBasicEducation();
            $graduate_period_attendance_from = $read -> getGraduatePeriodAttendanceFrom();
            $graduate_period_attendance_to = $read -> getGraduatePeriodAttendanceTo();
            $graduate_highest_level = $read -> getGraduateHighestLevel();
            $graduate_year_graduated = $read -> getGraduateYearGraduated();
            $graduate_scholarship = $read -> getGraduateScholarship();

            $career_service = $read -> getCareerService();
            $career_rating = $read -> getCareerRating();
            $career_examination_date = $read -> getCareerExaminationDate();
            $career_examination_place = $read -> getCareerExaminationPlace();
            $career_number = $read -> getCareerNumber();
            $career_validity_date = $read -> getCareerValidityDate();

            $work_inclusive_dates_from = $read -> getWorkInclusiveDatesFrom();
            $work_inclusive_dates_to = $read -> getWorkInclusiveDatesTo();
            $work_position_title = $read -> getWorkPositionTitle();
            $work_department = $read -> getWorkDepartment();
            $work_monthly_salary = $read -> getWorkMonthlySalary();
            $work_salary = $read -> getWorkSalary();
            $work_status_appointment = $read -> getWorkStatusAppointment();
            $work_govt_service = $read -> getWorkGovtService();

            $voluntary_organization_name = $read -> getVoluntaryOrganiztionName();
            $voluntary_organization_address = $read -> getVoluntaryOrganiztionAddress();
            $voluntary_inclusive_date_from = $read -> getVoluntaryInclusiveDateFrom();
            $voluntary_inclusive_date_to = $read -> getVoluntaryInclusiveDateTo();
            $voluntary_number_hours = $read -> getVoluntaryNumberHours();
            $voluntary_position = $read -> getVoluntaryPosition();

            $training_program = $read -> getTrainingProgram();
            $training_inclusive_date_from = $read -> getTrainingInclusiveDateFrom();
            $training_inclusive_date_to = $read -> getTrainingInclusiveDateTo();
            $training_number_hours = $read -> getTrainingNumberHours();
            $training_ld_type = $read -> getTrainingLdType();
            $training_conducted = $read -> getTrainingConducted();

            $special_skills = $read -> getSpecialSkills();
            $recognition = $read -> getRecognition();
            $membership_association = $read -> getMembershipAssociation();

            $q1a = $read -> getQ1a();
            $q1b = $read -> getQ1b();
            $q2a = $read -> getQ2a();
            $q2b = $read -> getQ2b();
            $q3 = $read -> getQ3();
            $q4 = $read -> getQ4();
            $q5a = $read -> getQ5a();
            $q5b = $read -> getQ5b();
            $q6 = $read -> getQ6();
            $q7a = $read -> getQ7a();
            $q7b = $read -> getQ7b();
            $q7c = $read -> getQ7c();
    
            $reference_name = $read -> getReferenceName();
            $reference_address = $read -> getReferenceAddress();
            $reference_contact_number = $read -> getReferenceContactNumber();

            $government_issued_id = $read -> getGovernmentIssuedId();
            $id_license_passport_number = $read -> getIdLicensePassportNumber();
            $government_date_issuance = $read -> getGovernmentDateIssuance();
            $government_place_issuance = $read -> getGovernmentPlaceIssuance();


            $oath = $read -> getOath();





            $dbQuery-> pds_add_employee_sheet($surname, $first_name, $middle_name, $suffix,$birth_date,$birth_place,$gender,$civil_status,
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
            $government_issued_id, $id_license_passport_number, $government_date_issuance, $government_place_issuance, $oath);
    
        } 
    }

    
?>