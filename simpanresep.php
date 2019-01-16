<html>
<head>
<title>buku tamu </title>
</head>
<body bgcolor="black" text="white">

  <h1>Buku Tamu</h1>
  <a href="resep.php"> Kembali Ke Buku Tamu</a>
  <br>
  <h2>Buku Tamu</h2>
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
if ($conn->query($sql) === TRUE) {
  echo "Pesan Telah Terkirim!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
 ?>
 </body>
</html>
