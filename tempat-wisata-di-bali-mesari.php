<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MESARI TRANSPORT TOUR. TRAVEL AGEN DAN PERUSAHAAN SEWA MOBIL DI BALI</title>
<link href="mesari.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div align="center" id="header"><img src="images/header.jpg" width="800" height="235" /></div>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="800" height="749" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFF7D8">
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
            <td width="15" height="374" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="15" height="374">&nbsp;</td>
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
                      <td height="70" align="left" valign="top" class="side-left-desc">Jl. Kramat Raya no.25 <br />
                        Ph. 08987456231<br />
                      Fax +62 621 757166<br />                      <a href="mailto:info@mesari-transport-tour.com">info@mesari-transport-tour.com</a></td>
                    </tr>
                    <tr>
                      <td height="20" align="left" valign="middle" class="side-left-title"><strong>Car Warehouse :</strong></td>
                    </tr>
                    <tr>
                      <td height="40" align="left" valign="top" class="side-left-desc">Jl. Manggarai Raya No.01 </td>
                    </tr>
                    <tr>
                      <td height="20" align="left" valign="middle" class="side-left-title"><strong>Personal Contact :</strong></td>
                    </tr>
                    <tr>
                      <td height="42" align="left" valign="top" class="side-left-desc">Firdaus H Tulloh <br />
                      Mobile : 081337534008</td>
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
                      <td height="87">&nbsp;</td>
                    </tr>
                    
                </table></td>
                <td>&nbsp;</td>
            </tr>
        </table></td>
          <td width="9" height="30">&nbsp;</td>
        <td width="566" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="566" height="30" align="left" valign="middle" class="title">Berbagai Tempat Wisata Menarik di Bali   </td>
              </tr>
          </table></td>
          <td width="15" rowspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="15" height="649">&nbsp;</td>
              </tr>
          </table></td>
        </tr>
      <tr>
        <td height="619">&nbsp;</td>
        <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="566" height="554" valign="top" class="content">Sebagai daerah tujuan                                                           wisata, Bali memiliki beberapa objek                                                           wisata yang bisa menjadi                                                           pilihan liburan. Berikut                                                           informasi singkat tentang                                                           tempat wisata bagus dan                                                           menarik di pulau dewata.<br />
              <br />
              <?
			  include('koneksi-web/koneksi.php');
			  echo"<table width='555' border='0'>";
			  $no=1;
			  $query=mysql_query("select * from wisatabali order by id_wisata_bali ASC");
			  while($row=mysql_fetch_array($query)){
			  echo"<tr><td><b>$no. $row[1]</b></td></tr><tr><td>";
			  $no++;
			  echo"<img src='images/$row[3]' border='0' align='left' hspace='8' vspace='5' width='150' height='100'>";
	$kalimat=strtok(nl2br($row[2])," ");
    for ($i=1;$i<=70;$i++){
      echo ($kalimat);
      echo (" "); // Spasi antar kalimat
      $kalimat=strtok(" "); // Potong per kalimat
    } 	
	echo"........<a href='wisata-bali-detail.php?id=$row[0]'>Baca Selanjutnya</a><br><br></td></tr>";
			  }
			  echo"</table><br><br><br>";
			  ?></td>
              </tr>
			  <tr>
          <td height="100" valign="top" class="side-left-title">Mesari Transport Tour Special Offer :<br />
            <?  
			  echo"<table border='0' width='100%' height='100'>";
			 $query=mysql_query("select * from car_list where status='spesial_offer'");
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
			  $query=mysql_query("select * from car_list where status='spesial_offer'");
			  $i=0;
			  $kolom = 4;
			  while($row=mysql_fetch_array($query)){
			  if ($i >= $kolom){
    		  echo "</tr><tr>";
  				}
 			 $i++;
			  echo"<td class='side-left-desc' valign='top' align='center'><b><a href='reservation.php?id_mobil=$row[0]&nama_mobil=$row[1]'>$row[1]<p></a></b></td>";
			  }
			  echo"</tr></table>"; 
			  ?></td>
			  </tr>
        </table></td>
        </tr>
      <tr>
        <td height="100" colspan="4" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="footer">
          <!--DWLayoutTable-->
          
          <tr>
            <td width="800" height="65">&nbsp;</td>
              </tr>
          <tr>
            <td height="20" align="center" valign="middle" class="footer-link"><a href="index.php">Home</a> | <a href="profile-mesari.php">Profile Kami</a> | <a href="pelayanan-mesari.php">Pelayanan Kami</a> | <a href="harga-sewa-mobil-mesari.php">Harga Sewa Mobil</a> | <a href="harga-sewa-bus-mesari.php">Harga Sewa Bus</a> | <a href="mesari-half-day-tour.php">Half Day Bali Tour</a> | <a href="mesari-full-day-tour.php">Full Day Bali Tour</a></td>
              </tr>
          
          <tr>
            <td height="20" align="center" valign="bottom"><span class="footer-link"><a href="aturan-sewa-mobil-mesari.php">Aturan Sewa Mobil</a> | <a href="tempat-wisata-di-bali-mesari.php">Tempat Wisata di Bali </a>| <a href="contact-mesari.php">Hubungi Kami</a> | <a href="pemesanan-mesari.php">Pemesanan</a></span></td>
          </tr>
          
          
          
          
          
          <tr>
            <td height="25" align="center" valign="bottom"><strong>Copyright Mesari Transport Tour. All right reserved@2009.
              Designed and Maintained by Gede Suma Wijaya </strong></td>
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