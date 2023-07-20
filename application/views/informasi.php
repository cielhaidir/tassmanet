 <!-- Berita  -->
 <section class="page-section">
 	<div class="container p-5 mt-4">
 		<div class="row d-flex justify-content-center">
 			<div class="col-lg-8">
 				<div class="title text-center text-black">
 					<h1 class="mb-10">Berita Terbaru</h1>
 					<p>Ikuti terus informasi dan berita-berita terbaru tentang <b>SMA NEGERI 7 WAJO</b></p>
 				</div>
 			</div>
 		</div>
 		<div class="row gy-5 d-flex justify-content-center">
 			<div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
 				<?php
					foreach ($berita as $br) {
						echo '
				<div class="col">
					<div class="card"><img class="card-img-top d-block fit-cover img-fluid" width="317" src="' . base_url() . 'assets/img/berita/' . $br['foto'] . '">
						<div class="card-body p-4">
							<p class="text-primary card-text mb-0">Berita</p>
							<h4 class="card-title">' . $br['judul'] . '</h4>
							<p class="card-text">' . substr($br['isi_berita'], 0, 80) . '...<br><a href="informasi/berita?id_berita=' . $br['id_berita'] . '" class="text-black">
							Baca Selengkapnya</a>' . '</p>
							
							<div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="'.base_url('assets/img/admin/').$br['afoto'].'">
							<div>
								<p class="fw-bold mb-0">' . $br['nama_guru'] . '</p>
								<p class="text-muted mb-0">' . $br['date'] . '</p>
							</div>
							</div>
						</div>
					</div>
				
			</div>';
					}
					?>
 			</div>
 		</div>
 </section>

 <!-- Agenda -->
 <section class="page-section bg-smanet">
 	<div class="container mt-4">
 		<div class="row d-flex justify-content-center">
 			<div class="col-lg-8">
 				<div class="title text-center text-white">
 					<h1 class="mb-10">Agenda</h1>
 					<p>Agenda seputar <b>SMA NEGERI 7 WAJO</b></p>
 				</div>
 			</div>
 		</div>
 		<div class="row gy-5 d-flex justify-content-center">
 			<div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
 					<?php
						foreach ($agenda as $ag) {
							echo '
				<div class="col">
					<div class="card">
					<img class="card-img-top d-block fit-cover img-fluid" width="317" src="' . base_url() . 'assets/img/agenda/' . $ag['foto'] . '">
						<div class="card-body p-4">
							<p class="text-primary card-text mb-0">Agenda</p>
							<h4 class="card-title">' . $ag['judul'] . '</h4>
							<p class="card-text">' . $ag['isi_agenda'] . '	<br><a href="informasi/agenda?id_agenda=' . $ag['id_agenda'] . '" class="text-black">
							Baca Selengkapnya</a>' . '</p>
							
							<div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="'.base_url('assets/img/admin/').$ag['afoto'].'">
								<div>
									<p class="fw-bold mb-0">' . $ag['nama_guru'] . '</p>
									<p class="text-muted mb-0">' . $ag['date'] . '</p>
								</div>
							</div>
						</div>
					</div>
				</div>';
						}
						?>
 				</div>
 			</div>
 	

 </section>
 </body>

 </html>
