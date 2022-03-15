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
              <th style="width: 17%;">ID Penyediaan</th>
              <th style="width: 12%;">Periode</th>
              <th>Tanggal</th>
              <th style="width: 15%;">Tegangan</th>
              <th style="width: 15%;">Arus</th>
              <th style="width: 15%;">Daya</th>
            </tr>
          </thead>
          <tbody style="border: 1px black solid; vertical-align: middle; text-align: center;">

<?php

  $no=1;
  include 'koneksi.php';
  $max=0;$min=0;
  $read = mysqli_query($koneksi, "SELECT * FROM tbl_penyediaan");

  $ambilteg = mysqli_query($koneksi, "SELECT MAX(Tegangan) AS maxteg FROM tbl_penyediaan");
  $ambilteg1 = mysqli_query($koneksi, "SELECT MIN(Tegangan) AS minteg FROM tbl_penyediaan");
  $tegangan = mysqli_fetch_array($ambilteg);
  $tegangan1 = mysqli_fetch_array($ambilteg1);
  $maxtegakhir = $tegangan['maxteg'];
  $mintegakhir = $tegangan1['minteg'];

  $ambilaru = mysqli_query($koneksi, "SELECT MAX(Arus) AS maxaru FROM tbl_penyediaan");
  $ambilaru1 = mysqli_query($koneksi, "SELECT MIN(Arus) AS minaru FROM tbl_penyediaan");
  $arus = mysqli_fetch_array($ambilaru);
  $arus1 = mysqli_fetch_array($ambilaru1);
  $maxaruakhir = $arus['maxaru'];
  $minaruakhir = $arus1['minaru'];

  $ambilday = mysqli_query($koneksi, "SELECT MAX(Daya) AS maxday FROM tbl_penyediaan");
  $ambilday1 = mysqli_query($koneksi, "SELECT MIN(Daya) AS minday FROM tbl_penyediaan");
  $daya = mysqli_fetch_array($ambilday);
  $daya1 = mysqli_fetch_array($ambilday1);
  $maxdayakhir = $daya['maxday'];
  $mindayakhir = $daya1['minday'];

  while ($row = mysqli_fetch_array($read)) {  
?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $row['IdPenyediaan']; ?></td>
              <td><?php echo $row['Periode']; ?></td>
              <td><?php echo date('d/m/Y',strtotime($row['Tanggal'])); ?></td>
              <td><?php echo $row['Tegangan']; ?></td>
              <td><?php echo $row['Arus']; ?></td>
              <td><?php echo number_format($row['Daya'],0,',','.'); ?></td>
            </tr>
          <?php } ?>
          </tbody>
          <tfoot style="border: 1px black solid; vertical-align: middle; text-align: center;">
            <tr>
              <td colspan="4">MAX</td>
              <td><?php echo $maxtegakhir ?></td>
              <td><?php echo $maxaruakhir ?></td>
              <td><?php echo number_format($maxdayakhir,0,',','.'); ?></td>
            </tr>
            <tr>
              <td colspan="4">MIN</td>
              <td><?php echo $mintegakhir ?></td>
              <td><?php echo $minaruakhir ?></td>
              <td><?php echo number_format($mindayakhir,0,',','.'); ?></td>
            </tr>
          </tfoot>
        </table><br>

        <table class="table table-bordered display nowrap data" style="width: 100%;">
          <thead style="border: 1px black solid; vertical-align: middle; text-align: center;">
            <tr>      
              <th style="width: 7%;">No</th>
              <th>Tegangan Turun</th>
              <th>Tegangan Naik</th>
              <th>Arus Turun</th>
              <th>Arus Naik</th>
              
              <th>Z1</th>
              <th>Z2</th>
              <th>M1</th>
              <th>M2</th>
              <th>M3</th>
              <th>Hasil Akhir</th>
            </tr>
          </thead>
          <tbody style="border: 1px black solid; vertical-align: middle; text-align: center;">
<?php

  $no=1;
  include 'koneksi.php';
  $max=0;$min=0;
  $read1 = mysqli_query($koneksi, "SELECT * FROM tbl_penyediaan");

  $ambilteg = mysqli_query($koneksi, "SELECT MAX(Tegangan) AS maxteg FROM tbl_penyediaan");
  $ambilteg1 = mysqli_query($koneksi, "SELECT MIN(Tegangan) AS minteg FROM tbl_penyediaan");
  $tegangan = mysqli_fetch_array($ambilteg);
  $tegangan1 = mysqli_fetch_array($ambilteg1);
  $maxtegakhir = $tegangan['maxteg'];
  $mintegakhir = $tegangan1['minteg'];

  $ambilaru = mysqli_query($koneksi, "SELECT MAX(Arus) AS maxaru FROM tbl_penyediaan");
  $ambilaru1 = mysqli_query($koneksi, "SELECT MIN(Arus) AS minaru FROM tbl_penyediaan");
  $arus = mysqli_fetch_array($ambilaru);
  $arus1 = mysqli_fetch_array($ambilaru1);
  $maxaruakhir = $arus['maxaru'];
  $minaruakhir = $arus1['minaru'];

  $ambilday = mysqli_query($koneksi, "SELECT MAX(Daya) AS maxday FROM tbl_penyediaan");
  $ambilday1 = mysqli_query($koneksi, "SELECT MIN(Daya) AS minday FROM tbl_penyediaan");
  $daya = mysqli_fetch_array($ambilday);
  $daya1 = mysqli_fetch_array($ambilday1);
  $maxdayakhir = $daya['maxday'];
  $mindayakhir = $daya1['minday'];

$read2 = mysqli_query($koneksi, "SELECT * FROM tbl_hasil");
  while ($row = mysqli_fetch_array($read2)) {  
    $tegangan1 =$row['Tegangan'];
    $arus1 =$row['Arus'];

if ($tegangan1 >= $maxtegakhir) {
      $tegangant=0 ; 
      }
      elseif ($tegangan1 >= $mintegakhir) {
        $tegangant = ($maxtegakhir - $tegangan1) / ($maxtegakhir - $mintegakhir) ;
      }
      else{
        $tegangant=1; 
      }

if ($tegangan1 > $maxtegakhir) {
      $tegangann=1; 
      }
      elseif ($tegangan1 > $mintegakhir) {
        $tegangann= ($tegangan1 - $mintegakhir) / ($maxtegakhir - $mintegakhir) ;
      }
      else{
        $tegangann=0; 
      }
            


if ($arus1 > $maxaruakhir) {
      $arust=0 ; 
      }
      elseif ($arus1 >= $minaruakhir) {
        $arust= ($maxaruakhir- $arus1) / ($maxaruakhir- $minaruakhir) ;
      }
      else{
        $arust=1; 
      }

if ($arus1 > $maxaruakhir) {
      $arusn=0; 
      }
      elseif ($arus1 > $minaruakhir) {
        $arusn= ($arus1 - $minaruakhir) / ($maxaruakhir - $minaruakhir) ;
      }
      else{
        $arusn=1; 
      }

error_reporting(0);
if ($tegangant < $arusn) {
      $a1=$tegangant ; 
      }
      else{
        $a1=$arusn; 
      }

if ($tegangant < $arust) {
      $a2=$tegangant ; 
      }
      else{
        $a2=$arust; 
      }



if ($tegangann < $arusn) {
      $a3=$tegangann ; 
      }
      else{
        $a3=$arusn; 
      }

if ($tegangann < $arust) {
      $a4=$tegangann ; 
      }
      else{
        $a4=$arust; 
      }
$a1 = number_format($a1,2);
$a2 = number_format($a2,2);
$a3 = number_format($a3,2);
$a4 = number_format($a4,2);
$z1 = $mindayakhir + (($maxdayakhir-$mindayakhir)*$a1);
$z2 = $mindayakhir + (($maxdayakhir-$mindayakhir)*$a4);
$z1 = round($z1,2);
$z2 = round($z2,2);
$M1 = (($a1*100) * pow($z1,2))/200;
$z23 = (pow($z1,3)/3);
$z22 = (pow($z1,2)/2);
$z12 = (pow($z2,2));
$pembagi = $maxdayakhir - $mindayakhir;
$hasil1 = ($z22 * 2) - ($z12);
$hasil2 =  $z23-($mindayakhir*$hasil1)/2;
$M2=(( ($hasil2*3)-pow(-$z2, 3))/($pembagi*3));
if ($M2 >35877940) {
$M2=2613933.94704;  
}
$simply1 = 0.5 *  (pow($z2, 2));
$simply2 = 0.5 *  (pow($maxdayakhir, 2));
$M3=($simply2 - $simply1) *$a4;
$A1 = $z1 * $a1;
$A2 = ($a1 + $a4) * (($z2 - $z1)/2);
$A3 = ($maxdayakhir - $z2)*$a4;
$total = ($M1 + $M2 + $M3) /($A1 + $A2 + $A3);
$total = number_format($total,0);

echo "Nilai A1 = ".$a1."<br>";
echo "Nilai A2 = ".$a2."<br>";
echo "Nilai A3 = ".$a3."<br>";
echo "Nilai A4 = ".$a4."<br>";
echo "<br>";
//$z3 =$maxdayakhir-(($maxdayakhir-$mindayakhir)*$a3);;
//$z4 =$mindayakhir+(($maxdayakhir-$mindayakhir)*$a4);;
//$sigmaz = ($z1*$a1)+($z2*$a2)+($z3*$a3)+($z4*$a4);
//echo $z4;
//$sigmaa = $a1+$a2+$a3+$a4;
//echo $sigmaz;
//$total= round(($sigmaz / $sigmaa));

?>
            <tr>
              <td><?php echo $no++ ?></td>
             
              <td><?php echo number_format($tegangant,2) ?></td>
              <td><?php echo number_format($tegangann,2) ?></td>
              <td><?php echo number_format($arust,2) ?></td>
              <td><?php echo number_format($arusn,2) ?></td>
              <td><?php echo  $z1 ?></td>
              <td><?php echo round($z2,2) ?></td>
              <td><?php echo  $M1 ?></td>
              <td><?php echo  $M2 ?></td>
              <td><?php echo  $M3 ?></td>
              <td><?php echo  $total ?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
        </center>
      </div>
    </section>
  </main>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <center>
            <div class="col-lg-12 col-md-6">
              <div class="footer-info">
                <h1>PLN TIGABINANGA
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

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.data').DataTable( {
          "scrollX": true
      } );
    });
  </script>
</body>
</html>