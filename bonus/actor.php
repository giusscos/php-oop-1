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
}