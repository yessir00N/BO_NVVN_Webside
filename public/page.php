<?php

require_once('../source/config.php');

$conn = new mysqli("db1", DB_USER, DB_PASSWORD, "voorbeeld_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}