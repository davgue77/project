<?php
  include 'action.php';
  include 'config.php';
  session_start();
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
?>
<?php require_once "../wde2/controllerUserData.php"; ?>

<?php 

$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: ../wde2/reset-code.php');
            }
        }else{
            header('Location: ../wde2/user-otp.php');
        }
    }
}else{
    header('Location: ../wde2/login-user.php');
}
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
            max-width: 50%;
            height: auto;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        html {
          box-sizing: border-box;
        }

        * {
          box-sizing: inherit;
        }

        img {
          max-width: 100%;
          height: auto;
        }

        nav {
          background-color: #fff;
          padding: 0 3rem;
          border-radius: 0.625rem;
        }

        

        li {
          list-style-type: none;
          position: relative;
          padding: 0.625rem 0 0.5rem;
        }
        li ul {
          flex-direction: column;
          position: absolute;
          background-color: white;
          align-items: flex-start;
          transition: all 0.5s ease;
          width: 20rem;
          right: -3rem;
          top: 4.5rem;
          border-radius: 0.325rem;
          gap: 0;
          padding: 1rem 0rem;
          opacity: 0;
          box-shadow: 0px 0px 100px rgba(20, 18, 18, 0.25);
          display: none;
        }

        ul li:hover > ul,
        ul li ul:hover {
          visibility: visible;
          opacity: 1;
          display: flex;
        }

        .material-icons-outlined {
          color: #888888;
          transition: all 0.3s ease-out;
        }

        .material-icons-outlined:hover {
          color: #ff9800;
          transform: scale(1.25) translateY(-4px);
          cursor: pointer;
        }


        .profile {
          height: 3rem;
          width: auto;
          cursor: pointer;
        }

        .sub-item {
          width: 100%;
          display: flex;
          align-items: center;
          gap: 0.725rem;
          cursor: pointer;
          padding: 0.5rem 1.5rem;
        }

        .sub-item:hover {
          background-color: rgba(232, 232, 232, 0.4);
        }

        .sub-item:hover .material-icons-outlined {
          color: #ff9800;
          transform: scale(1.08) translateY(-2px);
          cursor: pointer;
        }

        .sub-item:hover p {
          color: #000;
          cursor: pointer;
        }

        .sub-item p {
          font-size: 0.85rem;
          color: #888888;
          font-weight: 500;
          margin: 0.4rem 0;
          flex: 1;
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
            <li>
            <?php

            
            $user_id = '22';

            $query = "SELECT image FROM usertable WHERE id=?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("i", $user_id);
            $stmt->execute();

            if ($stmt->error) {
                die("Error: " . $stmt->error);
            }

            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $profile = $row['image'];
            }
            ?>
            
            <a href="#">
                <img src="<?php echo $profile; ?>" class="profile"/>
            </a>
            

              <ul>
                <li class="sub-item">
                  <a href="myprofile.php">
                    <span class="material-icons-outlined"></span>
                    <p>My Profile</p>
                  </a>
                </li>
                <li class="sub-item">
                  <a href="../wde2/logout-user.php">
                    <span class="material-icons-outlined"></span>
                    <p>Logout</p>
                  </a>
                </li>
              </ul>
            </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <main id="main">
    <section id="services" class="services section-bg">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
          <div class="section-title text-center pb-30">
            <h2>Admin Dashboard</h2>
            <p>All Student Records!</p>
          </div>
        <?php if (isset($_SESSION['response'])) { ?>
        <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b><?= $_SESSION['response']; ?></b>
        </div>
        <?php } unset($_SESSION['response']); ?>
      </div>
      <!-- *************************************************************** -->
      <!-- Start First Cards -->
      <!-- *************************************************************** -->
      <div class="row">
      <div class="card-deck mb-3">
      <div class="card border-right">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <div class="d-inline-flex align-items-center">
                      <h2>
                      <?php
                          $sql = "SELECT id FROM usertable";
                          $query = $conn->query($sql);
                          echo $query->num_rows;
                      ?> 
                      </h2>
                    </div>
                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Admin Accounts</h6>
                </div>
                <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                </div>
            </div>
        </div>
      </div>
      <div class="card border-right">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <div class="d-inline-flex align-items-center">
                      <h2>
                      <?php
                          $sql = "SELECT id FROM crud";
                          $query = $conn->query($sql);
                          echo $query->num_rows;
                      ?> 
                      </h2>
                    </div>
                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Student Records</h6>
                </div>
                <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                </div>
            </div>
        </div>
      </div>
      <div class="card border-right">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <div class="d-inline-flex align-items-center">
                      <h2>
                      <?php
                          $sql = "SELECT id FROM crud WHERE gender='Male'";
                          $query = $conn->query($sql);
                          echo $query->num_rows;
                      ?> 
                      </h2>
                    </div>
                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Male Students</h6>
                </div>
                <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                </div>
            </div>
        </div>
      </div>
      <div class="card border-right">
        <div class="card-body">
            <div class="d-flex d-lg-flex d-md-block align-items-center">
                <div>
                    <div class="d-inline-flex align-items-center">
                      <h2>
                      <?php
                          $sql = "SELECT id FROM crud WHERE gender='Female'";
                          $query = $conn->query($sql);
                          echo $query->num_rows;
                      ?> 
                      </h2>
                    </div>
                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Female Students</h6>
                </div>
                <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                </div>
            </div>
        </div>
      </div>
      </div>
      </div>
      <!-- *************************************************************** -->
      <!-- End First Cards -->
      <!-- *************************************************************** -->  
    </div>
        <?php
          $query = 'SELECT * FROM crud';
          $stmt = $conn->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();
        ?>
        <table class="table table-hover" id="data-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Image</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Occupation</th>
              <th>Age</th>
              <th>Major</th>
              <th>Gender</th>
              <th>Birthdate</th>			  
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= $row['id']; ?></td>
              <td><img src="<?= $row['photo']; ?>" width="25"></td>
              <td><?= $row['name']; ?></td>
              <td><?= $row['email']; ?></td>
              <td><?= $row['phone']; ?></td>
              <td><?= $row['address']; ?></td>
              <td><?= $row['occupation']; ?></td>
              <td><?= $row['age']; ?></td>
              <td><?= $row['major']; ?></td>
              <td><?= $row['gender']; ?></td>
              <td><?= $row['birthdate']; ?></td>			  
              <td>
                <a href="details.php?details=<?= $row['id']; ?>" class="badge badge-primary p-2">Details</a> |
                <a href="action.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Do you want delete this record?');">Delete</a> |
                <a href="create.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2">Edit</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <script type="text/javascript">
  $(document).ready(function() {
    $('#data-table').DataTable({
      paging: true
    });
  });
  </script>
  
  <br> 
  <div class="section-title text-center mb-60">
        <button type="button" class="btn btn-light"><a href="create.php"><i class="bi bi-plus"></i> Create Student Record</a></button>
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
