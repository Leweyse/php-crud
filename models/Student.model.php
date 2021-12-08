<?php

Class Student
{
    private $id;
    private $name;
    private $email;
    private $c_id;

    public function setStudentId($id): void
    {
        $this->id = $id;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function setClassId($c_id): void
    {
        $this->c_id = $c_id;
    }

    public function getStudentId()
    {
        return $this->id;
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
        return $this->c_id;
    }
}