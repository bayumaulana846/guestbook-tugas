<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<title>Form Pendaftaran</title>
<body bgcolor="black" text="white">
<div align='center'>
  <form action="prosesdaftar.php" method="post">

  <table>
  <tbody>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

  <tr><td colspan="2" align="center"><h1>Daftar Akun</h1><p>==========================<p></td></tr>

  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>
</body>
