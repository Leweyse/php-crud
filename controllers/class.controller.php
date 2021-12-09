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
            require "views/pages/create/createClass.php";
        }

        if ($GET['class'] === 'delete') {
            $this->data->deleteOne($POST['id'], "class");

            $ids = $this->data->getColumnValues("id", "class");
            $names = $this->data->getColumnValues("name", "class");
            $locations = $this->data->getColumnValues("location", "class");
            $c_id = $this->data->getColumnValues("c_id", "class");

            $newIds=[];

            for ($i=1; $i <= count($ids); $i++) {
                array_push($newIds, $i);
            }

            foreach ($ids as $key => $value) {
                $this->data->updateId($value, [$newIds[$key], $names[$key], $locations[$key], $c_id[$key]], "class");
            }

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
            asort($classes);

            require "views/pages/overview/class.php";
        }
    }
}