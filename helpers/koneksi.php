<?php

$host = "mysql-54502-0.cloudclusters.net";
$username = "admin";
$password = "RNZgBemA";
$db = "vinaja";

$koneksi = mysqli_connect($host, $username, $password, $db) or die("GAGAL");

$base_url = "http://wa-web-sneazy.herokuapp.com/";
date_default_timezone_set('Asia/Jakarta');
?>
