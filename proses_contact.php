<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Berhasil</title>
</head>

<body>
<p>
  <?php

$nama=$_POST['nama'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$pesan=$_POST['pesan'];

$to="jmbforkliftcv@gmail.com";
$header="From: $email";

@mail($to, $subjek, $pesan, $header);
echo "Pesan Berhasil Dikirim";
?>
</p>
<table width="20%" border="0">
  <tr>
    <td><a href="index.php"><img src="image/cal.gif" width="30" height="30" border="0" align="bottom" /> Kembali ke Beranda </a></td>
    
    
  </tr>
</table>
<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="628" height="90" title="JMB Forklift">
    <param name="movie" value="images/flashvortex.swf" />
    <param name="quality" value="high" />
    <embed src="images/flashvortex.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="628" height="90"></embed>
  </object>
</p>
</body>
</html>
