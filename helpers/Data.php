<?php

class Data
{

    private array $allStudents;

    private Student $student;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function setAllStudents(): void
    {
        // $colLength = (int)$this->conn->getColLength("student");

        // for ($i = 1; $i <= $colLength; $i++) {
        //     $this->conn->setData($i, "student", ["name", "email", "class", "teacher"], $this->student);
        // }

        // $this->allStudents = $this->conn->getData();
        // $this->conn->clearData();
    }

    public function getAllStudents(): array
    {
        return $this->allStudents;
    }
}