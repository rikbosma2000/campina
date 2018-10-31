<?php

require ('Database.php');

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'campina');

$database = new Database(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
$connection = $database->getConnection();