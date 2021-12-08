<?php
declare(strict_types = 1);

require "views/public.php";

class teacherController
{
    function __construct($data) {
        $this->data = $data;
    }

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        if ($GET['teacher'] === 'add') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $id = $this->data->getColumnLength("teacher");
                $this->data->insertOne([$id, $POST["name"], $POST["email"], $POST["c_id"]], "teacher");
            }

            require "views/pages/create/createTeacher.php";
        }

        if ($GET['teacher'] === 'remove') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                // $POST["id"];
            }

            // Diplay page: If it's necessary
        }

        if ($GET['teacher'] === 'update') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $this->data->selectOne($POST["id"], "teacher");
            }

            require "views/pages/edit/editTeacher.php";
        }

        if ($GET['teacher'] === '') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                // $POST["name"];
                // $POST["email"];
                // $POST["c_id"];
            }

            require "views/pages/overview/teacher.php";
        }
    }
}