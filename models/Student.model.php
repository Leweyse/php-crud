<?php

Class Student
{
    private $student_id;
    private $name;
    private $email;
    private $class_id;

    public function setStudentId($student_id): void
    {
        $this->student_id = $student_id;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function setClassId($class_id): void
    {
        $this->class_id = $class_id;
    }

    public function getStudentId()
    {
        return $this->student_id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getClassId()
    {
        return $this->class_id;
    }
}