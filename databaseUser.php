<?php

$host = "localhost";
$dbname = "abs_login_db";
$username = "root";
$password = "admin";

$mysqli = new mysqli($host, $username, $password, $dbname);
                    
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;