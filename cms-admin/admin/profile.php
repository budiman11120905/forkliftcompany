<?php
session_start();
include('../../koneksi-web/koneksi.php');
if (empty($_SESSION[usernamesession]) AND empty($_SESSION[statussession]) AND empty($_SESSION[passwordsession])){
header ("location:../index.php");
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrator Area</title>
<link href="../../mesari.css" type="text/css" rel="stylesheet" />
</head>

<body>
<br>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFE181">
  <!--DWLayoutTable-->
  <tr>
    <td height="150" colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="800" height="150" align="left" valign="top"><img src="../images-admin/admin-header-area.jpg" width="800" height="150" /></td>
        </tr>
		 </table></td>
  </tr>
  <tr>
    <td width="5" height="292" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FEDB7D">
      <!--DWLayoutTable-->
      <tr>
        <td width="5" height="292">&nbsp;</td>
        </tr>
    </table></td>
    <td width="790" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FEF3D3">
      <!--DWLayoutTable-->
      <tr>
        <td width="180" height="292" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="180" height="40" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" background="../images-admin/bg-status.jpg">
              <!--DWLayoutTable-->
              <tr>
                <td width="180" height="40" align="center" valign="top" class="side-left-desc">Welcome <b><? echo"$_SESSION[usernamesession]"; $tanggal=date("h:i:s A");?></b><br />
                  <? echo"$tanggal"; ?></td>
                  </tr>
              </table></td>
              </tr>
          <tr>
            <td height="252" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FEF3D3">
              <!--DWLayoutTable-->
              <tr>
                <td width="180" height="252" align="center" valign="top"><? include('menu.php'); ?></td>
                </tr>
              </table>            </td>
            </tr>
          
          </table></td>
          <td width="610" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFF4D4">
            <!--DWLayoutTable-->
            <tr>
              <td width="610" height="40" align="center" valign="middle" class="side-left-title">Administrator Area </td>
              </tr>
            <tr>
              <td height="17" valign="middle" bgcolor="#FFE181" class="side-left-title">:: Modul Profile Perusahaan :: </td>
              </tr>
            <tr>
              <td height="235" align="left" valign="top" class="side-left-desc"><br />
                <?
			  $query=mysql_query("select * from profile");
			  while($row=mysql_fetch_array($query)){
			  $id=$row["0"];
			  echo"<form method='post' action='save-edit-profile.php' enctype='multipart/form-data'><table border='0'><tr><td valign='top' width='100'><b>Deskripsi</b></td><td align='center' width='10' valign='top'><b>:</b></td><td><textarea name='deskripsi' cols='70' rows='12' class='side-left-desc'>$row[1]</textarea></td></tr><tr><td valign='top' width='100'><b>Gambar 1</b></td><td align='center' width='10' valign='top'><b>:</b></td><td><input type='file' name='gambar1' size='50' class='side-left-desc'></td></tr><tr><td valign='top' width='100'><b>Gambar 2</b></td><td align='center' width='10' valign='top'><b>:</b></td><td><input type='file' size='50' name='gambar2' class='side-left-desc'></td></tr><tr><td valign='top' width='100'><b>Gambar 3</b></td><td align='center' width='10' valign='top'><b>:</b></td><td><input type='file' size='50' name='gambar3' class='side-left-desc'></td></tr><tr><td colspan='2'></td><td><input type='submit' value='Simpan' class='side-left-desc'><input type='hidden' value='$id' name='id'></td></tr></table></form>";
			  }
			  ?></td>
              </tr>
            
</table></td>
        </tr>
</table></td>
    <td width="5" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFE181">
      <!--DWLayoutTable-->
      <tr>
        <td width="5" height="292">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
 <tr>
    <td height="30" colspan="3" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFE181">
      <!--DWLayoutTable-->
      <tr>
        <div id="copyright" class="container">
	<p>&copy; 2015  JMB Forklift. All rights reserved. | Photos by <a href="http://budimancloud.blogspot.com/">BTMedia</a> | Design by <a href="http://budimancloud.blogspot.com" rel="nofollow">BTdeveloper</a>.</p>
</div>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?
}
?>
