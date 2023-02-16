<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicons -->

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="signin.css">

    <link href="signin.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">

            </div>

        </div>
    </div>

    <!-- ======= Header ======= -->

    <header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <ul>
                    <li> <img src="assets/img/jiam-logo.png"> </li>J.I.A.M CHURCH
                </ul>


            </div>

            <nav id="navbar" class="navbar">
                <ul>

                    <li><a class="nav-link scrollto" href="about.html">ABOUT jIAM</a></li>
                    <li><a class="nav-link scrollto" href="services.html">SERVICE TIMES</a></li>
                    <li><a class="nav-link scrollto " href="storr.html">STORE</a></li>
                    <li><a class="nav-link scrollto" href="sign in.php">SIGN IN</a></li>
                    <li><a class="nav-link scrollto" href="give.html">GIVE</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <section class="two">
        <p class="signin">SIGN IN </p>
        <?php
            if( isset( $_GET['error'])){?>
        <div class="error" role="alert">
            <?php echo $_GET['error'];?>
        </div>
        <?php } ?>
        <?php if (isset($_GET['success'])){?>
        <div class="success" role="alert">
            <?php echo $_GET['success']; ?>
        </div>
        <?php }?>
    </section>
    <section class="form">


        <form action="mainsignin.php" method="POST" class="formsignin">
            <p>Enter Your Details Below to Register</p>


            <div class="namess">
                <div class="input-field">
                    <label>First Name:</label>
                    <input type="text" placeholder="First Name" required name="Firstname"
                        value="<?php echo (isset($_GET['Firstname']))?$_GET['Firstname']: ""?>">
                </div>

                <div class="input-field">
                    <label>Last Name</label>
                    <input type="text" placeholder="Last Name" required name="Lastname"
                        value="<?php echo (isset($_GET['Lastname']))?$_GET['Lastname']: ""?>">
                </div>
            </div>

            <div class="input-field">
                <label>Email:</label>
                <input type="email" class="email" placeholder="Enter your Email" required name="Email"
                    value="<?php echo (isset($_GET['Email']))?$_GET['Email']: ""?>">
            </div>

            
            <div class="input-field">
                <label>Password:</label>
                <input type="password" class="password" placeholder="Password" required name="Password"
                    value="<?php echo (isset($_GET['Password']))?$_GET['Password']: ""?>">
            </div>

            <div class="input-field">
                <label>Confirmpassword:</label>
                <input type="password" class="Cpassword" placeholder="Confirm password" required name="Confirmpassword"
                    value="<?php echo (isset($_GET['Confirmpassword']))?$_GET['Confirmpassword']: ""?>">
            </div>
            <div class="check">
                <input type="checkbox" class="Checkbox">
                <p>Sign Up For Our Email weekly newsletter</p>
            </div>
            <div class="cat">
                <input type="checkbox" class="Checkbox" required>
                <p> I agree To the terms of Service and Privacy Policy</p>
            </div>
            <div class=" btn">
                <button class="submit" type="submit" name="btn">
                    <span class="btnText">CREATE MY ACCOUNT</span>
                    <i class="uil uil-navigator"></i></button>
            </div>
            <hr>

        </form>
        <p>ALREADY HAVE AN ACCOUNT?</p>
        <a href="Login.php"><button>SIGN IN</button></a>
    </section>
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="watch.html">watch</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">
                                    <h7>Live Stream</h7>
                                </a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="visit.html">VISIT</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="about.html">JIAM EXPERIENCE</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="about.html">Location/directions</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html">Time/speaking schedule</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">

                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="connect.html">CONNECT</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="give.html">Give</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="give.html">Mission</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="app.html">Android</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">

                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="grow.html">GROW</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="kids.html">New Beginnings</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kids Life</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marriage</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">NextGen</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Classes and Events</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="care.html"></a>CARE</li>

                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4></h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">STORE</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">My Account</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Shopping Card</a></li>


                        </ul>
                    </div>





                </div>
            </div>
        </div>



        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>J.I.A.M Church</span></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="https://.com/">KENNEDY OKONDA</a>
            </div>
        </div>
    </footer><!-- End Footer -->
    <section id="soc" class="soc">
        <div class="social-links">
            <ul>
                <li>
                    <a href="#"><img src="assets/img/insta.jpg" alt="" /></a>
                </li>
                <li>
                    <a href="https://www.facebook.com"><img src="assets/img/facebook.jpg" alt="" /></a>
                </li>
                <li>
                    <a href="https://www.facebook.com"><img src="assets/img/facebook.jpg" alt="" /></a>
                </li>
                <li>
                    <a href="https://www.facebook.com"><img src="assets/img/facebook.jpg" alt="" /></a>
                </li>
                <li>
                    <a href="#"><img src="assets/img/wozup.jpg" alt="" /></a>
                </li>
            </ul>
        </div>
    </section>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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