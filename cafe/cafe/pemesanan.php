<html>
<head>
<title>=DATA KALKULATOR=</title>
</head>
<style type="text/css">

body{
			background-image:url(b3.jpg);
			background-size:cover;
			background-attachment: fixed;
		}
		</STYLE>
<body bgcolor=yellow>
<form action="sc_pesan.php" method="POST">
<center>
<table border=1 border color=green background=a1.jpg width=80% height=450>

<tr bgcolor=pink>
<td COLSPAN=3><CENTER><font face="Bahnschrift Condensed" size=32><marquee behavior="alternate">FORM PEMESANAN</f></CENTER></td>
</tr>


<tr>
<td><font face="Bahnschrift Light" size=5>NAMA PELANGGAN</td>
<td><center><font face="Bahnschrift Light" size=5>:</td>
<td><input type=text name=name style= "width:400px; font-family:Berlin Sans FB; font-size:25">
</tr>

<tr>
<td><font face="Bahnschrift Light" size=5>NO MEJA</td>
<td><center><font face="Bahnschrift Light" size=5>:</td>
<td><input type=radio  value="01" name=n><font face="Bahnschrift Light" size=5>01
<input type=radio  value="02" name="n"><font face="Bahnschrift Light" size=5>02
<input type=radio  value="03" name="n"><font face="Bahnschrift Light" size=5>03
<input type=radio  value="04" name="n"><font face="Bahnschrift Light" size=5>04
<input type=radio  value="05" name="n"><font face="Bahnschrift Light" size=5>05
<input type=radio  value="06" name="n"><font face="Bahnschrift Light" size=5>06
<input type=radio  value="07" name="n"><font face="Bahnschrift Light" size=5>07
<input type=radio  value="08" name="n"><font face="Bahnschrift Light" size=5>08
<input type=radio  value="09" name="n"><font face="Bahnschrift Light" size=5>09
<input type=radio  value="10" name="n"><font face="Bahnschrift Light" size=5>10
</td>
</tr>


<tr>
<td><font face="Bahnschrift Light" size=5>FOOD</td>
<td><center><font face="Bahnschrift Light" size=5>:</td>
<td><select name=makan style="width:	300px; height:30px; font-size:20; font-family:Bahnschrift">
<option value=""><font face="Bahnschrift Light" size=10>Pilih Makanan</font>
<option value="BURGER">BURGER DELUXE</font>
<option value="PANCAKE">PANCAKE</font>
<option value="TAKOYAKI">TAKOYAKI</font>
<option value="MARTABAK">MARTABAK CHOCECHEESE</font>
<option value="SPAGHETTI">SPAGHETTI DELUXE</font>
<option value="SUSHI">SUSHI</font>

<input type=number name=jmlh value=0 style="width:50px; height:30px; font-size:20; font-family:Bahnschrift">
<br>
<select name="makan2" style="width:	300px; height:30px; font-size:20; font-family:Bahnschrift">
<option value=""><font face="Bahnschrift Light" size=10>Pilih Makanan</font>
<option value="BURGER">BURGER DELUXE</font>
<option value="PANCAKE">PANCAKE</font>
<option value="TAKOYAKI">TAKOYAKI</font>
<option value="MARTABAK">MARTABAK CHOCECHEESE</font>
<option value="SPAGHETTI">SPAGHETTI DELUXE</font>
<option value="SUSHI">SUSHI</font>

<input type=number name="jmlh2" value=0 style="width:50px; height:30px; font-size:20; font-family:Bahnschrift">
<br>
<select name="makan3" style="width:	300px; height:30px; font-size:20; font-family:Bahnschrift">
<option value=""><font face="Bahnschrift Light" size=10>Pilih Makanan</font>
<option value="BURGER">BURGER DELUXE</font>
<option value="PANCAKE">PANCAKE</font>
<option value="TAKOYAKI">TAKOYAKI</font>
<option value="MARTABAK">MARTABAK CHOCECHEESE</font>
<option value="SPAGHETTI">SPAGHETTI DELUXE</font>
<option value="SUSHI">SUSHI</font>

<input type=number name="jmlh3" value=0 style="width:50px; height:30px; font-size:20; font-family:Bahnschrift"></td>
</tr>


<tr>
<td><font face="Bahnschrift Light" size=5>DRINK</font></td>
<td><center><font face="Bahnschrift Light" size=5>:</font></td>
<td><select name="minum1" style="width:	300px; height:30px; font-size:20; font-family:Bahnschrift">
<option value=""><font face="Bahnschrift Light" size=5>Pilih Minuman
<option value="MOCHACHINO">MOCHACHINO
<option value="MATCHA TEA">MATCHA TEA
<option value="COFFEE ICE">COFFEE ICE
<option value="TEA ICE">TEA ICE
<option value="AVOCADO ICE">AVOCADO ICE
<option value="LEMON TEA ICE">LEMON TEA ICE
<input type=number name="jmlh4" value=0 style="width:50px; height:30px; font-size:20; font-family:Bahnschrift">
<br>
<select name="minum2" style="width:	300px; height:30px; font-size:20; font-family:Bahnschrift">
<option value=""><font face="Bahnschrift Light" size=5>Pilih Minuman
<option value="MOCHACHINO">MOCHACHINO
<option value="MATCHA TEA">MATCHA TEA
<option value="COFFEE ICE">COFFEE ICE
<option value="TEA ICE">TEA ICE
<option value="AVOCADO ICE">AVOCADO ICE
<option value="LEMON TEA ICE">LEMON TEA ICE
<input type=number name="jmlh5" value=0 style="width:50px; height:30px; font-size:20; font-family:Bahnschrift">
<br>
<select name="minum3" style="width:	300px; height:30px; font-size:20; font-family:Bahnschrift">
<option value=""><font face="Bahnschrift Light" size=5>Pilih Minuman
<option value="MOCHACHINO">MOCHACHINO
<option value="MATCHA TEA">MATCHA TEA
<option value="COFFEE ICE">COFFEE ICE
<option value="TEA ICE">TEA ICE
<option value="AVOCADO ICE">AVOCADO ICE
<option value="LEMON TEA ICE">LEMON TEA ICE
<input type=number name="jmlh6" value=0 style="width:50px; height:30px; font-size:20; font-family:Bahnschrift">
</td>
</tr>

<tr>
<td colspan=3><center><input type=submit name=pr value=PROSES style="width:100px; height:35px; font-size:20; font-family:Bahnschrift">
</tr>

</table>
</form>
</body>
</html>

