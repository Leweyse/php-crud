<?php

Class Teacher extends Person
{
    private string $listStudents;

    public function setListStudents(string $listStudents): void
    {
        $this->listStudents = $listStudents;
    }

    public function getListStudents()
    {
        return $this->listStudents;
    }
}