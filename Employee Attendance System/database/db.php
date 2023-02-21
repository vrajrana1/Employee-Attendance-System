<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'employee attendence system');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

try {
    $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Error connecting to database: " . $e->getMessage());
}
