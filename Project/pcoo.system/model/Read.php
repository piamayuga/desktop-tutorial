<?php
    class Read {
        private $surname;
        private $first_name;
        private $middle_name;
        private $suffix_name;

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
         
    }
    

?>>