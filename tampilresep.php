<html>
<head>
<title>Buku Tamu</title>
</head>
<body>
<body background="silhouette_stars_shine_129858_1280x720.jpg" text="teal">
<div align="center">
<h2>Buku Tamu</h2>
<a href="resep.php"> Kembali ke Buku Tamu</a>
</div>
<br>
<div align ="center">
<h3></h3>
<a href="tampilresep.php"> Lihat Buku Tamu</a>

<?php
include ("koneksiresep.php");
$sql = "SELECT Nama, No_HP, Email, Tujuan, Waktu, Keperluan FROM tamu2";
$query = mysqli_query($conn, $sql);

if (!$query) {die ('SQL Error: ' . mysqli_error($conn));}
echo '
    <table width = 500 border =3>
		<thead>
		<tr>
		<th>Nama</th>
    <th>No_HP</th>
		<th>Email</th>
    <th>Tujuan</th>
		<th>Waktu</th>
		<th>Keperluan</th>
		</tr>
		</thead>
		<tbody>';
while ($row = mysqli_fetch_array($query)){
	    echo '<tr>
			<td>'.$row['Nama'].'</td>
      <td>'.$row['No_HP'].'</td>
      <td>'.$row['Email'].'</td>
      <td>'.$row['Tujuan'].'</td>
      <td>'.$row['Waktu'].'</td>
      <td>'.$row['Keperluan'].'</td>
      </tr>';}
  echo '
	</tbody>
  </table>';

mysqli_free_result($query);
mysqli_close($conn);
?>
</body>
</html>
