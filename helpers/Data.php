<?php

class Data
{
    private array $all;

    private Student $student;
    private Teacher $teacher;
    private ClassInfo $classInfo;

    private array $model;

    public function __construct($conn)
    {
        $this->conn = $conn;
        $this->student = new Student();
        $this->teacher = new Teacher();
        $this->classInfo = new ClassInfo();
    }

    public function setAllStudents(): void
    {
        $colLength = (int)$this->conn->getColLength("student");

        for ($i = 1; $i <= $colLength; $i++) {
            $this->conn->setData($i, "student", ["S_ID", "Name", "Email", "C_ID"], $this->student);
        }

        $this->all = $this->conn->getData();
        $this->conn->clearData();
    }

    public function getAllStudents(): array
    {
        return $this->all;
    }
}