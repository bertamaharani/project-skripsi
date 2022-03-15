<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PLN ULP Tigabinanga - Proses Fuzzy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/dataTables.bootstrap5.min.css" rel="stylesheet">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="js/jquery-3.5.1.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap5.min.js"></script>
</head>
<body>

  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">
      <h1 class="logo me-auto me-lg-0"><a href="Menu-Utama.php">PLN ULP Tigabinanga</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="Menu-Utama.php#hero">Menu Utama</a></li>
          <li><a class="nav-link scrollto" href="Menu-Utama.php#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="Data-Penyediaan.php">Data Penyediaan</a></li>
          <li><a class="nav-link scrollto active" href="Proses-Fuzzy.php">Proses Fuzzy</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <a href="action/Logout.php" class="get-started-btn scrollto">Logout</a>
    </div>
  </header>

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Proses Fuzzy Mamdani</h2>
          <ol>
            <li><a href="Menu-Utama.php">Menu Utama</a></li>
            <li>Proses Fuzzy Mamdani</li>
          </ol>
        </div>
      </div>
    </section>

    <section class="inner-page">
      <div class="container">
        <table class="table table-bordered display nowrap data" style="width: 100%;">
          <thead style="border: 1px black solid; vertical-align: middle; text-align: center;">
            <tr>      
              <th style="width: 7%;">No</th>
              <th>ID Penyediaan</th>
              <th>Periode</th>
              <th>Tanggal</th>
              <th>Tegangan</th>
              <th>Arus</th>
              <th>Daya</th>
            </tr>
          </thead>
          <tbody style="border: 1px black solid; vertical-align: middle; text-align: center;">

<?php
  $no=1;
  include 'koneksi.php';
  $read = mysqli_query($koneksi, "SELECT * FROM tbl_penyediaan");
  while ($row = mysqli_fetch_array($read)) {  
?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $row['IdPenyediaan']; ?></td>
              <td><?php echo $row['Periode']; ?></td>
              <td><?php echo date('d/m/Y',strtotime($row['Tanggal'])); ?></td>
              <td><?php echo $row['Tegangan']; ?></td>
              <td><?php echo $row['Arus']; ?></td>
              <td><?php echo $row['Daya']; ?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table><br>
        <center>
          <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" href="Action-Fuzzy.php">Proses Fuzzy Mamdani</a>
        </center>
      </div>
    </section>
  </main>

<form action="action/Action-Fuzzy.php" method="POST">
  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Memprediksi Jumlah Daya Listrik Dengan Metode Fuzzy Mamdani</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label>Periode :</label>
          <input type="number" name="Periode" class="form-control" placeholder="Masukkan Periode"><br>
          <label>Tegangan (V) :</label>
          <input type="text" name="Tegangan" class="form-control" placeholder="Masukkan Tegangan (V)"><br>
          <label>Arus (I) :</label>
          <input type="number" name="Arus" class="form-control" placeholder="Masukkan Arus (I)"><br>
          <label>Daya (Kwatt) :</label>
          <input type="number" class="form-control" placeholder="??" readonly>
        </div>
        <div class="modal-footer">
          <input type="submit" name="simpan" class="btn btn-primary" value="Proses Fuzzy Mamdani">
        </div>
      </div>
    </div>
  </div>
</form>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <center>
            <div class="col-lg-12 col-md-6">
              <div class="footer-info">
                <h1>PLN ULP TIGABINANGA
                <p>
                  Jln. RuamTigabinanga, Tigabinanga, Tiga Binanga, Kabupaten Karo, Sumatera Utara 22162
                </p>
              </div>
            </div>
          </center>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Universitas Methodist Indonesia</span></strong>
      </div>
      <div class="credits">
        Designed by <a href="#">Berta Maharani Waruhu</a>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.data').DataTable( {
          "scrollX": true
      } );
    });
  </script>


  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>