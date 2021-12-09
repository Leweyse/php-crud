<?php
declare(strict_types = 1);

class studentController
{
    function __construct($data) {
        $this->data = $data;
    }
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        if ($GET["student"] === 'add') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
               $id= $POST["id"];
               $name= $POST["name"];
               $email= $POST["email"];
               $c_id=$POST["c_id"];
        }
    }

        if ($GET === 'remove') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $POST["studentName"];
                $POST["email"];
                $POST["class"];
                $POST["teacher"];
            }
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