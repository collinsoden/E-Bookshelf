<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Register | E-BookShelf</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- Favicons -->
        <link href="../assets/img/favicon.png" rel="icon">
        <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="../assets/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="logo">
                    <h1><a href="../">E-Bookshelf</a></h1>
                </div>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="../ " href="index.php">Home</a></li>
                        <li><a href="../#features">Features</a></li>
                        <li><a href="../#about">About</a></li>
                        <li class="dropdown"><a href="#"><span>Portal</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="../login">Login</a></li>
                                <li><a href="#">Register</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->
            </div>
        </header>
        <!-- End Header -->
        <!-- ======= Hero Section ======= -->
        <section class="hero-section" id="hero">
            <div class="wave">
                <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 hero-text-image">
                        <div class="row">
                            <div class="col-lg-8 text-center text-lg-start text-white">
                                <h1 data-aos="fade-right text-white text-sm">Create
                                    Account</h1>
                                <?php
                            if (isset($_GET['err'])) {
                                $errorMsg = html_entity_decode(trim($_GET['err']));
                                echo "<p class='text-danger'><i class='fa fa-exclamation-triangle'> </i> $errorMsg</p>";
                            } elseif (isset($_GET['msg'])) {
                                $errorMsg = html_entity_decode(trim($_GET['msg']));
                                echo "<p class='text-success'><i class='fa fa-check'> </i> $errorMsg</p>";
                            }
                            ?>
                                <p id="message"></p>
                                <p class="mb-5" data-aos="fade-right" data-aos-delay="100">
                                <form action="../resolveAccount/" method="post">
                                    <?php
                                $registerFormToken = mt_rand() . mt_rand() . mt_rand();
                                $_SESSION['registerFormToken'] = $registerFormToken;
                                ?>
                                    <div class="col-md-4 form-group d-flex">
                                        <input type="hidden" name="registerForm" value="<?= $registerFormToken ?>">
                                        <input type="text" class="form-control rounded col-md-3" name="username" placeholder="Choose Username" required>
                                        &nbsp;<input type="email" class="form-control rounded col-md-3 mt-1" name="emailAddr" placeholder="Enter Email Address" required>
                                    </div>
                                    <div class="col-md-4 form-group d-flex">
                                        <input type="password" class="form-control mt-1 rounded col-md-3" name="password" id="password" placeholder="Create Password" required onkeyup="check();">
                                        &nbsp;<input type="password" class="form-control mt-1 rounded col-md-3" id="confirmPass" placeholder="Confirm Password" required onkeyup="check();">
                                    </div>
                                    <button data-aos="fade-right" class="btn btn-info mt-4" type="submit" id="submitBtn" data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">Proceed</button>
                                </form>
                                <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
                                    Already have an account?
                                    <a href="../login/" class="btn btn-sm btn-outline-white mt-4">Login</a>
                                </p>
                                </p>
                            </div>
                            <div class="col-lg-4 iphone-wrap mt-12">
                                <img src="../assets/img/register.png" alt="Image" class="phone-1" data-aos="fade-right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Hero -->
        <?php include("../sections/about.php"); ?>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>
        <!-- Vendor JS Files -->
        <script src="../assets/vendor/aos/aos.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="../assets/vendor/php-email-form/validate.js"></script>
        <!-- Template Main JS File -->
        <script src="../assets/js/main.js"></script>
        <script>
        var check = function() {
            var conf = document.getElementById('confirmPass').value;
            var pass = document.getElementById('password').value;
            var msgTab = document.getElementById('message');
            var submitBtn = document.getElementById('submitBtn');
            if (pass == conf) {
                msgTab.style.color = 'white';
                msgTab.innerHTML = conf;
                // msgTab.innerHTML = 'Password and Confirmation match';
                submitBtn.style.display = 'block';
            } else if (conf != '') {
                msgTab.style.color = 'red';
                msgTab.innerHTML = 'Check Confirm Password field, passwords do not match.';
                submitBtn.style.display = 'none';
            } else {

            }
        }
        </script>
    </body>

</html>