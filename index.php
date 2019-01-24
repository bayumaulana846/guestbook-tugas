<html>
<body background="silhouette_stars_shine_129858_1280x720.jpg" text="white">

	<style type="text/css">
	html,body
	{padding: 0;
	 margin:0;
	 font-family: sans-serif;}
	.menu-home
	{background-color: #3141ff;}

	.menu-home ul
	{list-style-type: none;
	 margin: 0;
	 padding: 0;
	 overflow: hidden;}

	.menu-home > ul > li
	{float: left;}

	.menu-home li a
	{display: inline-block;
	 color: white;
	 text-align: center;
	 padding: 14px 16px;
	 text-decoration: none;}

	.menu-home li a:hover
	{background-color: #2525ff;}

	li.dropdown
	{display: inline-block;}

	.dropdown:hover .isi-dropdown
	{display: block;}

	.isi-dropdown a:hover
	{color: #fff !important;}

	.isi-dropdown {
	position: absolute;
	display: none;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
	background-color: #f9f9f9;}

	.isi-dropdown a
	{color: #3c3c3c !important;}

	.isi-dropdown a:hover
 {color: #232323 !important;
  background: #f3f3f3 !important;}
  </style>


<header class="header">
<div class="menu-home">

		<ul>
		<li class="dropdown"><a href="index.php">Home</a>
    <ul class="isi-dropdown">

		</ul>
		<li class="dropdown"><a href="#">Menu</a>
		<ul class="isi-dropdown">
		<li><a href="perkenalan.php"> About </a></li>
		<li><a href="tampilresep.php"> Daftar tamu </a></li>
	  <li><a href="resep.php"> Isi buku tamu </a></li>
		</ul>
    <li><a href="perkenalan.php">Setting</a></li>
    <li class="dropdown"><a href="#">Help</a>
    <ul class="isi-dropdown">
    <li><a href="kontak.php"> Kontak</a></li>
		</ul>

</div>
</header>
</body>
</html>

<?php
session_start();
if(!isset($_SESSION['username']))
{ header('location:login.php');} else {
$username = $_SESSION['username'];}
?>

<title>Halaman Sukses Login</title>
<div align='center'>
<h3> Selamat Datang, <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a><h3>
<?php echo 'Silahkan Isi Buku Tamu di Menu'; ?>
	<br>
	<br>
	<br>
