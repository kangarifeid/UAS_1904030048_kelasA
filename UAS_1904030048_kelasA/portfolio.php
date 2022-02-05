<?php
  require 'function.php';
  $pelanggan = query("SELECT * FROM db_pelanggan");

  if (isset($_POST['search'])) {
    $pelanggan = search($_POST['keyword']);
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
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top" id="mainNav">
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

    <!-- Portfolio -->
    <section class="page-section" id="portfolio">
      <div class="container justify-content-center">
        <div class="text-center mt-5">
          <h2 class="section-heading text-uppercase">DATA PELANGGAN</h2>
          <h3 class="section-subheading text-muted">Selamat Datang Di Kang Arif Book Store</h3>
        </div>

        <div class="row">
          <div class="col px-3">
            <form method="POST" action="">
              <div class="input-group mb-3">
                <input type="text" id="keyword" name="keyword" class="form-control input-text" placeholder="Cari Nama Pelanggan ..." autocomplete="off" aria-label="Recipient's username" aria-describedby="basic-addon2"/>
                <div class="input-group-append">
                  <button class="btn btn-outline-warning btn-lg" type="submit" name="search"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <table class="table table-striped text-center mt-5">
          <thead><hr>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Kode Pelanggan</th>
              <th scope="col">Nama Pelanggan</th>
              <th scope="col">Email</th>
              <th scope="col">Alamat</th>
              <th scope="col">Nomor Hp</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>

          <?php if (empty($pelanggan)) : ?>
            <tr>
              <td colspan="4" class="alert alert-danger text-center" role="alert">
                <p>Data Pelanggan Tidak Ditemukan</p>
              </td>
            </tr>
          <?php endif; ?>

          <tbody>
            <?php $no = 1; ?>
              <?php foreach ($pelanggan as $pelanggann) : ?>
                <tr>
                  <th scope="row"><?php echo $no; ?></th>
                  <td><?php echo $pelanggann['kd_pelanggan']; ?></td>
                  <td><?php echo $pelanggann['nama_pelanggan']; ?></td>
                  <td><?php echo $pelanggann['email']; ?></td>
                  <td><?php echo $pelanggann['alamat']; ?></td>
                  <td><?php echo $pelanggann['no_hp']; ?></td>
                  <td><a href="detail_pelanggan.php?id=<?= $pelanggann['id']; ?>" class="btn btn-warning" role="button">Detail</a></td>
                </tr>
                <?php $no++ ?>
            <?php endforeach ?>
          </tbody>
        </table>
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
