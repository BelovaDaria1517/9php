<?php

namespace qwer;

class PasswordValidator
{
    public static function validate(string $password): bool
    {
    
    if (strlen($password) < 8) {
        return false;
    }
    
   
    if (!preg_match('/[0-9]/', $password)) {
        return false;
    }
    
    
    if (str_contains($password, ' ')) {
        return false;
    }
    
    
    if (!preg_match('/[A-ZА-Я]/u', $password)) {
        return false;
    }
    
    return true;
    }

}