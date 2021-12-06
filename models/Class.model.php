<?php

Class ClassInfo
{
    private string $name;
    private string $location;
    private string $teacher;
    private string $listStudents;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    public function setTeacher(string $teacher): void
    {
        $this->teacher = $teacher;
    }

    public function setListStudents(string $listStudents): void
    {
        $this->listStudents = $listStudents;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getTeacher()
    {
        return $this->teacher;
    }

    public function getListStudents()
    {
        return $this->listStudents;
    }
}