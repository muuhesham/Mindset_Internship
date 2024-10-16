<?php

class Validation {
    
    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    
    public static function validatePassword($password) {
        # not compelte validation #
        if (strlen($password) < 8) {
            return false;
        }
        return true;
    }
}