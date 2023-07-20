<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Tassmanet</title>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/nav.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
	<link href="<?= base_url(); ?>assets/css/styles.css" rel="stylesheet">
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
			<a style="font-weight: bold; font-family: 'Montserrat', sans-serif;" class="text-dark" href="<?= base_url(); ?>Admin/">Dashboard</a>
			<a style="font-weight: bold; font-family: 'Montserrat', sans-serif;" class="text-dark" href="<?= base_url(); ?>Auth/logout">Log Out/Keluar</a>
		</div>
		<div class="text-white mt-1" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</div>
		<div class="card shadow">
			<div class="card-header py-3">
				<p class="text-primary m-0 fw-bold">Daftar Pelanggaran</p>
			</div>
			<div class="card-body">
				<!-- <div class="row">
					<div class="col-md-6">
						<div class="text-md-start dataTables_filter" id="dataTable_filter"><label class="form-label">Cari Siswa :<input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
					</div>
				</div> -->
				<div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
					<table class="table my-0" id="dataTable">
						<thead>
							<tr>
								<td> No</td>
								<td> Nama</td>
								<td> Total Poin</td>
								<!-- <td> Pelanggaran</td> -->
								<td> Nis</td>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php
								foreach ($pelanggaran as $pln) {
									echo '
										<tr>
										<td>' . ++$start . '</td>
										<td>' . $pln['nama_siswa'] . '</td>
										<td>' . $pln['poin'] . '</td>
										<td>' . $pln['nis'] . '</td>

										</tr>
										';
								}
								?>

						</tbody>
						<tfoot>
							<tr>
								<td><strong>No</strong></td>
								<td><strong>Nama</strong></td>
								<td><strong>Total Poin</strong></td>
								<td><strong>Nis</strong></td>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="d-flex justify-content-center">
					<?= $this->pagination->create_links(); ?>
				</div>
			</div>
		</div>
	</div>
