<?php
include("senja.php");
$A = $_POST ['name'];
$B = $_POST ['n'];
$C = $_POST ['makan'];
$D = $_POST ['makan2'];
$E = $_POST ['makan3'];
$F = $_POST ['minum1'];
$G = $_POST ['minum2'];
$H = $_POST ['minum3'];
$I = $_POST ['jmlh'];
$J = $_POST ['jmlh2'];
$K = $_POST ['jmlh3'];
$L = $_POST ['jmlh4'];
$M = $_POST ['jmlh5'];
$N = $_POST ['jmlh6'];

if ($C=="BURGER")$px1=25000;
elseif ($C=="PANCAKE")$px1=45000;
elseif ($C=="TAKOYAKI")$px1=20000;
elseif ($C=="MARTABAK")$px1=35000;
elseif ($C=="SPAGHETTI") $px1=50000;
elseif ($C=="SUSHI") $px1=75000;
else $px1=0;
$t1= $I * $px1;

if ($D=="BURGER")$px2=25000;
elseif ($D=="PANCAKE")$px2=45000;
elseif ($D=="TAKOYAKI")$px2=20000;
elseif ($D=="MARTABAK")$px2=35000;
elseif ($D=="SPAGHETTI") $px2=50000;
elseif ($D=="SUSHI") $px2=75000;
else $px2=0;
$t2=$J*$px2;

if ($E=="BURGER")$px2=25000;
elseif ($E=="PANCAKE")$px2=45000;
elseif ($E=="TAKOYAKI")$px2=20000;
elseif ($E=="MARTABAK")$px2=35000;
elseif ($E=="SPAGHETTI") $px2=50000;
elseif ($E=="SUSHI") $px2=75000;
else $px3=0;
$t3=$K*$px3;

if ($F=="MOCHACHINO")$px4=10000;
elseif ($F=="MATCHA TEA")$px4=7000;
elseif ($F=="COFFEE ICE")$px4=15000;
elseif ($F=="TEA ICE") $px4=5000;
elseif ($F=="AVOCADO ICE") $px4=15000;
elseif ($F=="LEMON TEA ICE") $px4=8000;
else $px4=0;
$t4=$L*$px4;

if ($G=="MOCHACHINO")$px5=10000;
elseif ($G=="MATCHA TEA")$px5=7000;
elseif ($G=="COFFEE ICE")$px5=15000;
elseif ($G=="TEA ICE") $px5=5000;
elseif ($G=="AVOCADO ICE") $px5=15000;
elseif ($G=="LEMON TEA ICE") $px5=8000;
else $px5=0;
$t5=$M*$px5;

if ($H=="MOCHACHINO")$px6=10000;
elseif ($H=="MATCHA TEA")$px6=7000;
elseif ($H=="COFFEE ICE")$px6=15000;
elseif ($H=="TEA ICE") $px6=5000;
elseif ($H=="AVOCADO ICE") $px6=15000;
elseif ($H=="LEMON TEA ICE") $px6=8000;
else $px6=0;
$t6=$N*$px6;


if ($C!="pilih"){

$query="INSERT INTO pemesanan (NAMA_PELANGGAN,NO_MEJA,FOOD/DRINK,JUMLAH,TOTAL) VALUES(('$A','$B','$C','$I','$T1'));";
$result=$koneksi->query($query);
};

if ($D!="pilih"){

$query="INSERT INTO pemesanan (NAMA_PELANGGAN,NO_MEJA,FOOD/DRINK,JUMLAH,TOTAL) VALUES(('$A','$B','$D','$J','$T2'));";
$result=$koneksi->query($query);
};

if ($E!="pilih"){

$query="INSERT INTO pemesanan (NAMA_PELANGGAN,NO_MEJA,FOOD/DRINK,JUMLAH,TOTAL) VALUES(('$A','$B','$E','$K','$T3'));";
$result=$koneksi->query($query);
};

if ($F!="pilih"){

$query="INSERT INTO pemesanan (NAMA_PELANGGAN,NO_MEJA,FOOD/DRINK,JUMLAH,TOTAL) VALUES(('$A','$B','$F','$L','$T4'));";
$result=$koneksi->query($query);
};

if ($G!="pilih"){

$query="INSERT INTO pemesanan (NAMA_PELANGGAN,NO_MEJA,FOOD/DRINK,JUMLAH,TOTAL) VALUES(('$A','$B','$G','$M','$T5'));";
$result=$koneksi->query($query);
};

if ($H!="pilih"){

$query="INSERT INTO pemesanan (NAMA_PELANGGAN,NO_MEJA,FOOD/DRINK,JUMLAH,TOTAL) VALUES(('$A','$B','$H','$N','$T6'));";
$result=$koneksi->query($query);
};


if ($C!="pilih"){
echo"<script>alert('$A Sudah Dipesan');window.location='index.html';</script>";}
elseif ($D!="pilih"){
echo"<script>alert('$A Sudah Dipesan');window.location='index.html';</script>";}
elseif ($E!="pilih"){
echo"<script>alert('$A Sudah Dipesan');window.location='index.html';</script>";}
elseif ($F!="pilih"){
echo"<script>alert('$A Sudah Dipesan');window.location='index.html';</script>";}
elseif ($G!="pilih"){
echo"<script>alert('$A Sudah Dipesan');window.location='index.html';</script>";}
elseif ($H!="pilih"){
echo"<script>alert('$A Sudah Dipesan');window.location='index.html;';</script>";}
else {
		echo"<script>alert('$A Sudah Tersimpan');window.location='index.html';</script>";};


	$result->close();
	$koneksi->close();



?>






















?>