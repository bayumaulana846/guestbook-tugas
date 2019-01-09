<?php
   $hostmysql  = "localhost";
   $username  = "root";
   $password  = "123456";
   $database  = "bukutamu";
   $conn = mysqli_connect ($hostmysql,$username,$password,$database);
   if ($conn) {
     echo "<b> Terkirim</b>";
   }
   else{
     die ("<b> koneksi Gagal</br>");
   }
?>
