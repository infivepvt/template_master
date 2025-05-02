<?php
$host = 'localhost';
$user = 'u263749830_tmpmaster';
$password = '2Iw0ic#E>w';
$database = 'u263749830_template';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>