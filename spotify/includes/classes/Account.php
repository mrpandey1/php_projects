<?php
class Account {
    private $errorArray;
    public function __construct(){
        $this->errorArray=array();
    }
    public function register($un,$fn,$ln,$em,$wm2,$pw,$pw2){
        $this->validateUsername($un);
        $this->validateFirstName($fn);
        $this->validateLastName($ln);
        $this->validateEmails($em,$em);
        $this->validatePasswords($pw,$pw2);
    }
    private function validateUsername($un){
        if (strlen($un)>25 || strlen($un)<5){
            array_push($this->errorArray,'Your username must be greater than 5 and smaller than 25 characters');
            return;
        }
        //todo: check if username already exists
    }
    private function validateFirstName($fn){
        if (strlen($fn)>25 || strlen($fn)<2){
            array_push($this->errorArray,'Your firstname must be greater than 2 and smaller than 25 characters');
            return;
        }
    }
    private function validateLastName($ln){
        if (strlen($ln)>25 || strlen($ln)<2){
            array_push($this->errorArray,'Your lastname must be greater than 2 and smaller than 25 characters');
            return;
        }
    }
    private function validateEmails($em,$em2){
        if($em != $em2){
            array_push($this->errorArray,"Emails don't match");
            return;
        }
        if(!filter_var($em,FILTER_VALIDATE_EMAIL)){
            array_push($this->errorArray,"Emails is invalid");
            return ;
        }
        //todo :email already exists
    }
    private function validatePasswords($pw,$pw2){
        if($pw != $pw2){
            array_push($this->errorArray,"Passwords don't match");
            return;
        }
        if(preg_match('/[^A-Za-z0-9]/',$pw)){
            array_push($this->errorArray,"Passwords can only contain numbers an letters");
            return;
        }
        if(strlen($pw)>30 || strlen($pw)<0){
            array_push($this->errorArray,"Password must be between 5 and 30 characters");
            return;
        }
    }
}
?>