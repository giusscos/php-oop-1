<?php
class Actor {
    public $name;
    public $age;
    public $gender;

    function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    function get_actor(){
        return 'Nome: ' . $this->name . '; Anni: ' . $this->age . '; Genere: ' . $this->gender . ';';  
    }

    function get_name(){
        return $this->name;
    }
    function get_age(){
        return $this->age;
    }
    function get_gender(){
        return $this->gender;
    }
}