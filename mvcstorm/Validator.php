<?php

class Validator{
    public function confirmPassword($pass,$cPass) : bool{
        return $pass === $cPass;
    }

    public function checkIsEmailValid($email){
        return filter_var($email,FILTER_VALIDATE_EMAIL);
    }

    public function isEmailUsed($email){
        global $db;
        $result = $db->query("select * from users where email = :email",[
            'email' => $email
        ])->fetch(PDO::FETCH_ASSOC);
        return $result !== false;
    }
    public function requiredParams($params){
        foreach($params as $param){
            if(empty($_POST[$param]))
                return false;
        }
        return true;
    }
}