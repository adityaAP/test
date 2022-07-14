<?php
session_start();
$hostname = "localhost";
$database = "tcm";
$username = "root";
$password = "mysql";

$kon = mysqli_connect($hostname, $username, $password, $database);

if (!$kon) {
	die("Koneksi Tidak Berhasil: " . mysqli_connect_errno());
}