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

            $ids = $this->data->getColumnValues("id", "teacher");
            $names = $this->data->getColumnValues("name", "teacher");
            $emails = $this->data->getColumnValues("email", "teacher");
            $c_id = $this->data->getColumnValues("c_id", "teacher");

            $newIds=[];

            for ($i=1; $i <= count($ids); $i++) {
                array_push($newIds, $i);
            }

            foreach ($ids as $key => $value) {
                $this->data->updateId($value, [$newIds[$key], $names[$key], $emails[$key], $c_id[$key]], "teacher");
            }

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