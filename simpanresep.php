<html>
<head>
<title>buku tamu </title>
</head>
<body bgcolor="black" text="white">
  <script type="text/javascript">
  window.setTimeout("waktu()",1000);
  function waktu() {
  var tanggal = new Date();
  setTimeout("waktu()",1000);
  document.getElementById("tanggalku").innerHTML
  = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();}
  </script>
  </head>
  <body bgcolor="black" text="white" onload="waktu()">
  <br>
  <table align=center style="border:1px solid white" bgcolor="#191970"><tr><td>
  <div id="tanggalku">
  </div></td></tr>
  </table>
  </body>
  </html>
  <font face="times new roman" size="5">
  <table align="center" border="3" cellpadding=5 cellspacing=5 style=""><tr><td align=center>

  <h1>Buku Tamu</h1>
  <a href="resep.php"> Kembali Ke Buku Tamu</a>
  <br>

  <h2>Buku Tamu</h2>
  <br>
  <br>
  <br>
  <a href="tampilresep.php">Liat Buku Tamu</a>
  <hr size=1>

<?php
include ("koneksiresep.php");
$Nama=$_POST['Nama'];
$No_HP=$_POST['No_HP'];
$Email=$_POST['Email'];
$Tujuan=$_POST['Tujuan'];
$Waktu=$_POST['Waktu'];
$Keperluan=$_POST['Keperluan'];
$sql = "INSERT INTO tamu2 (Nama, No_HP, Email, Tujuan, Waktu, Keperluan)
VALUES ('$Nama', '$No_HP', '$Email', '$Tujuan', '$Waktu', '$Keperluan')";
if ($conn->query($sql) === TRUE)
{echo "Pesan Telah Terkirim!";}else
{echo "Error: " . $sql . "<br>" . $conn->error;}
$conn->close();
?>
</body>
</html>
