<?php

// server info
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'college';

// connect to the database
$mysqli = new mysqli($server, $user, $pass, $db);

if($mysqli->connect_error){
    echo $mysqli->connect_error;
}
echo'db connected';
?>