<?php

//DB (phpcart) details
//Connecting and selecting a database
//(In this case "phpcart")

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'chiranjeeb2410';
$dbName = 'phpcart';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}