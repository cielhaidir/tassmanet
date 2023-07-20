<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Tassmanet</title>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/nav.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/js/navbar.js">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/fontawesome-all.min.css">

</head>

<body class="bg-smanet">

	<div class="container">
		<div id="mySidenav" class="sidenav">
			<a style="font-weight: bold; font-family: 'Montserrat', sans-serif;" class="text-dark " href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a style="font-weight: bold; font-family: 'Montserrat', sans-serif;" class="text-dark" href="#">Home</a>
			<a style="font-weight: bold; font-family: 'Montserrat', sans-serif;" class="text-dark" href="#">Daftar Pelanggaran</a>
			<a style="font-weight: bold; font-family: 'Montserrat', sans-serif;" class="text-dark" href="#">Lapor Pelanggaran</a>
			<a style="font-weight: bold; font-family: 'Montserrat', sans-serif;" class="text-dark" href="#">Dashboard</a>
			<a style="font-weight: bold; font-family: 'Montserrat', sans-serif;" class="text-dark" href="<?= base_url(); ?>Auth/logout">Log Out/Keluar</a>
		</div>
		<div class="text-white mt-1" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</div>
