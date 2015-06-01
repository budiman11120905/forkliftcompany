<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>JMB FORKLIFT | CV. Jaya Makmur Bersama | RENTAL FORKLIFT | SEWA FORKLIFT</title>
<link href="mesari.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div align="center" id="header"><img src="images/header.jpg" width="800" height="235" /></div>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="800" height="662" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFF7D8">
      <!--DWLayoutTable-->
      <tr>
        <td width="210" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td height="275" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="15" height="275">&nbsp;</td>
                      <td width="25" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <!--DWLayoutTable-->
                          
                      </table></td>
                      <td width="160" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <!--DWLayoutTable-->
                          <tr>
                            <td width="160" height="275" valign="top"><? include('master-menu.php'); ?></td>
                          </tr>
                      </table></td>
                    </tr>
              </table></td>
                <td width="10">&nbsp;</td>
            </tr>
          <tr>
            <td width="15" height="287" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="15" height="287">&nbsp;</td>
                    </tr>
              </table></td>
                <td width="185" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <!--DWLayoutTable-->
                    <tr>
                      <td width="185" height="20" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="20" align="left" valign="middle" class="side-left-title">Main Office : </td>
                    </tr>
                    <tr>
                      <td height="70" align="left" valign="top" class="side-left-desc">Jalan Adiyaksa Raya<br>
Lebak Bulus
DKI Jakarta, 12440<br />
Jakarta Selatan - Indonesia  <br />                      <a href="mailto:info@jmbforklift.com">info@jmbforklift.com</a></td>
                    </tr>
                    <tr>
                      <td height="20" align="left" valign="middle" class="side-left-title"><strong>Warehouse :</strong></td>
                    </tr>
                    <tr>
                      <td height="40" align="left" valign="top" class="side-left-desc">Jalan Adiyaksa Raya<br>
Lebak Bulus
DKI Jakarta, 12440<br />
Jakarta Selatan - Indonesia   </td>
                    </tr>
                    <tr>
                      <td height="20" align="left" valign="middle" class="side-left-title"><strong>Personal Contact :</strong></td>
                    </tr>
                    <tr>
                      <td height="42" align="left" valign="top" class="side-left-desc">a/n Mario<br />
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
                </table></td>
                <td>&nbsp;</td>
            </tr>
          <tr>
            <td height="0"></td>
              <td></td>
              <td></td>
            </tr>
          
        </table></td>
          <td width="9" height="40"></td>
        <td width="566" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="566" height="30" align="left" valign="middle" class="title">Profil Jaya Makmur Bersama Forklift </td>
              </tr>
              <tr>
                <td height="10"></td>
              </tr>
          </table></td>
          <td width="15" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="15" height="562">&nbsp;</td>
              </tr>
          </table></td>
        </tr>
      <tr>
        <td height="522"></td>
        <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="566" height="522" valign="top">
              <?
			  include('koneksi-web/koneksi.php');
			  $query=mysql_query("select * from profile");
			  while($row=mysql_fetch_array($query)){
			  echo"<table width='566' height='100' border='0'><tr><td colspan='4'><img src='images/$row[2]'><br></td></tr><tr><td colspan='4' class='content'>$row[1]<br><br></td></tr>";
			  }
			  echo"<tr><td colspan='4' class='content'><b></b><br><br></td></tr>";
				$query=mysql_query("select * from profile");
				$i=0;
				$kolom = 4;
			  while($row=mysql_fetch_array($query)){
			  if ($i >= $kolom){
    		  echo "</tr><tr>";
  			   }
 			 $i++;
			  echo"<td align='center'><a href='reservation.php?id_mobil=$row[0]&nama_mobil=$row[1]'><img src='mobil/$row[2]'  border='0' width='125'></a></td>";
			  }
			  echo"</tr>";
			  $query=mysql_query("select * from profile1");
			  $i=0;
			  $kolom = 4;
			  while($row=mysql_fetch_array($query)){
			  if ($i >= $kolom){
    		  echo "</tr><tr>";
  				}
 			 $i++;
			  echo"<td class='side-left-desc' valign='top' align='center'><b><a href='reservation.php?id_mobil=$row[0]&nama_mobil=$row[1]'>$row[1]</a></b></td>";
			  }
			  echo"</tr></table>";
			  ?></td>
              </tr>
          <!--DWLayoutTable-->
          
        </table></td>
        </tr>
      
      <tr>
        <td height="100" colspan="4" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="footer">
          <!--DWLayoutTable-->
          
          <tr>
            <td width="800" height="65">&nbsp;</td>
              </tr>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="800" height="90" title="JMB Forklift">
    <param name="movie" value="images/flashvortex.swf" />
    <param name="quality" value="high" />
    <embed src="images/flashvortex.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="800" height="90"></embed>
  </object>
          <tr>
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