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
        private $residential_address;
        private $residential_street;
        private $residential_subdivision;
        private $residential_barangay;
        private $residential_city;
        private $residential_province;
        private $residential_zip_code;

        // Permanent Address
        private $permanent_address;
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


        // Reading the inputs in pds_controller
        public function pds_construct ($surname, $first_name, $middle_name, $suffix_name) {
            $this-> surname = $surname;
            $this-> first_name = $first_name;
            $this-> middle_name = $middle_name;
            $this-> suffix_name = $suffix_name;

        }

        public function getSurname() {
            return $this-> surname;
        }

        public function setSurname($surname) {
            $this->surname = $surname
        }

        public function getFirstName() {
            return $this-> first_name;
        }

        public function setFirstName($first_name) {
            $this->first_name = $first_name
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
            return $this-> birth_date;
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
        
        public function getResidentialAddress() {
            return $this-> residential_address;
        }

        public function setResidentialAddress($residential_address) {
            $this-> residential_address = $residential_address;
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
        
        public function getPermanentAddress() {
            return $this-> permanent_address;
        }

        public function setPermanentAddress($permanent_address) {
            $this-> permanent_address = $permanent_address;
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

        public function setPermanentSubdivision($permanent_barangay) {
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

        

        

        
        
        
        
        

    

?>