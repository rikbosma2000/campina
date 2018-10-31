<?php

// Database credentials.
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'campina');

// Make connection with the database.
$database = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection.
if ($database === false) {
    die('ERROR: Could not connect. ' . $database->connect_error);
}