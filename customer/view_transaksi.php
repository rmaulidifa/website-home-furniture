<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home Furniture</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.php">Home Furniture</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> -->
          <li><a class="nav-link scrollto " href="index.php">Produk</a></li>
          <li><a class="nav-link scrollto" href="order.php">Order</a></li>
          <!-- <li><a class="nav-link scrollto" href="faq.php">FAQ</a></li> -->
          <li><a class="nav-link scrollto" href="review.php">Review</a></li>
          <li class="nav-item">
                    <a class="nav-link" href="../index.php">Log Out</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Selamat Berbelanja</h1>
      <h2>The Best Simple Place Where You Discover Most Wonderful Furniture
        and Make Your Home Beautiful</h2>
      <a href="#produk" class="btn-get-started scrollto">Get Started</a>
    </div> -->
  <!-- </section>End Hero -->

  <!-- <main id="main"> -->


      <!-- ======= Produk Section ======= -->
    <section id="transaksi" class="transaksi">
    <!-- <div style="margin-top:2%"> -->
      <div class="container">

      <!-- <div style="margin-left:0%"> -->
        <!-- <div style="margin-right:5%"> -->
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div style="margin-top:2%">
                    <h1 class="card-title"><center>DETAIL TRANSAKSI</center></h1>
                    <p class="card-description"><center>Please fill in this form to transaction.</center></p>
                    <!-- <form class="forms-sample"> -->
                    <form action="edit_transaksi.php" method="POST">
                    <div class="form-group">
                        <label for="id_trans">ID Transaksi</label>
                        <input type="text" class="form-control" id="id_trans" placeholder="Masukkan ID Transaksi" name="id_trans">
                      </div>
                    <div class="form-group">
                        <label for="nama_customer">Nama Customer</label>
                        <input type="text" class="form-control" id="nama_customer" placeholder="Masukkan Nama" name="nama_customer">
                      </div>
                      
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Masukkan Jumlah" name="alamat">
                      </div>
                      
                      <div class="form-group">
                        <label for="jasa_kirim" >Jasa Kirim</label>
                        <!-- <input class="col-md-12"> -->
                        <br>
                        <select id="jasa_kirim" name="jasa_kirim">
                            <option value="1">JNT EXPRESS
                            </option>
                            <option value="2">JNT ECO
                            </option>
                            <option value="3">JNT SUPER
                            </option>
                            <option value="4">JNE REG
                            </option>
                            <option value="5">JNE TRUCKING/JTR
                            </option>
                            <option value="6">SI CEPAT REGULER
                            </option>
                            <option value="7">SI CEPAT HALU
                            </option>
                            <option value="8">ANTERAJA REGULER
                            </option>
                            <option value="9">ANTERAJA SAME DAY
                            </option>
                            <option value="10">ANTERAJA NEXT DAY
                            </option>
                        </select>
                        
                      </div>

                      <div class="form-group">
                        <label for="tanggal">Tanggal Order</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                      </div>

                      <br>
                      <button type="submit" class="btn btn-primary mr-2" >Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
               
            </div>
    </div>
    </section><!-- End Contact Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-3 col-md-6">
              <div class="footer-info">
                <h3>Home Furniture</h3>
                <p>
                  Malang, Indonesia <br>
                  <strong>Phone:</strong> 081234567890<br>
                  <strong>Email:</strong> homefurniture@crew.com<br>
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Customer Services</a></li>
              </ul>
            </div>
  
            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Our Newsletter</h4>
              <p></p>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>
  
            </div>
  
          </div>
        </div>
      </div>
  
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Home Furniture</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="instagram.com/rmaulidifa">Renisa Maulidifa</a>
        </div>
      </div>
    </footer><!-- End Footer -->
  
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
  
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  
  </body>
  
  </html>