<?php
$server = "localhost";
$user = "root";
$pass = ""; // Di Laragon defaultnya kosong
$database = "db_almadani"; // Pastikan nama DB di HeidiSQL/phpMyAdmin sama dengan ini

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
?>