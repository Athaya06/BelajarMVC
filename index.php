<?php

require_once 'model.php';

// Controller logic
$studentDB = new StudentDatabase();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $roll_number = $_POST["roll_number"];
    $email = $_POST["email"];
    $studentDB->addStudent($name, $roll_number, $email);
}

// Retrieve all students from Model
$students = $studentDB->getAllStudents();

// Load View
include 'view.php';

?>
