<?php
require "models/abstracts/Person.model.php";

require "models/Class.model.php";
require "models/Teacher.model.php";
require "models/Student.model.php";

require "helpers/Connection.php";
require 'helpers/DotEnv.php';
require "helpers/Data.php";

session_start();

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

$env = new DotEnv(__DIR__ . '/.env');
$env -> load();

$password = getenv('PASSWORD');
$username = getenv('USERNAME');
$database = getenv('DATABASE');
$hostname = getenv('HOSTNAME');

$conn = new Connection($hostname, $username, $password, $database);
$data = new Data($conn);

// $data->selectOne(1, "class");
// var_dump($data->getOne());

// $data->selectAll("class");
// var_dump($data->getAll());

// $data->insertOne(["9","Lucas", "aaa@aaa.com", "101"], "student");
// $data->updateOne(3, ["3","Lucas", "aaa@aaa.com", "201"], "student");
// $data->deleteOne(2, "student");

require "views/public.php";

require "controllers/student.controller.php";
require "controllers/teacher.controller.php";
require "controllers/class.controller.php";

if (isset($_GET['student'])) {
    $controller = new studentController($data);
}

if (isset($_GET['teacher'])) {
    $controller = new teacherController($data);
}

if (isset($_GET['class'])) {
    $controller = new classController();
}

$controller->render($_GET, $_POST);