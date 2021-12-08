<?php

Class ClassInfo
{
    private $id;
    private $name;
    private $location;
    private $class_id;

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setLocation($location): void
    {
        $this->location = $location;
    }

    public function setClassId($class_id): void
    {
        $this->class_id = $class_id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getClassId()
    {
        return $this->class_id;
    }
}