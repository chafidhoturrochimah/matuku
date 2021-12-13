<?php

$host = '172.20.0.2';
$user = 'muhardian';
$password = 'kopi';
$db = 'matuku';


$koneksi = mysqli_connect($host, $user, $password, $db) or die("<b>Gagal Konek: </b>".mysqli_error($koneksi));

?>