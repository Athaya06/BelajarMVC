<?php

class Student {
    private $name;
    private $roll_number;
    private $email;

    public function __construct($name, $roll_number, $email) {
        $this->name = $name;
        $this->roll_number = $roll_number;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getRollNumber() {
        return $this->roll_number;
    }

    public function getEmail() {
        return $this->email;
    }
}

class StudentDatabase {
    private $students = [];

    public function addStudent($name, $roll_number, $email) {
        $student = new Student($name, $roll_number, $email);
        $this->students[] = $student;
    }

    public function getAllStudents() {
        return $this->students;
    }
}

?>
