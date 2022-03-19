<?php
    class Read {
        private $surname;
        private $first_name;
        private $middle_name;
        private $suffix_name;

        private $birth_date;
        private $birth_place;
        private $sex;
        private $civil_status;
        private $height;
        private $weight;
        private $blood_type;

        private $gsis_id;
        private $pagibig_id;
        private $philhealth_id;
        private $sss_id;
        private $tin_id;
        private $employee_number;

        private $telephone_number;
        private $cellphone_number;
        private $email_add;
        private $citizenship;
        private $immigrant;
        private $country;

        // Residential Address
        private $residential_house_number;
        private $residential_street;
        private $residential_subdivision;
        private $residential_barangay;
        private $residential_city;
        private $residential_province;
        private $residential_zip_code;

        // Permanent Address
        private $permanent_house_number;
        private $permanent_street;
        private $permanent_subdivision;
        private $permanent_barangay;
        private $permanent_city;
        private $permanent_province;
        private $permanent_zip_code;

        // Family Background 

        // Spouse Information
        private $spouse_surname;
        private $spouse_first_name;
        private $spouse_middle_name;
        private $spouse_suffix;
        private $spouse_occupation;
        private $spouse_business_name;
        private $spouse_business_address;
        private $spouse_telephone_number;

        // Father Information
        private $father_surname;
        private $father_first_name;
        private $father_middle_name;
        private $father_suffix;

        // Mother Information
        private $mother_surname;
        private $mother_first_name;
        private $mother_middle_name;
        private $mother_suffix;

        // Child Information
        private $name_child;
        private $child_birth_date;

        // Elementary Information
        private $elementary_school_name;
        private $elementary_basic_education;
        private $elementary_period_attendance_from;
        private $elementary_period_attendance_to;
        private $elementary_highest_level;
        private $elementary_year_graduated;
        private $elementary_scholarship;

        // Secondary
        private $secondary_school_name;
        private $secondary_basic_education;
        private $secondary_period_attendance_from;
        private $secondary_period_attendance_to;
        private $secondary_highest_level;
        private $secondary_year_graduated;
        private $secondary_scholarship;

        // Vocational / Trade Course
        private $vocational_school_name;
        private $vocational_basic_education;
        private $vocational_period_attendance_from;
        private $vocational_period_attendance_to;
        private $vocational_highest_level;
        private $vocational_year_graduated;
        private $vocational_scholarship;

        // College
        private $college_school_name;
        private $college_basic_education;
        private $college_period_attendance_from;
        private $college_period_attendance_to;
        private $college_highest_level;
        private $college_year_graduated;
        private $college_scholarship;

        // Graduate Studies
        private $graduate_school_name;
        private $graduate_basic_education;
        private $graduate_period_attendance_from;
        private $graduate_period_attendance_to;
        private $graduate_highest_level;
        private $graduate_year_graduated;
        private $graduate_scholarship;

        // Civil Service Eligibility
        private $career_service;
        private $career_rating;
        private $career_examination_date;
        private $career_examination_place;
        private $career_number;
        private $career_validity_date;

        // Work Experience
        private $work_inclusive_dates_from;
        private $work_inclusive_dates_to;
        private $work_position_title;
        private $work_department;
        private $work_monthly_salary;
        private $work_salary;
        private $work_status_appointment;
        private $work_govt_service;

        // VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORG/S
        private $voluntary_organization_name;
        private $voluntary_organization_address;
        private $voluntary_inclusive_date_from;
        private $voluntary_inclusive_date_to;
        private $voluntary_number_hours;
        private $voluntary_position;

         // LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED
        private $training_program;
        private $training_inclusive_date_from;
        private $training_inclusive_date_to;
        private $training_number_hours;
        private $training_ld_type; // LD TYPE
        private $training_conducted;

        // Other Information
        private $special_skills;
        private $recognition;
        private $membership_association;

        // Exam Type
        // Question 1 Type A
        private $q1a;
        // Question 1 Type B
        private $q1b;
        // Question 2 Type A
        private $q2a;
        // Question 2 Type B
        private $q2b;
        // Question 3
        private $q3;
        // Question 4
        private $q4;
        // Question 5 Type A
        private $q5a;
        // Question 5 Type B
        private $q5b;
        // Question 6
        private $q6;
        // Question 7 Type A
        private $q7a;
        // Question 7 Type B
        private $q7b;
        // Question 7 Type C
        private $q7c;

        // References (can be one or more)
        private $reference_name;
        private $reference_address;
        private $reference_contact_number;

        // Government Issued ID
        private $government_issued_id;
        private $id_license_passport_number;
        private $government_date_issuance;
        private $government_place_issuance;

        // Declaration under oath
        private $oath;
     


        // Reading the inputs in pds_controller
        public function pds_construct ($surname, $first_name, $middle_name, $suffix_name) {
            $this-> surname = $surname;
            $this-> first_name = $first_name;
            $this-> middle_name = $middle_name;
            $this-> suffix_name = $suffix_name;

        }

        public function forCapitalization() {

        }

        public function getSurname() {
            return $this-> surname;
        }

        public function setSurname($surname) {
            $this->surname = $surname;
        }

        public function getFirstName() {
            return $this-> first_name;
        }

        public function setFirstName($first_name) {
            $this->first_name = $first_name;
        }

        public function getMiddleName() {
            return $this-> middle_name;
        }

        public function setMiddleName($middle_name) {
            $this-> middle_name = $middle_name;
        }

        public function getSuffixName() {
            return $this-> suffix_name;
        }

        public function setSuffixName($suffix_name) {
            $this-> suffix_name = $suffix_name;
        }
         
        public function getBirthDate() {
            return $this-> birth_date;
        }

        public function setBirthDate($birth_date) {
            $this-> birth_date = $birth_date;
        }

        public function getBirthPlace() {
            return $this-> birth_place;
        }

        public function setBirthPlace($birth_place) {
            $this-> birth_place = $birth_place;
        }

        public function getSex() {
            return $this-> sex;
        }

        public function setSex($sex) {
            $this-> sex = $sex;
        }

        public function getCivilStatus() {
            return $this-> civil_status;
        }

        public function setCivilStatus($civil_status) {
            $this-> civil_status = $civil_status;
        }
        
        public function getHeight() {
            return $this-> height;
        }

        public function setHeight($height) {
            $this-> height = $height;
        }

        public function getWeight() {
            return $this-> weight;
        }

        public function setWeight($weight) {
            $this-> weight = $weight;
        }

        public function getBloodType() {
            return $this-> blood_type;
        }

        public function setBloodType($blood_type) {
            $this-> blood_type = $blood_type;
        }

        public function getGsisId() {
            return $this-> gsis_id;
        }

        public function setGsisId($gsis_id) {
            $this-> gsis_id = $gsis_id;
        }

        public function getPagibigId() {
            return $this-> pagibig_id;
        }

        public function setPagibigId($pagibig_id) {
            $this-> pagibig_id = $pagibig_id;
        }

        public function getPhilhealthId() {
            return $this-> philhealth_id;
        }

        public function setPhilhealthId($philhealth_id) {
            $this-> philhealth_id = $philhealth_id;
        }

        public function getSssId() {
            return $this-> sss_id;
        }

        public function setSssId($sss_id) {
            $this-> sss_id = $sss_id;
        }

        public function getTinId() {
            return $this-> tin_id;
        }

        public function setTinId($tin_id) {
            $this-> tin_id = $tin_id;
        }

        public function getEmployeeNumber() {
            return $this-> employee_number;
        }

        public function setEmployeeNumber($employee_number) {
            $this-> employee_number = $employee_number;
        }

        public function getTelephoneNumber() {
            return $this-> telephone_number;
        }

        public function setTelephoneNumber($telephone_number) {
            $this-> telephone_number = $telephone_number;
        }

        public function getCellphoneNumber() {
            return $this-> cellphone_number;
        }

        public function setCellphoneNumber($cellphone_number) {
            $this-> cellphone_number = $cellphone_number;
        }

        public function getEmailAdd() {
            return $this-> email_add;
        }

        public function setEmailAdd($email_add) {
            $this-> email_add = $email_add;
        }

        public function getCitizenship() {
            return $this-> citizenship;
        }

        public function setCitizenship($citizenship) {
            $this-> citizenship = $citizenship;
        }
        
        public function getImmigrant() {
            return $this-> immigrant;
        }

        public function setImmigrant($immigrant) {
            $this-> immigrant = $immigrant;
        }

        public function getCountry() {
            return $this-> country;
        }

        public function setCountry($country) {
            $this-> country = $country;
        }
        
        public function getResidentialHouseNumber() {
            return $this-> residential_house_number;
        }

        public function setResidentialHouseNumber($residential_house_number) {
            $this-> residential_house_number = $residential_house_number;
        }

        public function getResidentialStreet() {
            return $this-> residential_street;
        }

        public function setResidentialStreet($residential_street) {
            $this-> residential_street = $residential_street;
        }
        
        public function getResidentialSubdivision() {
            return $this-> residential_subdivision;
        }

        public function setResidentialSubdivision($residential_subdivision) {
            $this-> residential_subdivision = $residential_subdivision;
        }
        
        public function getResidentialBarangay() {
            return $this-> residential_barangay;
        }

        public function setResidentialBarangay($residential_barangay) {
            $this-> residential_barangay = $residential_barangay;
        }

        public function getResidentialCity() {
            return $this-> residential_city;
        }

        public function setResidentialCity($residential_city) {
            $this-> residential_city = $residential_city;
        }

        public function getResidentialProvince() {
            return $this-> residential_province;
        }

        public function setResidentialProvince($residential_province) {
            $this-> residential_province = $residential_province;
        }

        public function getResidentialZipCode() {
            return $this-> residential_zip_code;
        }

        public function setResidentialZipCode($residential_zip_code) {
            $this-> residential_zip_code = $residential_zip_code;
        }
        
        public function getPermanentHouseNumber() {
            return $this-> permanent_house_number;
        }

        public function setPermanentHouseNumber($permanent_house_number) {
            $this-> permanent_house_number = $permanent_house_number;
        }
        
        public function getPermanentStreet() {
            return $this-> permanent_street;
        }

        public function setPermanentStreet($permanent_street) {
            $this-> permanent_street = $permanent_street;
        }
        
        public function getPermanentSubdivision() {
            return $this-> permanent_subdivision;
        }

        public function setPermanentSubdivision($permanent_subdivision) {
            $this-> permanent_subdivision = $permanent_subdivision;
        }
        
        public function getPermanentBarangay() {
            return $this-> permanent_barangay;
        }

        public function setPermanentBarangay($permanent_barangay) {
            $this-> permanent_barangay = $permanent_barangay;
        }
        
        public function getPermanentCity() {
            return $this-> permanent_city;
        }

        public function setPermanentCity($permanent_city) {
            $this-> permanent_city = $permanent_city;
        }

        public function getPermanentProvince() {
            return $this-> permanent_province;
        }

        public function setPermanentProvince($permanent_province) {
            $this-> permanent_province = $permanent_province;
        }
        
        public function getPermanentZipCode() {
            return $this-> permanent_zip_code;
        }

        public function setPermanentZipCode($permanent_zip_code) {
            $this-> permanent_zip_code = $permanent_zip_code;
        }
        
        public function getSpouseSurname() {
            return $this-> spouse_surname;
        }

        public function setSpouseSurname($spouse_surname) {
            $this-> spouse_surname = $spouse_surname;
        }

        public function getSpouseFirstName() {
            return $this-> spouse_first_name;
        }

        public function setSpouseFirstName($spouse_first_name) {
            $this-> spouse_first_name = $spouse_first_name;
        }
        
        public function getSpouseMiddleName() {
            return $this-> spouse_middle_name;
        }

        public function setSpouseMiddleName($spouse_middle_name) {
            $this-> spouse_middle_name = $spouse_middle_name;
        }
        
        public function getSpouseSuffix() {
            return $this-> spouse_suffix;
        }

        public function setSpouseSuffix($spouse_suffix) {
            $this-> spouse_suffix = $spouse_suffix;
        }
        
        public function getSpouseOccupation() {
            return $this-> spouse_occupation;
        }

        public function setSpouseOccupation($spouse_occupation) {
            $this-> spouse_occupation = $spouse_occupation;
        }
        
        public function getSpouseBusinessName() {
            return $this-> spouse_business_name;
        }

        public function setSpouseBusinessName($spouse_business_name) {
            $this-> spouse_business_name = $spouse_business_name;
        }
        
        public function getSpouseBusinessAddress() {
            return $this-> spouse_business_address;
        }

        public function setSpouseBusinessAddress($spouse_business_address) {
            $this-> spouse_business_address = $spouse_business_address;
        }
        
        public function getSpouseTelephoneNumber() {
            return $this-> spouse_telephone_number;
        }

        public function setSpouseTelephoneNumber($spouse_telephone_number) {
            $this-> spouse_telephone_number = $spouse_telephone_number;
        }

        public function getFatherSurname() {
            return $this-> father_surname;
        }

        public function setFatherSurname($father_surname) {
            $this-> father_surname = $father_surname;
        }

        public function getFatherFirstName() {
            return $this-> father_first_name;
        }

        public function setFatherFirstName($father_first_name) {
            $this-> father_first_name = $father_first_name;
        }

        public function getFatherMiddleName() {
            return $this-> father_middle_name;
        }

        public function setFatherMiddleName($father_middle_name) {
            $this-> father_middle_name = $father_middle_name;
        }

        public function getFatherSuffix() {
            return $this-> father_suffix;
        }

        public function setFatherSuffix($father_suffix) {
            $this-> father_suffix = $father_suffix;
        }

        public function getMotherSurname() {
            return $this-> mother_surname;
        }

        public function setMotherSurname($mother_surname) {
            $this-> mother_surname = $mother_surname;
        }

        public function getMotherFirstName() {
            return $this-> mother_first_name;
        }

        public function setMotherFirstName($mother_first_name) {
            $this-> mother_first_name = $mother_first_name;
        }

        public function getMotherMiddleName() {
            return $this-> mother_middle_name;
        }

        public function setMotherMiddleName($mother_middle_name) {
            $this-> mother_middle_name = $mother_middle_name;
        }

        public function getMotherSuffix() {
            return $this-> mother_suffix;
        }

        public function setMotherSuffix($mother_suffix) {
            $this-> mother_suffix = $mother_suffix;
        }

        public function getNameChild() {
            return $this-> name_child;
        }

        public function setNameChild($name_child) {
            $this-> name_child = $name_child;
        }

        public function getChildBirthDate() {
            return $this-> child_birth_date;
        }

        public function setChildBirthDate($child_birth_date) {
            $this-> child_birth_date = $child_birth_date;
        }

        public function getElementarySchoolName() {
            return $this-> elementary_school_name;
        }

        public function setElementarySchoolName($elementary_school_name) {
            $this-> elementary_school_name = $elementary_school_name;
        }

        public function getElementaryBasicEducation() {
            return $this-> elementary_basic_education;
        }

        public function setElementaryBasicEducation($elementary_basic_education) {
            $this-> elementary_basic_education = $elementary_basic_education;
        }

        public function getElementaryPeriodAttendanceFrom() {
            return $this-> elementary_period_attendance_from;
        }

        public function setElementaryPeriodAttendanceFrom($elementary_period_attendance_from) {
            $this-> elementary_period_attendance_from = $elementary_period_attendance_from;
        }

        public function getElementaryPeriodAttendanceTo() {
            return $this-> elementary_period_attendance_to;
        }

        public function setElementaryPeriodAttendanceTo($elementary_period_attendance_to) {
            $this-> elementary_period_attendance_to = $elementary_period_attendance_to;
        }

        public function getElementaryHighestLevel() {
            return $this-> elementary_highest_level;
        }

        public function setElementaryHighestLevel($elementary_highest_level) {
            $this-> elementary_highest_level = $elementary_highest_level;
        }

        public function getElementaryYearGraduated() {
            return $this-> elementary_year_graduated;
        }

        public function setElementaryYearGraduated($elementary_year_graduated) {
            $this-> elementary_year_graduated = $elementary_year_graduated;
        }

        public function getElementaryScholarship() {
            return $this-> elementary_scholarship;
        }

        public function setElementaryScholarship($elementary_scholarship) {
            $this-> elementary_scholarship = $elementary_scholarship;
        }

        public function getSecondarySchoolName() {
            return $this-> secondary_school_name;
        }

        public function setSecondarySchoolName($secondary_school_name) {
            $this-> secondary_school_name = $secondary_school_name;
        }

        public function getSecondaryBasicEducation() {
            return $this-> secondary_basic_education;
        }

        public function setSecondaryBasicEducation($secondary_basic_education) {
            $this-> secondary_basic_education = $secondary_basic_education;
        }

        public function getSecondaryPeriodAttendanceFrom() {
            return $this-> secondary_period_attendance_from;
        }

        public function setSecondaryPeriodAttendanceFrom($secondary_period_attendance_from) {
            $this-> secondary_period_attendance_from = $secondary_period_attendance_from;
        }

        public function getSecondaryPeriodAttendanceTo() {
            return $this-> secondary_period_attendance_to;
        }

        public function setSecondaryPeriodAttendanceTo($secondary_period_attendance_to) {
            $this-> secondary_period_attendance_to = $secondary_period_attendance_to;
        }

        public function getSecondaryHighestLevel() {
            return $this-> secondary_highest_level;
        }

        public function setSecondaryHighestLevel($secondary_highest_level) {
            $this-> secondary_highest_level = $secondary_highest_level;
        }

        public function getSecondaryYearGraduated() {
            return $this-> secondary_year_graduated;
        }

        public function setSecondaryYearGraduated($secondary_year_graduated) {
            $this-> secondary_year_graduated = $secondary_year_graduated;
        }

        public function getSecondaryScholarship() {
            return $this-> secondary_scholarship;
        }

        public function setSecondaryScholarship($secondary_scholarship) {
            $this-> secondary_scholarship = $secondary_scholarship;
        }

        public function getVocationalSchoolName() {
            return $this-> vocational_school_name;
        }

        public function setVocationalSchoolName($vocational_school_name) {
            $this-> vocational_school_name = $vocational_school_name;
        }

        public function getVocationalBasicEducation() {
            return $this-> vocational_basic_education;
        }

        public function setVocationalBasicEducation($vocational_basic_education) {
            $this-> vocational_basic_education = $vocational_basic_education;
        }

        public function getVocationalPeriodAttendanceFrom() {
            return $this-> vocational_period_attendance_from;
        }

        public function setVocationalPeriodAttendanceFrom($vocational_period_attendance_from) {
            $this-> vocational_period_attendance_from = $vocational_period_attendance_from;
        }

        public function getVocationalPeriodAttendanceTo() {
            return $this-> vocational_period_attendance_to;
        }

        public function setVocationalPeriodAttendanceTo($vocational_period_attendance_to) {
            $this-> vocational_period_attendance_to = $vocational_period_attendance_to;
        }

        public function getVocationalHighestLevel() {
            return $this-> vocational_highest_level;
        }

        public function setVocationalHighestLevel($vocational_highest_level) {
            $this-> vocational_highest_level = $vocational_highest_level;
        }

        public function getVocationalYearGraduated() {
            return $this-> vocational_year_graduated;
        }

        public function setVocationalYearGraduated($vocational_year_graduated) {
            $this-> vocational_year_graduated = $vocational_year_graduated;
        }

        public function getVocationalScholarship() {
            return $this-> vocational_scholarship;
        }

        public function setVocationalScholarship($vocational_scholarship) {
            $this-> vocational_scholarship = $vocational_scholarship;
        }

        public function getCollegeSchoolName() {
            return $this-> college_school_name;
        }

        public function setCollegeSchoolName($college_school_name) {
            $this-> college_school_name = $college_school_name;
        }

        public function getCollegeBasicEducation() {
            return $this-> college_basic_education;
        }

        public function setCollegeBasicEducation($college_basic_education) {
            $this-> college_basic_education = $college_basic_education;
        }

        public function getCollegePeriodAttendanceFrom() {
            return $this-> college_period_attendance_from;
        }

        public function setCollegePeriodAttendanceFrom($college_period_attendance_from) {
            $this-> college_period_attendance_from = $college_period_attendance_from;
        }

        public function getCollegePeriodAttendanceTo() {
            return $this-> college_period_attendance_from;
        }

        public function setCollegePeriodAttendanceTo($college_period_attendance_to) {
            $this-> college_period_attendance_to = $college_period_attendance_to;
        }

        public function getCollegeHighestLevel() {
            return $this-> college_highest_level;
        }

        public function setCollegeHighestLevel($college_highest_level) {
            $this-> college_highest_level = $college_highest_level;
        }

        public function getCollegeYearGraduated() {
            return $this-> college_year_graduated;
        }

        public function setCollegeYearGraduated($college_year_graduated) {
            $this-> college_year_graduated = $college_year_graduated;
        }

        public function getCollegeScholarship() {
            return $this-> college_scholarship;
        }

        public function setCollegeScholarship($college_scholarship) {
            $this-> college_scholarship = $college_scholarship;
        }

        public function getGraduateSchoolName() {
            return $this-> graduate_school_name;
        }

        public function setGraduateSchoolName($graduate_school_name) {
            $this-> graduate_school_name = $graduate_school_name;
        }

        public function getGraduateBasicEducation() {
            return $this-> graduate_basic_education;
        }

        public function setGraduateBasicEducation($graduate_basic_education) {
            $this-> graduate_basic_education = $graduate_basic_education;
        }
        
        public function getGraduatePeriodAttendanceFrom() {
            return $this-> graduate_period_attendance_from;
        }

        public function setGraduatePeriodAttendanceFrom($graduate_period_attendance_from) {
            $this-> graduate_period_attendance_from = $graduate_period_attendance_from;
        }

        public function getGraduatePeriodAttendanceTo() {
            return $this-> graduate_period_attendance_to;
        }

        public function setGraduatePeriodAttendanceTo($graduate_period_attendance_to) {
            $this-> graduate_period_attendance_to = $graduate_period_attendance_to;
        }

        public function getGraduateHighestLevel() {
            return $this-> graduate_highest_level;
        }

        public function setGraduateHighestLevel($graduate_highest_level) {
            $this-> graduate_highest_level = $graduate_highest_level;
        }

        public function getGraduateYearGraduated() {
            return $this-> graduate_year_graduated;
        }

        public function setGraduateYearGraduated($graduate_year_graduated) {
            $this-> graduate_year_graduated = $graduate_year_graduated;
        }

        public function getGraduateScholarship() {
            return $this-> graduate_scholarship;
        }

        public function setGraduateScholarship($graduate_scholarship) {
            $this-> graduate_scholarship = $graduate_scholarship;
        }

        public function getCareerService() {
            return $this-> career_service;
        }

        public function setCareerService($career_service) {
            $this-> career_service = $career_service;
        }

        public function getCareerRating() {
            return $this-> career_rating;
        }

        public function setCareerRating($career_rating) {
            $this-> career_rating = $career_rating;
        }

        public function getCareerExaminationDate() {
            return $this-> career_examination_date;
        }

        public function setCareerExaminationDate($career_examination_date) {
            $this-> career_examination_date = $career_examination_date;
        }

        public function getCareerExaminationPlace() {
            return $this-> career_examination_place;
        }

        public function setCareerExaminationPlace($career_examination_place) {
            $this-> career_examination_place = $career_examination_place;
        }

        public function getCareerNumber() {
            return $this-> career_number;
        }

        public function setCareerNumber($career_number) {
            $this-> career_number = $career_number;
        }

        public function getCareerValidityDate() {
            return $this-> career_validity_date;
        }

        public function setCareerValidityDate($career_validity_date) {
            $this-> career_validity_date = $career_validity_date;
        }

        public function getWorkInclusiveDatesFrom() {
            return $this-> work_inclusive_dates_from;
        }

        public function setWorkInclusiveDatesFrom($work_inclusive_dates_from) {
            $this-> work_inclusive_dates_from = $work_inclusive_dates_from;
        }

        public function getWorkInclusiveDatesTo() {
            return $this-> work_inclusive_dates_to;
        }

        public function setWorkInclusiveDatesTo($work_inclusive_dates_to) {
            $this-> work_inclusive_dates_to = $work_inclusive_dates_to;
        }

        public function getWorkPositionTitle() {
            return $this-> work_position_title;
        }

        public function setWorkPositionTitle($work_position_title) {
            $this-> work_position_title = $work_position_title;
        }

        public function getWorkDepartment() {
            return $this-> work_department;
        }

        public function setWorkDepartment($work_department) {
            $this-> work_department = $work_department;
        }
        
        public function getWorkMonthlySalary() {
            return $this-> work_monthly_salary;
        }

        public function setWorkMonthlySalary($work_monthly_salary) {
            $this-> work_monthly_salary = $work_monthly_salary;
        }

        public function getWorkSalary() {
            return $this-> work_salary;
        }

        public function setWorkSalary($work_salary) {
            $this-> work_salary = $work_salary;
        }

        public function getWorkStatusAppointment() {
            return $this-> work_status_appointment;
        }

        public function setWorkStatusAppointment($work_status_appointment) {
            $this-> work_status_appointment = $work_status_appointment;
        }

        public function getWorkGovtService() {
            return $this-> work_govt_service;
        }

        public function setWorkGovtService($work_govt_service) {
            $this-> work_govt_service = $work_govt_service;
        }

        public function getVoluntaryOrganiztionName() {
            return $this-> voluntary_organization_name;
        }

        public function setVoluntaryOrganiztionName($voluntary_organization_name) {
            $this-> voluntary_organization_name = $voluntary_organization_name;
        }

        public function getVoluntaryOrganiztionAddress() {
            return $this-> voluntary_organization_address;
        }

        public function setVoluntaryOrganiztionAddress($voluntary_organization_address) {
            $this-> voluntary_organization_address = $voluntary_organization_address;
        }

        public function getVoluntaryInclusiveDateFrom() {
            return $this-> voluntary_inclusive_date_from;
        }

        public function setVoluntaryInclusiveDateFrom($voluntary_inclusive_date_from) {
            $this-> voluntary_inclusive_date_from = $voluntary_inclusive_date_from;
        }

        public function getVoluntaryInclusiveDateTo() {
            return $this-> voluntary_inclusive_date_to;
        }

        public function setVoluntaryInclusiveDateTo($voluntary_inclusive_date_to) {
            $this-> voluntary_inclusive_date_to = $voluntary_inclusive_date_to;
        }

        public function getVoluntaryNumberHours() {
            return $this-> voluntary_number_hours;
        }

        public function setVoluntaryNumberHours($voluntary_number_hours) {
            $this-> voluntary_number_hours = $voluntary_number_hours;
        }

        public function getVoluntaryPosition() {
            return $this-> voluntary_position;
        }

        public function setVoluntaryPosition($voluntary_position) {
            $this-> voluntary_position = $voluntary_position;
        }

        public function getTrainingProgram() {
            return $this-> training_program;
        }

        public function setTrainingProgram($training_program) {
            $this-> training_program = $training_program;
        }

        public function getTrainingInclusiveDateFrom() {
            return $this-> training_inclusive_date_from;
        }

        public function setTrainingInclusiveDateFrom($training_inclusive_date_from) {
            $this-> training_inclusive_date_from = $training_inclusive_date_from;
        }

        public function getTrainingInclusiveDateTo() {
            return $this-> training_inclusive_date_to;
        }

        public function setTrainingInclusiveDateTo($training_inclusive_date_to) {
            $this-> training_inclusive_date_to = $training_inclusive_date_to;
        }

        public function getTrainingNumberHours() {
            return $this-> training_number_hours;
        }

        public function setTrainingNumberHours($training_number_hours) {
            $this-> training_number_hours = $training_number_hours;
        }

        public function getTrainingLdType() {
            return $this-> training_ld_type;
        }

        public function setTrainingLdType($training_ld_type) {
            $this-> training_ld_type = $training_ld_type;
        }

        public function getTrainingConducted() {
            return $this-> training_conducted;
        }

        public function setTrainingConducted($training_conducted) {
            $this-> training_conducted = $training_conducted;
        }

        public function getSpecialSkills() {
            return $this-> special_skills;
        }

        public function setSpecialSkills($special_skills) {
            $this-> special_skills = $special_skills;
        }
        
        public function getRecognition() {
            return $this-> recognition;
        }

        public function setRecognition($recognition) {
            $this-> recognition = $recognition;
        }

        public function getMembershipAssociation() {
            return $this-> membership_association;
        }

        public function setMembershipAssociation($membership_association) {
            $this-> membership_association = $membership_association;
        }

        public function getQ1a() {
            return $this-> q1a;
        }

        public function setQ1a($q1a) {
            $this-> q1a = $q1a;
        }
        
        public function getQ1b() {
            return $this-> q1b;
        }

        public function setQ1b($q1b) {
            $this-> q1b = $q1b;
        }
        
        public function getQ2a() {
            return $this-> q2a;
        }

        public function setQ2a($q2a) {
            $this-> q2a = $q2a;
        }
        
        public function getQ2b() {
            return $this-> q2b;
        }

        public function setQ2b($q2b) {
            $this-> q2b = $q2b;
        }

        public function getQ3() {
            return $this-> q3;
        }

        public function setQ3($q3) {
            $this-> q3 = $q3;
        }

        public function getQ4() {
            return $this-> q4;
        }

        public function setQ4($q4) {
            $this-> q4 = $q4;
        }

        public function getQ5a() {
            return $this-> q5a;
        }

        public function setQ5a($q5a) {
            $this-> q5a = $q5a;
        }
        
        public function getQ5b() {
            return $this-> q5b;
        }

        public function setQ5b($q5b) {
            $this-> q5b = $q5b;
        }
        
        public function getQ6() {
            return $this-> q6;
        }

        public function setQ6($q6) {
            $this-> q6 = $q6;
        }

        public function getQ7a() {
            return $this-> q7a;
        }

        public function setQ7a($q7a) {
            $this-> q7a = $q7a;
        }

        public function getQ7b() {
            return $this-> q7b;
        }

        public function setQ7b($q7b) {
            $this-> q7b = $q7b;
        }
        
        public function getQ7c() {
            return $this-> q7c;
        }

        public function setQ7c($q7c) {
            $this-> q7c = $q7c;
        }

        public function getReferenceName() {
            return $this-> reference_name;
        }

        public function setReferenceName($reference_name) {
            $this-> reference_name = $reference_name;
        }
        
        public function getReferenceAddress() {
            return $this-> reference_address;
        }

        public function setReferenceAddress($reference_address) {
            $this-> reference_address = $reference_address;
        }

        public function getReferenceContactNumber() {
            return $this-> reference_contact_number;
        }

        public function setReferenceContactNumber($reference_contact_number) {
            $this-> reference_contact_number = $reference_contact_number;
        }
        
        public function getGovernmentIssuedId() {
            return $this-> government_issued_id;
        }

        public function setGovernmentIssuedId($government_issued_id) {
            $this-> government_issued_id = $government_issued_id;
        }

        public function getIdLicensePassportNumber() {
            return $this-> id_license_passport_number;
        }

        public function setIdLicensePassportNumber($id_license_passport_number) {
            $this-> id_license_passport_number = $id_license_passport_number;
        }

        public function getGovernmentDateIssuance() {
            return $this-> government_date_issuance;
        }

        public function setGovernmentDateIssuance($government_date_issuance) {
            $this-> government_date_issuance = $government_date_issuance;
        }

        public function getGovernmentPlaceIssuance() {
            return $this-> government_place_issuance;
        }

        public function setGovernmentPlaceIssuance($government_place_issuance) {
            $this-> government_place_issuance = $government_place_issuance;
        }
       
        public function getOath() {
            return $this-> oath;
        }

        public function setOath($oath) {
            $this-> oath = $oath;
        }
        
    }
    

?>