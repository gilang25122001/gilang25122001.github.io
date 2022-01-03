<?php

require_once "ayam.php";
if($koneksi->connect_error) die($koneksi->connect_error);

$username = $email = "";
if (isset($_POST['username'])) $username = fix_string($_POST['username']);

if (isset($_POST['password'])) $password = fix_string($_POST['password']);

$fail= validate_username($username);
$fail= validate_password($password);



if (
isset($_POST['username']) && 
isset($_POST['password'])
){
$p=get_post($koneksi,'username');
$q=get_post($koneksi,'password');
$r=$q;

$query="SELECT * from login";
$result = $koneksi->query($query);
if(!$result) die($koneksi->error);

$rows = $result ->num_rows;
for($j=0;$j < $rows;++$j){
	$result->data_seek($j);
	$row = $result->fetch_array(MYSQLI_ASSOC);
	$d=$row['username'];
	$e=$row['password'];
if ($p==$d && $r==$e)
{
session_start();
$_SESSION['username']=$d;
echo "<script>alert('Successfully Logged In As $p');
window.location='index.php';</script>";
};

};
};
echo "Username or password wrong";
function get_post($koneksi,$var)
{
return $koneksi->real_escape_string($_POST[$var]);
}

function fix_string($string)
{
if (get_magic_quotes_gpc()) $string = stripslashes($string);
return htmlentities ($string);
}

function validate_username($field){
if ($field == "") echo "No Username was entered<br>";
else if (strlen($field) < 5) return "username min=5";
else if (preg_match("/[^a-zA-Z0-9_-]/",$field)) return "Invalid Username";
return "";
}

function validate_password($field){
if ($field == "") echo "No Password was entered<br>";
else if (strlen($field) < 5) return "Password min=5";
else if (!preg_match("/[A-Z]/",$field) || !preg_match("/[0-9]/",$field)) return "Invalid Password";
return "";
}

?>