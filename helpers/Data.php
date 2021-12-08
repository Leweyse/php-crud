<?php

class Data
{
    private array $all;
    private array $one;

    private Student $student;
    private Teacher $teacher;
    private ClassInfo $classInfo;

    private $model;

    public function __construct($conn)
    {
        $this->conn = $conn;
        $this->student = new Student();
        $this->teacher = new Teacher();
        $this->classInfo = new ClassInfo();

        $this->model = (object) array(
            'student' => (object) array(
                "columns" => ["id", "name", "email", "c_id"],
                "class" => $this->student
            ),
            'teacher' => (object) array(
                "columns" => ["id", "name", "email", "c_id"],
                "class" => $this->teacher
            ),
            'class' => (object) array(
                "columns" => ["id", "name", "location", "c_id"],
                "class" => $this->classInfo
            )
        );
    }

    public function selectOne($i, $table): void
    {
        $this->conn->selectData($i, $table, $this->model->{$table}->{"columns"}, $this->model->{$table}->{"class"});
        $this->one = $this->conn->getData();
        $this->conn->clearData();
    }

    public function selectAll($table): void
    {
        $colLength = (int)$this->conn->getColLength($table);

        for ($i = 1; $i <= $colLength; $i++) {
            $this->conn->selectData($i, $table, $this->model->{$table}->{"columns"}, $this->model->{$table}->{"class"});
        }

        $this->all = $this->conn->getData();
        $this->conn->clearData();
    }

    public function insertOne($values, $table): void
    {
        $this->conn->insertData($values, $table, $this->model->{$table}->{"columns"}, $this->model->{$table}->{"class"});
    }

    public function updateOne($id, $values, $table): void
    {
        $this->conn->updateData($id, $values, $table, $this->model->{$table}->{"columns"}, $this->model->{$table}->{"class"});
    }

    public function deleteOne($id, $table): void
    {
        $this->conn->deleteData($id, $table, $this->model->{$table}->{"columns"}, $this->model->{$table}->{"class"});
    }

    public function getColumnLength($table)
    {
        return $this->conn->getColLength($table);
    }

    public function getOne(): array
    {
        return $this->one;
    }

    public function getAll(): array
    {
        return $this->all;
    }

    public function getStudent(): Student
    {
        return $this->student;
    }

    public function getTeacher(): Teacher
    {
        return $this->teacher;
    }

    public function getClass(): ClassInfo
    {
        return $this->classInfo;
    }
}