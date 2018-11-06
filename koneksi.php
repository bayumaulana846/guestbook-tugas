<?php
 $host ="localhost";
 $username ="root";
 $password ="";
 $database ="db_buku";
  $koneksi= mysql_connect($host , $username , $password );
  $pilih_database = mysql_select_database($koneksi , $database);
  if (koneksi) {
     echo "koneksi tersambung"; } else {
       echo "koneksi tidak tersambung ";
     }
 ?>
