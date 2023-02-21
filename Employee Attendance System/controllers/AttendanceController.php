<?php

require_once '../models/Attendance.php';


class AttendanceController {
    public $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    public function createAttendance($employeeId, $date, $status) {
        $stmt = $this->pdo->prepare("INSERT INTO attendance (employee_id, date, status) VALUES (?, ?, ?)");
        $stmt->execute([$employeeId, $date, $status]);
    }
    
    public function readAttendance($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM attendance WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return new Attendance($row['id'], $row['employee_id'], $row['date'], $row['status']);
    }
    
    public function updateAttendance($id, $employeeId, $date, $status) {
        $stmt = $this->pdo->prepare("UPDATE attendance SET employee_id = ?, date = ?, status = ? WHERE id = ?");
        $stmt->execute([$employeeId, $date, $status, $id]);
    }
    
    public function deleteAttendance($id) {
        $stmt = $this->pdo->prepare("DELETE FROM attendance WHERE id = ?");
        $stmt->execute([$id]);
    }
    
    public function getAllAttendance() {
        $stmt = $this->pdo->query("SELECT * FROM attendance");
        $attendance = array();
        while ($row = $stmt->fetch()) {
            $attendance[] = new Attendance($row['id'], $row['employee_id'], $row['date'], $row['status']);
        }
        return $attendance;
    }
}
