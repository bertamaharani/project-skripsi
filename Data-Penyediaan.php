<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PLN ULP Tigabinanga - Data Penyediaan</title>
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
          <li><a class="nav-link scrollto active" href="Data-Penyediaan.php">Data Penyediaan</a></li>
          <li><a class="nav-link scrollto" href="Proses-Fuzzy.php">Proses Fuzzy</a></li>
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
          <h2>Data Penyediaan</h2>
          <ol>
            <li><a href="Menu-Utama.php">Menu Utama</a></li>
            <li>Data Penyediaan</li>
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
              <th style="width: 12%;">Aksi</th>
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
              <td>
                <a class="btn btn-success" data-bs-toggle="modal" href="#exampleModalToggle1<?php echo $row['IdPenyediaan'];?>"><i class="bi bi-pencil-square"></i></a>
                <a href='action/Action-Penyediaan.php?proses=hapus&id=<?php echo $row['IdPenyediaan']; ?>' class='btn btn-danger'onclick="return confirm('yakin ingin menghapus?');"><i class="bi bi-trash"></i></a> 
              </td>
            </tr>

<div class="modal fade" id="exampleModalToggle1<?php echo $row['IdPenyediaan'] ?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel1" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel1" style="text-transform: uppercase;">Edit Data Penyediaan <?php echo $row['Periode'];?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="action/Action-Penyediaan.php">
          <label>ID Penyediaan :</label>
          <input type="text" name="IdPenyediaan" class="form-control" value="<?php echo $row['IdPenyediaan'];?>" readonly><br>
          <label>Periode :</label>
          <input type="number" name="Periode" class="form-control" value="<?php echo $row['Periode'];?>"><br>
          <label>Tanggal :</label>
          <input type="date" name="Tanggal" class="form-control" value="<?php echo $row['Tanggal'];?>"><br>
          <label>Teganggan (V) :</label>
          <input type="number" name="Tegangan" class="form-control" value="<?php echo $row['Tegangan'];?>" step="any"><br>
          <label>Arus (I) :</label>
          <input type="number" name="Arus" class="form-control" value="<?php echo $row['Arus'];?>"><br>
          <label>Daya (Kwatt) :</label>
          <input type="number" name="Daya" class="form-control" value="<?php echo $row['Daya'];?>">
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="submit" name="edit">Simpan Perubahan Penyediaan</button>
      </div>
      </form>
    </div>
  </div>
</div>
          <?php } ?>
          </tbody>
        </table><br>
        <center>
          <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle">Tambah Data Penyediaan Baru</a>
        </center>
      </div>
    </section>
  </main>

<form action="action/Action-Penyediaan.php" method="POST">
  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel">Tambah Data Penyediaan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <label>ID Penyediaan :</label>
          <input type="text" name="IdPenyediaan" class="form-control" placeholder="ID Penyediaan"><br>
          <label>Periode :</label>
          <input type="number" name="Periode" class="form-control" placeholder="Periode"><br>
          <label>Tanggal :</label>
          <input type="date" name="Tanggal" class="form-control"><br>
          <label>Teganggan (V) :</label>
          <input type="number" name="Tegangan" class="form-control" placeholder="Masukkan Tegangan (V)" step="any"><br>
          <label>Arus (I) :</label>
          <input type="number" name="Arus" class="form-control" placeholder="Masukkan Arus (I)"><br>
          <label>Daya (Kwatt) :</label>
          <input type="number" name="Daya" class="form-control" placeholder="Masukkan Daya (Kwatt)">
        </div>
        <div class="modal-footer">
          <input type="submit" name="simpan" class="btn btn-primary" value="Simpan Data Penyediaan">
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