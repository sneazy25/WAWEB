<?php

$host = "sql6.freemysqlhosting.net";
$username = "sql6444597";
$password = "7arJBAczbd";
$db = "sql6444597";

$koneksi = mysqli_connect($host, $username, $password, $db) or die("GAGAL");

$base_url = "http://wa-web-sneazy.herokuapp.com/";
date_default_timezone_set('Asia/Jakarta');
?>
