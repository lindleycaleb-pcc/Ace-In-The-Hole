<?php

$servername = "localhost:3306";
$username = "lindleyc_aith";
$password = "k^=l-{-n3{OF";
$dbname = "lindleyc_aith_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
