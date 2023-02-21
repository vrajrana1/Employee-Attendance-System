<?php

class Attendance {
    public $id;
    public $employeeId;
    public $date;
    public $status;
    
    public function __construct($id, $employeeId, $date, $status) {
        $this->id = $id;
        $this->employeeId = $employeeId;
        $this->date = $date;
        $this->status = $status;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getEmployeeId() {
        return $this->employeeId;
    }
    
    public function getDate() {
        return $this->date;
    }
    
    public function getStatus() {
        return $this->status;
    }
}
