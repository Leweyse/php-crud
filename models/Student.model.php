<?php

Class Student extends Person
{
    private string $class;
    private string $teacher;

    public function setClass(string $class): void
    {
        $this->class = $class;
    }

    public function setTeacher(string $teacher): void
    {
        $this->teacher = $teacher;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function getTeacher()
    {
        return $this->teacher;
    }
}