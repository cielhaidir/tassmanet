<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Tassmanet</title>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/nav.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/fontawesome-all.min.css">

</head>

<body class="bg-smanet">

	<div class="container">
	<div id="mySidenav" class="sidenav">
			<a style="font-weight: bold; font-family: 'Montserrat', sans-serif;" class="text-dark " href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a style="font-weight: bold; font-family: 'Montserrat', sans-serif;" class="text-dark" href="<?= base_url(); ?>Home/landing">Home</a>
			<a style="font-weight: bold; font-family: 'Montserrat', sans-serif;" class="text-dark" href="<?= base_url(); ?>Pelanggaran/">Daftar Pelanggaran</a>
			<a style="font-weight: bold; font-family: 'Montserrat', sans-serif;" class="text-dark" href="<?= base_url(); ?>Tassmanet/">Lapor Pelanggaran</a>
			<a style="font-weight: bold; font-family: 'Montserrat', sans-serif;" class="text-dark" href="<?= base_url(); ?>Admin">Dashboard</a>
			<a style="font-weight: bold; font-family: 'Montserrat', sans-serif;" class="text-dark" href="<?= base_url(); ?>Auth/logout">Log Out/Keluar</a>
		</div>
		<div class="text-white mt-1" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</div>

		<!-- <h1 class="text-center text-white mb-5" style="font-weight: bold; font-family: 'Montserrat', sans-serif;">SISTEM MANAJEMEN PELANGGARAN</h1> -->
		<br>
		<div class="row gy-5 d-flex justify-content-center">
			<div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">

				<!--  -->
				<div class="col">
					<div class="card rounded-lg shadow-4" id="card1">
						<img class="card-img d-block" style="width:20%; align-self: center; margin-bottom: 20px; margin-top: 30px; border-radius: 10px;" src="<?= base_url(); ?>assets/img/tassmanet/magnifier.png">
						<div style="font-weight:1000" class=" text-center text-dark">DAFTAR PELANGGARAN</div>
						<div class="card-body">
						</div>
					</div>
				</div>
				<!--  -->


				<!--  -->
				<div class="col">
					<div class="card rounded-lg shadow-4" id="card2">
						<img class="card-img-top d-block" style="width:20%; align-self: center; margin-bottom: 20px; margin-top: 30px; border-radius: 10px;" src="<?= base_url(); ?>assets/img/tassmanet/edit.png">
						<div style="font-weight:1000" class="text-center text-dark" href="">LAPOR PELANGGARAN</div>
						<div class="card-body">
						</div>
					</div>
				</div>
				<!--  -->


				<!--  -->
				<div class="col">
					<div class="card rounded-lg shadow-4" id="card3">
						<img class="card-img-top d-block" style="width:20%; align-self: center; margin-bottom: 20px; margin-top: 30px; border-radius: 10px;" src="<?= base_url(); ?>assets/img/tassmanet/DASHBOARD.png">
						<div style="font-weight:1000" class="text-center text-dark" href="">DASHBOARD</div>
						<div class="card-body">
						</div>
					</div>
				</div>
				<br>
				<!--  -->

			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#card1').click(function() {
				window.location.href = '<?= base_url(); ?>Pelanggaran';
			});
			$('#card2').click(function() {
				window.location.href = '<?= base_url(); ?>tassmanet';
			});
			$('#card3').click(function() {
				window.location.href = '<?= base_url(); ?>admin';
			});
		});

		function openNav() {
			document.getElementById("mySidenav").style.width = "100%";
		}

		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
		}
	</script>

</body>

</html>
