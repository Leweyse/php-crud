<?php
declare(strict_types = 1);


class classController
{
    function __construct($data) {
        $this->data = $data;
      }
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        if ($GET['class'] === 'add') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $id = $this->data->getColumnLength("class");
                // $id= $POST["id"];
                $name= $POST["name"];
                $location= $POST["location"];
                 $c_id=$POST["c_id"]; 
                $this->data->insertOne([$id, $POST["name"], $POST["location"], $POST["c_id"]], "class");
            }

            require "views/pages/create/createClass.php";
        }

        if ($GET['class'] === 'remove') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $id= $POST["id"];
                $name= $POST["name"];
                $location= $POST["email"];
                 $c_id=$POST["c_id"];
                 $this->data->deleteOne($c_id, "class");
                 header('location: views/pages/overview/class.php');

                // $POST["id"];
            }

            // Diplay page: If it's necessary
        }

        if ($GET['class'] === 'update') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
               
                $name= $POST["name"];
                $location= $POST["location"];
                 $c_id=$POST["c_id"];
                 $this->data->updateOne($id,[$id,$name, $location,$c_id ],"class");
                 header('location: views/pages/overview/class.php');

            }

            require "views/pages/edit/editClass.php";
        }
        if ($GET['class'] === '') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
               
                $name= $POST["name"];
                $location= $POST["location"];
                 $c_id=$POST["c_id"];
                 $this->data->selectAll("class");
            }

            require "views/pages/overview/class.php";
        }
    }
}

