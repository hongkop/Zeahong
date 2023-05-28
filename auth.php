<?php 

$dbhost = 'localhost';
$dbuser = 'id18635834_user';
$dbpass = ']Cqe<%H+IV835[{k';
$db = 'id18635834_name';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($conn); 

date_default_timezone_set('Asia/Taipei');

if (mysqli_connect_error()){
	echo "Koneksi database gagal :". mysqli_connect_error();
}

?>