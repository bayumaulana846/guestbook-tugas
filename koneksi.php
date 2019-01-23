<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "123456";
   $dbname  = "guestbook";
   $db = new PDO('mysql:dbname='.$dbname.';host='.$hostname, $username, $password);
?>
