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

        if ($GET === 'update') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $POST["studentName"];
                $POST["email"];
                $POST["class"];
                $POST["teacher"];
            }
        }

        require "views/createComponents/student.component.php";
    }
}