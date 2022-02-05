<?php
  require 'function.php';
  $buku = query("SELECT * FROM db_tokobuku");

  if (isset($_POST['cari'])) {
    $buku = cari($_POST['keyword']);
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Maulana Amir Arif 1904030048</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.png" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="services.php">Product</a></li>
            <li class="nav-item"><a class="nav-link" href="portfolio.php">Pelanggan</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Comment</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
      <div class="container">
        <div class="masthead-subheading">Welcome To</div>
        <div class="masthead-heading text-uppercase">Kang Arif Book Store</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Kunjungi Alamat Lengkap Toko Kami</a>
      </div>
    </header>

    <!-- Services-->
    <section class="page-section" id="services">
      <div class="container justify-content-center">
        <div class="row">
          <div class="col">
            <img class="rounded" src="assets/img/foto-toko.jpg" width="600" alt="">
          </div>
          <div class="col m-5 pt-5">
            <div class="masthead-heading text-uppercase mb-4">
              <h3>Kang Arif Book Store</h3> 
            </div>
            <h3>Jalan. Raya Tanara, No.45 Kp.Muncung, Kec.Kronjo, Kab.Tangerang - Banten.</h3>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer fw-bold bg-secondary py-4">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 mt-3 text-lg-start">
            <p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> Kang Arif Book Store</p>
          </div>
          <div class="col-lg-4 my-3 my-lg-0">
            <a class="btn btn-info btn-social mx-2" href="https://wa.me/6285213849075"><i class="fab fa-whatsapp"></i></a>
            <a class="btn btn-info btn-social mx-2" href="https://www.facebook.com/kangarif.eid"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-info btn-social mx-2" href="https://instagram.com/kangarif.id"><i class="fab fa-instagram"></i></a>
            <a class="btn btn-info btn-social mx-2" href="https://github.com/kangarifeid"><i class="fab fa-github"></i></a>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
            <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>