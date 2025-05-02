<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'u263749830_tmp_master';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>