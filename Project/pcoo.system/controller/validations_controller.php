<?php
    class validations_controller {

        public function is_valid_email($email) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
                return false;
            }

        }
    }


?>