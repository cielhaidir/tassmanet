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
	<script src="<?= base_url(); ?>assets/js/bootstrap.bundle.js"></script>
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
	<section class="page-section">
		<div class="container p-0 d-flex justify-content-center">
			<div class="card p-3 mt-4" style="width:90%; border-radius: 15px;">
				<h1 class="section-heading text-uppercase text-center mt-5 text-dark">Lapor Pelanggaran Siswa</h1>
				<br>
				<div class="container ps-5 pe-5">
					<div class="col-lg-5 mx-auto p-2">
						<?php
						if ($message = $this->flasher->get_message()) {
							echo $message;
						}
						?>
						<form action="<?= base_url(); ?>tassmanet/pilih2" method="POST">
							<div class="text-center">Cari Automatis :</div>
							<div class="input-group mb-4" style="position: relative; z-index: 1;">
								<input name="input1" type="text" id="searchInput" class="form-control" placeholder="Cari Siswa berdasarkan Nis atau Nama"></input>
								<button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="search()">Search</button>
							</div>
							<div id="searchResults" style="display: none;">
								<select id="resultSelect" class="form-select" name="datasiswa">
									<option>-- Hasil Pencarian --</option>
								</select>
								<input type="submit" class="btn btn-secondary mt-3">
						</form>
					</div>
					<div id="manual">
					<form action="<?= base_url(); ?>tassmanet/pilih" method="POST">
						<div class="text-center mb-1 mt-1">Atau Cari Manual :</div>
						<div class="text-left">Tingkatan :</div>
						<select class="form-select" id="tingkatan" name="tingkatan" required>
							<option>Pilih Angkatan</option>
							<option value="3">Kelas 12</option>
							<option value="2">Kelas 11</option>
							<option value="1">Kelas 10</option>
						</select><br>
						<div class="text-left">Jurusan :</div>
						<select class="form-select" id="jurusan" onchange="populate(this.id, 'kelas')" required>
							<option value="">Pilih Jurusan</option>
							<option value="IPA">IPA</option>
							<option value="IPS">IPS</option>
							<option value="BAHASA">BAHASA</option>
						</select><br>
						<div class="text-left">Kelas :</div>
						<select class="form-select" name="kelas" id="kelas">
							<option>Pilih Kelas</option>
						</select><br>
						<input type="submit" class="btn btn-secondary">
					</form>
					</div>
				</div>
			</div>
			<br><br>
		</div>
		</div>
	</section>
	<script src="<?= base_url(); ?>assets/js/baru.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		function search() {
			var searchInput = $('#searchInput').val();

			$.ajax({
				url: '<?php echo site_url('tassmanet/cari'); ?>',
				method: 'POST',
				data: {
					searchInput: searchInput
				},
				dataType: 'json',
				success: function(response) {
					var resultSelect = $('#resultSelect');
					var resultsHtml = '';
					resultSelect.empty(); // Menghapus opsi sebelumnya

					if (response.length > 0) {
						for (var i = 0; i < response.length; i++) {
							var option = $('<option>').text(response[i].nis + ' ' + response[i].nama_siswa).val(response[i].nis);
							resultSelect.append(option);
						}
					
						$('#manual').hide(); 
					} else {
						var option = $('<option>').text('Tidak ada hasil yang ditemukan.');
          				// resultsHtml += 'Tidak ada hasil yang ditemukan.';
						resultSelect.append(option);
					
						$('#manual').show();
						}

					$('#searchResults').show(); // Menampilkan elemen <select>
					
					
				},
				error: function() {
					$('#searchResults').html('Terjadi kesalahan saat melakukan pencarian.');
				}
			});
		}
	</script>
	<script>
		window.addEventListener("pageshow", function(event) {
			var historyTraversal = event.persisted ||
				(typeof window.performance != "undefined" &&
					window.performance.navigation.type === 2);
			if (historyTraversal) {
				// Handle page restore.
				window.location.reload();
			}
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
