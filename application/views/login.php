<html>

<head>

    <title> Login </title>

    <script src="<?=base_url();?>assets/js/bootstrap.bundle.js"></script>

    <!-- Custom CSS -->
    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/styles.css" rel="stylesheet">

</head>

<body>
    <!-- Menu -->
    <div class="container-fluid m-0 p-0">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark p-3">
            <div class="container-fluid ms-10 p-0">
                <a class="navbar-brand" href="index.html">Lost and Found Company</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav float me-10">
                <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="berita.php">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang.php">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </li>

                </ul>
            </div>

        </nav>
    </div>

    <!-- Konten -->
    <div class="container mt-5 ms-10 p-5">
        <div class="row align-content-center">
            <div class="col-lg-7 text-left">
                <form action="<?=base_url();?>Login/login_aksi" method="POST" enctype="multipart/form-data">
                    Username:
                    <input name="username" type="text" class="form-control-plaintext border-bottom p-2" placeholder="Masukkan Username"></input>
                    <br>    
                    Password:
                    <input name="password" type="password" class="form-control-plaintext border-bottom p-2" placeholder="Masukkan Password"></input>
                    <br>    
                    <input type="submit" class="btn btn-secondary" href="#"></input>
                  </form>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div>

    <!-- Footer -->
    <div class="container-fluid m-0 p-0">
        <div class="row m-0 footer p-4 bg-dark justify-content-center ">
            <div class="col-sm-3 text-white text-center">
                Hubungi Kami :
                <div>
                    <p>Lost n Found Company <br>Tampangeng, Wajo, Indonesia<br>customerservice@lfc.com</p>
                </div>
                </il>
            </div>
        </div>
    </div>
</body>

</html>
