<?php
  require 'function.php';

  $id = $_GET['id'];
  $buku = query("SELECT * FROM db_tokobuku WHERE id = $id");
  if (isset($_POST['edit'])) {
    if (edit($_POST) > 0) {
      echo "
      <script>
        alert('Data Berhasil di Edit..!');
        document.location.href='detail_buku.php'
        </script>
        ";
    } else {
      echo "
      <script>
        alert('Data Gagal di Edit..!');
        </script>
        ";
    }
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

    <!-- Services-->
    <section class="page-section" id="services">
      <div class="container justify-content-center">
        <div class="text-center mt-5">
          <h2 class="section-heading text-uppercase">EDIT DATA PRODUK</h2>
          <h3 class="section-subheading text-muted">Selamat Berbelanja, Beli Buku Yang Anda Cari Disini.</h3>
        </div>

        <div class="row">
          <div class="col px-3">
            <form method="POST" action="">
              <input type="hidden" class="form-control" value="<?= $buku['id'] ?>" name="id">
              <div class="form-group">
                <label for="kd_buku" class="form-label mt-2">Kode Buku : </label>
                <input type="text" class="form-control" id="kd_buku" value="<?= $buku['kd_buku'] ?>" placeholder="Kode Buku" name="kd_buku" autofocus required autocomplete="off">
              </div>
              <div class="form-group">
                <label for="judul_buku" class="form-label mt-2">Judul Buku : </label>
                <input type="text" class="form-control" id="judul_buku" value="<?= $buku['judul_buku'] ?>" placeholder="Judul Buku" name="judul_buku" required autocomplete="off">
              </div>
              <div class="form-group">
                <label for="harga_buku" class="form-label mt-2">Harga Buku : </label>
                <input type="text" class="form-control" id="harga_buku" value="<?= $buku['harga_buku'] ?>" placeholder="Harga Buku" name="harga_buku" required autocomplete="off">
              </div>
              <div class="form-group">
                <label for="stok_buku" class="form-label mt-2">Stok Buku : </label>
                <input type="text" class="form-control" id="stok_buku" value="<?= $buku['stok_buku'] ?>" placeholder="Stok Buku" name="stok_buku" required autocomplete="off">
              </div>
              <div class="form-group">
                <label for="gambar_buku" class="form-label mt-2">Upload Image :</label>
                <input class="form-control" type="file" id="gambar_buku" value="<?= $buku['gambar_buku'] ?>" placeholder="Gambar Buku" name="gambar_buku" required autocomplete="off">
              </div>
              <button type="tambah" class="btn btn-warning mt-3" name="edit">Simpan</button>
              <a href="detail_buku.php" class="btn btn-info mt-3" role="button">Kembali</a>
            </form>
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
