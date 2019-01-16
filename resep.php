<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Buku Tamu</title>
</head>
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
<body bgcolor="black" text="white">
<form action="simpanresep.php" method="post">
<div align='center'>
  <br>
  <br>
  <br>
  <h2>Silahkan Isi Buku Tamu</h2>
  <p>===========================</p>
  <br>
  <br>

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
<a href="index.php">HOME</a>
</div>
</form>
</body>
</html>
<hr size=3 >
