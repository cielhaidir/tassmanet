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
	<script src="<?= base_url(); ?>assets/js/navbar.js"></script>

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
		<div class="text-white mt-5" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</div>
	</div>

	<!--Main-->
	<section class="page-section">


		<div class="container p-0 d-flex justify-content-center">
			<div class="card p-3 mt-4" style="width:90%; border-radius: 15px;">


				<h1 class="section-heading text-uppercase text-center mt-5">Lapor Pelanggaran Siswa</h1>
				<br>

				<div class="container">

					<div class="col-lg-5 mx-auto p-2">
			
						<form action="lapor" method="POST">
							<!-- <input type="hidden" name="nohp" value="<?= $siswa['0']['nohp_ortu']; ?>"></input> -->

							<div class="text-left">Nama :</div>
							<select name="nis" class="form-select">
								<option>Pilih Nama Siswa</option>
								<?php
								foreach ($siswa as $sw) {
									echo '
                                        <option value="' . $sw['nis'] . '">
                                        ' . $sw['nama_siswa'] . '
                                        </option>
                                        ';
								}
								?>
							</select><br>
							<div class="text-left">Pelanggaran :</div>
							<select class="form-select" name="pelanggaran" onchange="enableSelect(this)" required>
								<option>Pilih Pelanggaran</option>
								<option value="merokok|5">Merokok</option>
								<option value="bolos|10">Bolos</option>
								<option value="alpha|13">Alpha</option>
								<option value="terlambat|2">Terlambat</option>
								<option value="mencuri|10">Mencuri</option>
								<option value="berkelahi|15">Berkelahi</option>
								<option value="lainnya">lainnya</option>
							</select>
							<br>
							<input name="input1" type="text" id="lainnya" class="form-control d-none" placeholder="Masukkan Pelanggaran"> </input>
							<br>
							<input name="input2" type="number" id="lainnya2" class="form-control d-none" placeholder="Masukkan Poin"> </input>
							<br>
							<input type="submit" class="btn btn-secondary">
							<br><br><br>
							<script type="text/javascript">
								function enableSelect(answer) {
									// console.log(answer.value);
									if (answer.value == 'lainnya') {
										document.getElementById('lainnya').classList.remove('d-none');
										document.getElementById('lainnya2').classList.remove('d-none');
										document.getElementById('lainnya').required = true;
										document.getElementById('lainnya2').required = true;
									} else {
										document.getElementById('lainnya').classList.add('d-none');
										document.getElementById('lainnya').required = false;
										document.getElementById('lainnya2').required = false;
										document.getElementById('lainnya').value = "empty";
										document.getElementById('lainnya2').value = "empty";
									}
								};
							</script>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="../assets/js/baru.js"></script>

</body>


</html>
