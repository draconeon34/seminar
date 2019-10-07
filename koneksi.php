<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'data_nilai';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if ( $conn->connect_error)
{
	die( 'koneksi error : '.$koneksi->connect_error);
}
?>