<?php
require_once '../models/Employee.php';

class EmployeeController {
    public $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    public function createEmployee($name, $email, $department) {
        $stmt = $this->pdo->prepare("INSERT INTO employees (name, email, department) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $department]);
    }
    
    public function readEmployee($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM employees WHERE id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return new Employee($row['id'], $row['name'], $row['email'], $row['department']);
    }
    
    public function updateEmployee($id, $name, $email, $department) {
        $stmt = $this->pdo->prepare("UPDATE employees SET name = ?, email = ?, department = ? WHERE id = ?");
        $stmt->execute([$name, $email, $department, $id]);
    }
    
    public function deleteEmployee($id) {
        $stmt = $this->pdo->prepare("DELETE FROM employees WHERE id = ?");
        $stmt->execute([$id]);
    }
    
    public function getAllEmployees() {
        $stmt = $this->pdo->query("SELECT * FROM employees");
        $employees = array();
        while ($row = $stmt->fetch()) {
            $employees[] = new Employee($row['id'], $row['name'], $row['email'], $row['department']);
        }
        return $employees;
    }
}
