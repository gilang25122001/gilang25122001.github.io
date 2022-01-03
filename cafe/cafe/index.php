<html>
<head>
<title>LAPORAN DATA NILAI</title>
</head>

<body bgcolor=pink>
<table border="2" width=80% height=500  align="center">
<tr>
<td colspan=8><CENTER><font face="Bahnschrift Condensed" size=32><marquee behavior="alternate">DATA PEMESAN</f></CENTER></I</td>
</tr>
<tr>
<th><center><font face="Bahnschrift Condensed" size=4><b>NO PEMESANAN</font></th>
<th><center><font face="Bahnschrift Condensed" size=4><b>NAMA PELANGGAN</font></th>
<th><center><font face="Bahnschrift Condensed" size=4><b>NO MEJA</font></th>
<th><center><font face="Bahnschrift Condensed" size=4><b>FOOD/DRINK</font></th>
<th><center><font face="Bahnschrift Condensed" size=4><b>JUMLAH</font></th>
<th><center><font face="Bahnschrift Condensed" size=4><b>TOTAL</font></th>
</tr>

<?php
include("config.php");

$query = mysqli_query($koneksi,"select * from pemesanan");
while ($d = mysqli_fetch_array($query)){
	if($d['FOOD/DRINK']!=""){
echo"<td><CENTER>".$d['No_Pemesanan']."</td>";
echo"<td><CENTER>".$d['NAMA_PELANGGAN']."</td>";
echo"<td><CENTER>".$d['NO_MEJA']."</td>";
echo"<td><CENTER>".$d['FOOD/DRINK']."</td>";
echo"<td><CENTER>".$d['JUMLAH']."</td>";
echo"<td><CENTER>Rp.".$d['TOTAL']."</td>";
echo"</tr>";}}; ?>
</table>
</body>
</html>