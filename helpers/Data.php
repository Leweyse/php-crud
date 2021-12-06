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
        $this->classIn = new classInfo();

        $this->model = [$this->student, $this->teacher, $this->classInfo];
    }

    public function setAll($table, array $content, $modelIdx): void
    {
        $colLength = (int)$this->conn->getColLength($table);

        for ($i = 1; $i <= $colLength; $i++) {
            $this->conn->setData($i, $table, $content, $this->model[$modelIdx]);
        }

        $this->all = $this->conn->getData();
        $this->conn->clearData();
    }

    public function getAll(): array
    {
        return $this->all;
    }
}