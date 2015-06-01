<?
$host="localhost";
$user="root";
$pass="password";
$db="mesari";

$koneksi=mysql_connect($host,$user,$pass) or die(mysql_error());
$database=mysql_select_db($db);
?>