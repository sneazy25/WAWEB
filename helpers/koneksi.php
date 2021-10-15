<?php

$host = "mysql-54502-0.cloudclusters.net";
$username = "admin";
$password = "RNZgBemA";
$db = "sneazybot";

$koneksi = mysqli_connect($host, $username, $password, $db) or die("GAGAL");

$base_url = "http://localhost/wa-sysdev/";
date_default_timezone_set('Asia/Jakarta');
?>
