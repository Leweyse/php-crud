<?php
declare(strict_types = 1);

class teacherController
{
    function __construct($data) {
        $this->data = $data;
    }

    public function render(array $GET, array $POST)
    {
        if ($GET['teacher'] === 'add') {
            $classes = $this->data->getColumnValues("c_id", "class");

            require "views/pages/create/createTeacher.php";
        }

        if ($GET['teacher'] === 'delete') {
            $this->data->deleteOne($POST['id'], "teacher");
            header('Location: ?teacher');
        }

        if ($GET['teacher'] === 'update') {
            $this->data->selectOne($POST['id'], "teacher");
            $data = array('id' => $POST['id'], "info" => $this->data->getOne());

            $classes = $this->data->getColumnValues("c_id", "class");

            require "views/pages/edit/editTeacher.php";
        }

        if ($GET['teacher'] === '') {
            if (isset($POST['add'])) {
                $id = $this->data->getColumnLength("teacher") + 1;
                $this->data->insertOne([$id, $POST["name"], $POST["email"], $POST["c_id"]], "teacher");
            }

            if (isset($POST['update'])) {
                $this->data->updateOne($POST['id'], [$POST['name'], $POST['email'], $POST['c_id']], "teacher");
            }

            $this->data->selectAll("teacher");
            $teachers = $this->data->getAll();

            require "views/pages/overview/teacher.php";
        }
    }
}