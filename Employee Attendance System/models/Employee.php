<?php

class Employee {
    public $id;
    public $name;
    public $email;
    public $department;
    
    public function __construct($id, $name, $email, $department) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->department = $department;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function getDepartment() {
        return $this->department;
    }
}
