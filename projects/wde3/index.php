<?php require_once "../wde2/controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: ../wde2/login-user.php');
}
?>

<?php
  include 'upload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CS210 - David Guerra - Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../assets/img/favicon.png" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Ninestars - v4.10.0
    * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style>
        body, html {
            height: 100%;
        }   

        .bg {
            /* Full height */
            height: 50%;
            witdh: 50%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

            /* The image used */            
        }

        img {
            border-radius: 8px;
            max-width: 100%;
            height: auto;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

    </style>

</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html"><img src="../../assets/img/slogon.png" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto active" href="http://davgue77.byethost11.com/">Home</a></li>
            <li><a class="nav-link scrollto" href="http://davgue77.byethost11.com/#about">About Me</a></li>
            <li><a class="nav-link scrollto" href="http://davgue77.byethost11.com/#services">Interests</a></li>
            <li><a class="nav-link scrollto" href="http://davgue77.byethost11.com/#portfolio">Projects</a></li>
            <li><a class="nav-link scrollto" href="http://davgue77.byethost11.com/#contact">Contact Me</a></li>
            
            <li><a type="button" class="getstarted scrollto" href="logout-user.php">Logout</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <main id="main">
    <section id="services" class="services section-bg">
<!-- STARTS HERE THE DISPLAYING -->
<div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
        <form action="../wde2/new-password.php" method="POST" autocomplete="off">
                            <?php 
                            if(isset($_SESSION['info'])){
                                ?>
                                <div class="alert alert-success text-center">
                                    <?php echo $_SESSION['info']; ?>
                                </div>
                                <?php
                            }
                            ?>
                            <?php
                            if(count($errors) > 0){
                                ?>
                                <div class="alert alert-danger text-center">
                                    <?php
                                    foreach($errors as $showerror){
                                        echo $showerror;
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="form-group">
                                <input class="form-control" type="password" name="password" placeholder="Create new password" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="cpassword" placeholder="Confirm your password" required>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" style="background-color:#5777ba; border-color:#5777ba" type="submit" name="change-password" value="Change">
                            </div>
                        </form>

                        
            </div>
        </div>
    </div>

        
        <div class="section-title text-center mb-60">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <div class="form-group row center">
          <div class="col-xs-2">
            <input class="form-control" type="hidden" name="oldimage" value="<?= $photo; ?>">
            <input class="form-control" type="file" name="image" class="custom-file">
            </div>
          </div>
        </div>
        <button type="submit" name="upload" class="btn btn-light" style="color: #5777ba;"><i class="bi bi-plus"></i>Upload Image</button>

        </form>
        <br>
        <div class="section-title text-center mb-60">
            <button type="button" class="btn btn-light"><a href="index.php"><i class="bi bi-backspace"></i> Back</a></button>
        </div>
        </div>
  </section>
  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <img src="../../assets/img/cubs.png" class="img-fluid animated" alt="">
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="http://davgue77.byethost11.com/">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="http://davgue77.byethost11.com/#about">About Me</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="http://davgue77.byethost11.com/#services">Interests</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="http://davgue77.byethost11.com/#portfolio">Projects</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="http://davgue77.byethost11.com/#contact">Contact Me</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Quick Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="https://www.youtube.com/" target="_blank">YouTube</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="https://www.twitch.tv/" target="_blank">Twitch</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="https://twitter.com/" target="_blank">Twitter</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="https://web.whatsapp.com/" target="_blank">Whatsapp</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>My Social Media Links</h4>
          <p>These are some of my Social Media Links on where you can contact me personally.</p>
          <div class="social-links mt-3">
            <a href="https://wa.me/5016374148/" target="_blank" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
            <a href="https://www.instagram.com/wtf.hamster/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="https://join.skype.com/invite/mGvdz8uto4Dy" target="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong><span>Ninestars</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
      Download Link: <a href="https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/download/" target="_blank">Ninestars</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../../assets/vendor/aos/aos.js"></script>
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../../assets/js/main.js"></script>

</body>

</html>
