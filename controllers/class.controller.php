<?php
declare(strict_types = 1);


class classController
{
    function __construct($data) {
        $this->data = $data;
      }
    public function render(array $GET, array $POST)
    {
        if ($GET['class'] === 'add') {
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $id = $this->data->getColumnLength("class");
                $name= $POST["name"];
                $location= $POST["location"];
                 $c_id=$POST["c_id"]; 
                $this->data->insertOne([$id, $POST["name"], $POST["location"], $POST["c_id"]], "class");
            }

            require "views/pages/create/createClass.php";
        }

        if ($GET['class'] === 'delete') {
            $this->data->deleteOne($POST['id'], "class");
            header('Location: ?class');

            }

        

        if ($GET['class'] === 'update') {
               

            $this->data->selectOne($POST['id'], "class");
            $data = array('id' => $POST['id'], "info" => $this->data->getOne());

            $classes = $this->data->getColumnValues("id", "class");

            require "views/pages/edit/editClass.php";
            }

            
        
        if ($GET['class'] === '') {
            
            if (isset($POST['add'])) {
                $id = $this->data->getColumnLength("class") + 1;
                $this->data->insertOne([$id, $POST["name"], $POST["location"], $POST["c_id"]], "class");
            }

            if (isset($POST['update'])) {
                $this->data->updateOne($POST['id'], [$POST['name'], $POST['location'], $POST['c_id']], "class");
            }

            $this->data->selectAll("class");
            $classes = $this->data->getAll();

            require "views/pages/overview/class.php";
        }
    }
}

