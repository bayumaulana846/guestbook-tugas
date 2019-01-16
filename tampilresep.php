<html>
<head>
  <title>Buku Tamu</title>
</head>
<body>
<body bgcolor="black" text="white">
  <div align="center">
<h2>Buku Tamu</h2>
<a href="resep.php"> Kembali ke Buku Tamu</a>
</div>
<br>
<hr size=2>
<h3></h3>
<a href="tampilresep.php"> Lihat Buku Tamu</a>
<?php
include ("koneksiresep.php");
$sql = "SELECT Nama, No_HP, Email, Tujuan, Waktu, Keperluan FROM tamu2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($rows = $result->fetch_assoc()) {
    echo "
    <tabel>
      <tr>
          <td> Nama : $rows[Nama] </td><br>
          <td> No_HP : $rows[No_HP] </td><br>
          <td> Email : $rows[Email] </td><br>
          <td> Tujuan : $rows[Tujuan] </td><br>
          <td> Waktu : $rows[Waktu] </td><br>
          <td> Keperluan : $rows[Keperluan] </td><br>
      </tr>
      </table>";
  }
} else {
  echo "0  results";
}
$conn->close()
 ?>

</body>
</html>
<hr size=2>
