<?php

define ('BASEURL', 'http://localhost/itdev-tugas/');

define("ROOT", dirname(dirname(__DIR__)));
define("VIEWS", ROOT . "/views/");
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'itdev');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
