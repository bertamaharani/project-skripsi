<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PLN ULP Tigabinanga - Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body style="background-color: #ffc451;">

  <main id="main">
    <center>
      <form method="post" action="action/Cek-Login.php">
        <section id="services" class="services">
          <div class="container" data-aos="fade-up">
            <div class="row">
              <div class="col-lg-12 col-md-12 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                  <div class="row">
                    <div class="form-group mt-3">
                      <h1 style="color: black; margin-bottom: -4px; "><b>LOGIN SISTEM</b></h1><br>
                    </div>
                    <hr>
                      <div class="form-group mt-3">
                        <h5 style="text-align: left;">Username</h5>
                        <input type="text" class="form-control" name="Username" placeholder="Masukkan Username Anda" required>
                      </div>
                      <div class="form-group mt-3">
                        <h5 style="text-align: left;">Password</h5>
                        <input type="password" class="form-control" name="Password" placeholder="Masukkan Password Anda" required>
                      </div>
                      <center>
                        <h4 style="color: red; font-size: 15px;">
                            <?php
                             if(isset($_GET['pesan'])){
                             if($_GET['pesan'] == "gagal"){
                             echo "Login gagal! username atau password salah!";
                             }else if($_GET['pesan'] == "logout"){
                             echo "Anda telah berhasil logout";
                             }else if($_GET['pesan'] == "belum_login"){
                             echo "Anda harus login untuk mengakses halaman admin";
                             }
                             }
                            ?>
                        </h4>
                      </center><br>
                    <div class="text-center"><br>
                      <button class="btn btn-primary" style="width: 150px;">Login</button>&nbsp; &nbsp; &nbsp;
                      <button type="reset" class="btn btn-danger" style="width: 150px;">Batal</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </form>
    </center>
  </main>

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