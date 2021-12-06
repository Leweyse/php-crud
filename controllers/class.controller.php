<?php
declare(strict_types = 1);

whatIsHappening();

class classController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        if ($GET === 'add') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $POST["className"];
                $POST["email"];
                $POST["class"];
                $POST["teacher"];
            }
        }

        if ($GET === 'remove') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $POST["className"];
                $POST["email"];
                $POST["class"];
                $POST["teacher"];
            }
        }

        if ($GET === 'update') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $POST["className"];
                $POST["email"];
                $POST["class"];
                $POST["teacher"];
            }
        }

        require "views/components/class.component.php";
    }
}