<?php
include 'config.php';
?>

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />

    <!--====== Title ======-->
    <title>PT. BPR Nusamba Pecangaan</title>
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets-root/assets-home/images/favicon.png" type="image/png" />

    <!--====== CSS Files LinkUp ======-->
    <link rel="stylesheet" href="assets-root/assets-home/css/animate.css" />
    <link rel="stylesheet" href="assets-root/assets-home/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets-root/assets-home/css/lineIcons.css" />
    <link rel="stylesheet" href="assets-root/assets-home/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets-root/assets-home/css/style.css" />
</head>

<body>
    <!-- MUSIC -->
    <script>
        function play() {
            var audio = document.getElementById("audio");
            audio.play();
        }
    </script>
    <audio id="audio" src="assets-root/assets-home/#.mp3"></audio>
    <!-- // MUSIC -->

    <!--[if IE]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
        <div class="loader">
            <div class="spinner">
                <div class="spinner-container">
                    <div class="spinner-rotator">
                        <div class="spinner-left">
                            <div class="spinner-circle"></div>
                        </div>
                        <div class="spinner-right">
                            <div class="spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->
    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets-root/assets-home/logo.png" alt="Logo" />
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="#home"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#facts"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)"></a>
                                    </li>
                                    <li data-wow-duration="1.3s" data-wow-delay="1.1s">
                                        <a href="logout.php" class="main-btn wow" data-wow-duration="1.3s" data-wow-delay="1.1s">
                                            <b>LOGOUT</b>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="main-btn" data-scroll-nav="0" href="https://instagram.com/banknusambatanjungsari" rel="nofollow">@banknusambatanjungsari</a>
                            </div> -->
                        </nav>
                        <!-- navbar -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- navbar area -->

        <div id="home" class="header-hero bg_cover" style="background-image: url(assets-root/assets-home/images/header/banner-bg.png)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="header-hero-content text-center">
                            <h3 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s"></h3>
                            <!-- <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                                Silahkan Pilih <br>Sesuai Dengan Kebutuhan Anda
                            </h2> -->
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Selamat datang Kembali!</h2>
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">di Syienta NSB Pecangaan (DEMO)</h3>
                            <a href="nusamba/production/login.php" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Laporan Bidang Operasional</a>
                            <a href="restapi/rest-client/index.php" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Laporan Bidang AO/FO</a>
                            <a href="monitoring_nasabah/index.php" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Laporan Kunjungan</a>
                            <a href="dashboard_direksi" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Dashboard Kinerja</a>
                            <a href="nusamba/production/tracking_berkas.php" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Tracking Pengajuan</a>
                            <a href="itp/" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Informasi Tunggakan Pinjaman</a>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s" value="PLAY" onclick="play()">
                                <img src="assets-root/assets-home/images/header/header-hero.png" alt="hero" />
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
                <div id="particles-1" class="particles"></div>
            </div>
            <!-- header hero -->
    </header>
    <!--====== HEADER PART ENDS ======-->

    <!--====== BRAND PART START ======-->
    <div class="brand-area pt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="
                brand-logo
                d-flex
                align-items-center
                justify-content-center justify-content-md-between
              ">
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <img src="assets-root/assets-home/images/brands/uideck.png" alt="brand" />
                        </div>
                        <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <img src="assets-root/assets-home/images/brands/ayroui.png" alt="brand" />
                        </div>
                        <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <img src="assets-root/assets-home/images/brands/graygrids.png" alt="brand" />
                        </div>
                        <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.4s">
                            <img src="assets-root/assets-home/images/brands/lineicons.png" alt="brand" />
                        </div>
                        <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <img src="assets-root/assets-home/images/brands/ecommerce-html.png" alt="brand" />
                        </div>
                        <!-- single logo -->
                    </div>
                    <!-- brand logo -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!--====== BRAND PART ENDS ======-->
    <!--====== SERVICES PART START ======-->
    <!--====== VIDEO COUNTER PART START ======-->
    <section id="facts" class="video-counter pt-70">
        <div class="container">
            <div class="row">

            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!--====== VIDEO COUNTER PART ENDS ======-->
    <!--====== FOOTER PART START ======-->
    <footer id="footer" class="footer-area pt-120">
        <div class="container">
            <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subscribe-content mt-45">
                            <h2 class="subscribe-title">
                                Terkendala Masalah? <span>Hubungi Team IT</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <div class="subscribe-form mt-50">
                            <form action="#">
                                <input type="text" placeholder="Ketikan masalah/bug" />
                                <button class="main-btn">Kirim</button>
                            </form>
                        </div> -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- subscribe area -->
            <div class="footer-widget pb-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <!-- <a class="logo" href="javascript:void(0)">
                                <img src="assets-root/assets-home/images/logo/logo-2.png" alt="logo" />
                            </a>
                            <p class="text">
                                Lorem ipsum dolor sit amet consetetur sadipscing elitr, sederfs diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.
                            </p> -->
                            <ul class="social">
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-facebook-filled"> </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-twitter-filled"> </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-instagram-filled"> </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-linkedin-original"> </i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- footer about -->
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <div class="footer-link d-flex mt-50 justify-content-sm-between">
                            <!-- <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="title">Quick Link</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="javascript:void(0)">Coming Soon</a></li>
                                    <li><a href="javascript:void(0)">Coming Soon</a></li>
                                    <li><a href="javascript:void(0)">Coming Soon</a></li>
                                    <li><a href="javascript:void(0)">Coming Soon</a></li>
                                    <li><a href="javascript:void(0)">Coming Soon</a></li>
                                </ul>
                            </div> -->
                            <!-- footer wrapper -->
                            <!-- <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="title">Resources</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="javascript:void(0)">Coming Soon</a></li>
                                    <li><a href="javascript:void(0)">Coming Soon</a></li>
                                    <li><a href="javascript:void(0)">Coming Soon</a></li>
                                    <li><a href="javascript:void(0)">Coming Soon</a></li>
                                    <li><a href="javascript:void(0)">Coming Soon</a></li>
                                </ul>
                            </div> -->
                            <!-- footer wrapper -->
                        </div>
                        <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-12">
                        <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">Hubungi Kami</h4>
                            </div>
                            <ul class="contact">
                                <li>0811-2752-332</li>
                                <li>nsbpecangaan@gmail.com</li>
                                <li>www.nsbpecangaan.com</li>
                                <li>
                                    Jl Raya Pecangaan No. 62 Pecangaan Jepara
                                </li>
                            </ul>
                        </div>
                        <!-- footer contact -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- footer widget -->
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright d-sm-flex justify-content-between">
                            <div class="copyright-content">
                                <p class="text">
                                    Designed and Developed by
                                    <a href="#" rel="nofollow">IT Bank Nusamba Tanjungsari</a>
                                </p>
                            </div>
                            <!-- copyright content -->
                        </div>
                        <!-- copyright -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- footer copyright -->
        </div>
        <!-- container -->
        <div id="particles-2"></div>
    </footer>
    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->
    <a href="#" class="back-to-top"> <i class="lni lni-chevron-up"> </i> </a>
    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== Javascript Files ======-->
    <script src="assets-root/assets-home/js/bootstrap.bundle.min.js"></script>
    <script src="assets-root/assets-home/js/wow.min.js"></script>
    <script src="assets-root/assets-home/js/glightbox.min.js"></script>
    <script src="assets-root/assets-home/js/count-up.min.js"></script>
    <script src="assets-root/assets-home/js/particles.min.js"></script>
    <script src="assets-root/assets-home/js/main.js"></script>
</body>

</html>
