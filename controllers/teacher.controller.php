<?php
declare(strict_types = 1);

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
                // $id = $this->data->getColumnLength("teacher");
                // $this->data->insertOne([$id,$POST["name"],$POST["email"],$POST["c_id"]], "teacher");
            }

            require "views/pages/createTeacher.php";
        }

        if ($GET === 'remove') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $POST["name"];
                $POST["email"];
                $POST["c_id"];
            }

            // Diplay page: If it's necessary
        }

        if ($GET['teacher'] === 'update') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $POST["name"];
                $POST["email"];
                $POST["c_id"];
            }

            require "views/pages/editTeacher.php";
        }

        require "views/pages/teacher.php";
    }
}