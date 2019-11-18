<?php
$base_url = "http://localhost/mediatamaweb/pinzy/admin/";
date_default_timezone_set('Asia/Jakarta');
$server = "localhost";
$user = "root";
$password = "";
$database = "db_bibit";

$kon = mysqli_connect($server, $user, $password, $database) or die (mysqli_connect_error());
?>
