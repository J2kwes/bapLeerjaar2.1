<?php

class  Person{

    public $firstname;
    public $middlename;
    public $lastname;

    public function __construct($firstname, $lastname){

    }

    public function getFullName(){
        return $this->firstname . ' ' . $this->lastname;
}

};
