<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>JMB FORKLIFT | CV. Jaya Makmur Bersama | RENTAL FORKLIFT | SEWA FORKLIFT</title>
<link href="mesari.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script src="js/jquery-min.js" type="text/javascript"></script>
<script src="js/s3slider.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 3000
        });
    });	
</script>

</head>

<body>

<div align="center" id="header"><img src="images/header.jpg" width="800" height="235" /></div>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="800" height="914" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFF7D8">
      <tr>
        <td width="210" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td height="275" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                      <td width="25" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <!--DWLayoutTable-->
                          </table></td>
                          <tr> 
                          <!--DWLayoutTable-->
<td width="160" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <td width="100%" height="100%" valign="top"><td width="160" height="275" valign="top"><?php include('master-menu.php'); ?></td></div></td>
                          </tr>  
                      </table></td>
                    </tr>
              </table></td>
                <td width="10">&nbsp;</td>
              </tr>
          <tr>
            <td width="15" height="504" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="15" height="504">&nbsp;</td>
                    </tr>
            </table></td>
                <td width="185" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <!--DWLayoutTable-->
                    <tr>
                      <td width="185" height="20" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="20" align="left" valign="middle" class="side-left-title">Alamat : </td>
                    </tr>
                    <tr>
                      <td height="78" align="left" valign="top" class="side-left-desc">Jalan Adiyaksa Raya<br>
Lebak Bulus
DKI Jakarta, 12440<br />
Jakarta Selatan - Indonesia  <br />
                        Ph. 0812 815 8149<br />
                      Fax 021 27650383<br />                      <a href="mailto:info@jmbforklift.com">info@jmbforklift.com</a></td>
                    </tr>
                    <tr>
                      <td height="20" align="left" valign="middle" class="side-left-title"><strong>Warehouse :</strong></td>
                    </tr>
                    <tr>
                      <td height="40" align="left" valign="top" class="side-left-desc">Jalan Adiyaksa Raya<br>
Lebak Bulus
DKI Jakarta, 12440<br />
Jakarta Selatan - Indonesia  </td>
                    </tr>
                    <tr>
                      <td height="20" align="left" valign="middle" class="side-left-title"><strong>Personal Contact :</strong></td>
                    </tr>
                    <tr>
                      <td height="42" align="left" valign="top" class="side-left-desc">a/n Mario <br />
                      Mobile : 0812 815 8149</td>
                    </tr>
                    <tr>
                      <td height="20" align="left" valign="middle" class="side-left-title">Online Support </td>
                    </tr>
                    <tr>
                      <td height="35" align="left" valign="middle" class="side-left-desc"><a href = 'ymsgr:sendim?go_blind_boys'>
                        <img src="http://opi.yahoo.com/online?u=go_blind_boys&amp;m=g&amp;t=2" width="125" height="25" border=0>
                      </a></td>
                    </tr>
                    <tr>
                      <td height="209">&nbsp;</td>
                    </tr>
                </table></td>
                <td>&nbsp;</td>
              </tr>
          
          </table></td>
          <td width="9" height="40">&nbsp;</td>
          <td width="566" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="566" height="30" align="left" valign="middle"><h1><b>Form Input Postingan</b></h1>


<table align="center">
<tr>
<td>


<p>&nbsp;</p>
<form name="form1" method="post" action="inputpost.php?action=simpan">
  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#FF9900">
      <td height="40" colspan="2"><strong>Silahkan Isi Form Postingan Dibawah Ini </strong></td>
    </tr>
    <tr bgcolor="#99FF00">
      <td height="30">id</td>
      <td>: 
      <input name="id" type="text" id="nama"></td>
    </tr>
    <tr bgcolor="#99FF00">
      <td height="30">Judul</td>
      <td>: 
      <input name="judul" type="text" id="email"></td>
    </tr>
	</tr>
    <tr bgcolor="#99FF00">
      <td height="30">Isi</td>
      <td>: 
      <input name="isi" type="text" id="email"></td>
    
    <tr bgcolor="#99FF00">
      <td height="30">&nbsp;</td>
      <td valign="top"><input type="submit" name="Submit" value="Submit">
      <input type="reset" name="Submit2" value="Reset"></td>
    </tr>
  </table>
</form></div>
<?php
if ($_GET[action]=="simpan") {
//Membuat Koneksi Ke Database
	mysql_connect("localhost","root","password");
	mysql_select_db("test1");

//validasi data yang kosong
	if (empty($_POST['id']) || empty($_POST['judul']) || empty($_POST['isi'])) {
		echo "Data harus Diisi Semua";
	}
	else {
	
	$simpan="INSERT INTO artikel SET
										id='$_POST[id]',
										judul='$_POST[judul]',
										isi='$_POST[isi]'";
										
							mysql_query($simpan);
	echo '<script language="javascript">
	alert("Postingan Berhasil Di Simpan");
	window.location="inputpost.php";
	</script>';
	exit();
		}
}
?>

            
<div id="copyright" class="container">
	<p>&copy; 2015  JMB Forklift. All rights reserved. | Photos by <a href="http://budimancloud.blogspot.com/">BTMedia</a> | Design by <a href="http://budimancloud.blogspot.com" rel="nofollow">BTdeveloper</a>.</p>
</div>
              </tr>
          <tr>
            <td height="20">&nbsp;</td>
              </tr>
          </table></td>
        </tr>
      
      
     </table></td>
  </tr>
</table>
</body>
</html>