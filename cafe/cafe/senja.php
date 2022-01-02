<?php
$servername= "localhost";
$Username= "root" ;
$Password = ""; 
$dbname= "cafe";

$koneksi = mysqli_connect($servername,$Username,$Password,$dbname);
if(!$koneksi) {
die
("connection Failed:".mysqli_connect_error());
}

?>