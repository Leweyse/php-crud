<?php
require "models/abstracts/Person.model.php";

require "models/Class.model.php";
require "models/Teacher.model.php";
require "models/Student.model.php";

require "helpers/Connection.php";
require 'helpers/DotEnv.php';
require "helpers/Data.php";

// session_start();

$env = new DotEnv(__DIR__ . '/.env');
$env -> load();

$password = getenv('PASSWORD');
$username = getenv('USERNAME');
$database = getenv('DATABASE');
$hostname = getenv('HOSTNAME');

// $conn = new Connection($hostname, $username, $password, $database);
// $data = new Data($conn);

// require "controllers/";
// require "views/";
?>