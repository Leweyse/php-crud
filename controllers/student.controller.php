<?php
declare(strict_types = 1);

class studentController
{
    function __construct($data) {
        $this->data = $data;
    }

    public function render(array $GET, array $POST)
    {
        if ($GET["student"] === 'add') {
            $classes = $this->data->getColumnValues("c_id", "class");
            require "views/pages/create/createStudent.php";
        }

        if ($GET['student'] === 'delete') {
            $this->data->deleteOne($POST['id'], "student");

            $ids = $this->data->getColumnValues("id", "student");
            $names = $this->data->getColumnValues("name", "student");
            $emails = $this->data->getColumnValues("email", "student");
            $c_id = $this->data->getColumnValues("c_id", "student");

            $newIds=[];

            for ($i=1; $i <= count($ids); $i++) {
                array_push($newIds, $i);
            }

            foreach ($ids as $key => $value) {
                $this->data->updateId($value, [$newIds[$key], $names[$key], $emails[$key], $c_id[$key]], "student");
            }

            header('Location: ?student');
        }

        if ($GET['student'] === 'update') {
            $this->data->selectOne($POST['id'], "student");
            $data = array('id' => $POST['id'], "info" => $this->data->getOne());
            $classes = $this->data->getColumnValues("c_id", "class");

            require "views/pages/edit/editStudent.php";
        }
        
        if ($GET['student'] === '') {
            if (isset($POST['add'])) {
                $id = $this->data->getColumnLength("student") + 1;
                $this->data->insertOne([$id, $POST["name"], $POST["email"], $POST["c_id"]], "student");
            }

            if (isset($POST['update'])) {
                $this->data->updateOne($POST['id'], [$POST['name'], $POST['email'], $POST['c_id']], "student");
            }

            if (isset($POST['delete'])) {
                var_dump($POST);
            }

            $this->data->selectAll("student");
            $student = $this->data->getAll();

            require "views/pages/overview/student.php";
        }
    }
}