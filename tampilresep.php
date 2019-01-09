<html>
<head>
  <title>Buku Tamu</title>
</head>
<body>
<body bgcolor="black" text="white">
<h1>Buku Tamu</h1>
<a href="resepsionis.php"> Kembali ke Buku Tamu</a>
<br>
<h2>Buku Tamu</h2>
<a href="tampilresep.php"> Lihat Buku Tamu</a>


<?php
include ("koneksiresep.php");
$sql = "SELECT Nama, No_HP, Email, Tujuan, Keperluan FROM tamu2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($rows = $result->fetch_assoc()) {

    echo
     "<br>".
    "Nama: ". $rows["Nama"]. "<br>".
    "No_HP: ". $rows["No_HP"]. "<br>".
    "Email: ". $rows["Email"]. "<br>".
    "Tujuan: ". $rows["Tujuan"]. "<br>".
    "Keperluan: ". $rows["Keperluan"]. "<br>";

  }
} else {
  echo "0  results";
}
$conn->close()

 ?>

</body>
</html>
