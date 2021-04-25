<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'hotelvictoria';

$conn = new mysqli($server, $username, $password, $db);
if ($conn->connect_error) {
    die('Koneksi Database gagal :' . $conn->connect_error);
}
?>