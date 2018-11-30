<html>
<head>

	<title>Buku tamu</title>
</head>
<body bgcolor="black" text="white">

	<style type="text/css">
	html,body{
		padding: 0;
		margin:0;
		font-family: sans-serif;
	}

	.menu-malasngoding{
		background-color: #3141ff;
	}

	.menu-malasngoding ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}

	.menu-malasngoding > ul > li {
		float: left;
	}


	.menu-malasngoding li a {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	.menu-malasngoding li a:hover{
		background-color: #2525ff;
	}

	li.dropdown {
		display: inline-block;
	}

	.dropdown:hover .isi-dropdown {
		display: block;
	}

	.isi-dropdown a:hover {
		color: #fff !important;
	}

	.isi-dropdown {
		position: absolute;
		display: none;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		background-color: #f9f9f9;
	}

	.isi-dropdown a {
		color: #3c3c3c !important;
	}

	.isi-dropdown a:hover {
		color: #232323 !important;
		background: #f3f3f3 !important;
	}
</style>


<header class="header">
	<div class="menu-malasngoding">

		<ul>
			<li><a href="#">Home</a></li>

			<li class="dropdown"><a href="#">Menu</a>
				<ul class="isi-dropdown">
					<li><a href="#"> About </a></li>
					<li><a href="#"> Daftar tamu </a></li>
					<li><a href="#"> Pendaftaran tamu </a></li>
				</ul>
        <li><a href="#">Setting</a></li>
        <li class="dropdown"><a href="#">Help</a>
          <ul class="isi-dropdown">
            <li><a href="#"> Kontak</a></li>
		</ul>

	</div>
</header>

<br/>

<center>
	<h1>TEST<br/> </h1>
</center>

</body>
</html>
