<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Buku Tamu</title>
</head>
<div header="Pictures">
<script language="javascript">
    function hanyaAngka(e, decimal) {
    var key;
    var keychar;
     if (window.event) {
         key = window.event.keyCode;
     } else if (e) {
         key = e.which;
     } else return true;

    keychar = String.fromCharCode(key);
    if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
        return true;
    } else
    if ((("0123456789").indexOf(keychar) > -1)) {
        return true;
    } else
    if (decimal && (keychar == ".")) {
        return true;
    } else return false;
    }

    function huruf(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
            return false;
        return true;
    }

</script>
<body background="Pictures/daun.jpg" >
<form action="simpanresep.php" method="post">
<div align='center'>
  <h2>Silahkan Isi Buku Tamu</h2>
  <p>===========================</p>
  <hr size=3 >
<table border="1">
<tr>
    <td>Nama</td>
    <td><input type="text" name="Nama" placeholder="Masukan nama" onkeypress="return huruf(event)" /></td>
</tr>
<tr>
    <td>No_HP</td>
    <td><input type="text" name="No_HP" placeholder="Masukan nomor telpon" onkeypress="return hanyaAngka(event)" /></td>
</tr>
<tr>
    <td>Email</td>
    <td><input type="text" name="Email" placeholder="Masukan email" onkeypress="return huruf dan angka(event, false)" /></td>
</tr>
<tr>
<tr>
    <td>Tujuan</td>
    <td><input type="text" name="Tujuan" placeholder="Ketik orang dan satker tujuan" onkeypress="return huruf(event)" /></td>
</tr>
<tr>
    <td>Waktu</td>
    <td><input type="text" name="Waktu" placeholder="tahun/bulan/tanggal hh:mm" onkeypress="return huruf dan angka(event)" /></td>
</tr>
<tr>
    <td>Keperluan</td>
    <td><input type="text" name="Keperluan" onkeypress="return huruf dan angka(event)" /></td>
</tr>

<td><input type="submit" name="simpan" value="Simpan"> <input type="reset" name ="Hapus" value="Hapus"></td>
</tr>
</table>
</div>
</form>
</body>
</html>

<script type="text/javascript">
window.setTimeout("waktu()",1000);
function waktu() {
var tanggal = new Date();
setTimeout("waktu()",1000);
document.getElementById("tanggalku").innerHTML
= tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
}
</script>
</head>
<body bgcolor="white" text="white" onload="waktu()">
<table align=center style="border:1px solid white" bgcolor="#191970"><tr><td>
<div id="tanggalku">
</div></td></tr>
</table>
</body>
</html>

<?php
$month= date ("m");
$year=date("Y");
$day=date("d");
$endDate=date("t",mktime(0,0,0,$month,$day,$year));
echo '<font face="freemono" size="5">';
echo '<table align="center" border="3" cellpadding=5 cellspacing=5 style=""><tr><td align=center>';
echo "Hari ini tanggal : ".date("d F Y ",mktime(0,0,0,$month,$day,$year));
echo '</td></tr></table>';
echo '<table align="center" border="1" cellpadding=2 cellspacing=1 style="border:2px solid #ccc">
   <tr bgcolor="#000000">
   <td align=center><font color=red>Minggu</font></td>
   <td align=center>Senin</td>
   <td align=center>Selasa</td>
   <td align=center>Rabu</td>
   <td align=center>Kamis</td>
   <td align=center>Jumat</td>
   <td align=center>Sabtu</td>
   </tr>';
$s=date ("w", mktime (0,0,0,$month,1,$year));
for ($ds=1;$ds<=$s;$ds++) {
echo "<td style=\"font-family:arial;color:#B3D9FF\" align=center valign=middle bgcolor=\"\">
</td>";}
for ($d=1;$d<=$endDate;$d++)
{
   if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) { echo "<tr>"; }
   $fontColor="#FFFFFF";
   if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sun")
   { $fontColor="red"; }
   echo "<td style=\"font-family:arial;color:#333333\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";
   if (date("w",mktime (0,0,0,$month,$d,$year)) == 6)
   {
     echo "</tr>";
}
}
echo '</table>';
?>
<a href="index.php">HOME</a>
<hr size=3>
