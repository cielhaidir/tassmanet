<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Tassmanet</title>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/fontawesome-all.min.css">

</head>

<body>
	
	<section class="bg-smanet">
		<div class="container py-5">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-12 col-md-8 col-lg-6 col-xl-5">
					<div class="card custom_1 text-white" style="border-radius: 1rem;">

						<div class="card-body p-5">
							<form action="<?= site_url(); ?>Auth/aksi_login" method="post">
								<div class="d-flex justify-content-center">
									<img src="<?= site_url() ?>assets/img/logos/Sman7.png" style="width: 100px; align-content: center;">
								</div>
								<div class="mb-md-5 mt-4 pb-2 text-dark ">

									<h2 class="fw-bold text-uppercase text-dark  text-center">Login</h2>
									<p class="mb-2 text-dark  text-center">Masukkan Username dan Password</p>
									<?php
									if ($message = $this->flasher->get_message()) {
										echo $message;
									}
									?>
									<div class="form-outline form-white mb-4 text-dark">
										<label for="typeEmailX">NIP</label>
										<input type="text" id="typeEmailX" class="form-control form-control-lg" name="username" />
									</div>

									<div class="form-outline form-white mb-4 text-dark">
										<label for="typePasswordX">Password</label>
										<input type="password" id="typePasswordX" class="form-control form-control-lg" name="password"/>
									</div>
									<div class="d-flex mb-2 align-items-center">
										<label class="control control--checkbox mb-0">
											<input type="checkbox" checked="checked" />
											<span class="caption">Remember me</span>
											<div class="control__indicator"></div>
										</label>
									</div>

									<input type="submit" class="btn btn-secondary" value="Login"></input>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

</html>
