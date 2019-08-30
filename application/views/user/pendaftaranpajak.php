<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pendaftaran pajak</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?= base_url('img/bwi.png'); ?>">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?= base_url('assets/biz/lib/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?= base_url('assets/biz/lib/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/biz/lib/animate/animate.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/biz/lib/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/biz/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/biz/lib/lightbox/css/lightbox.min.css'); ?>" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?= base_url('assets/biz/css/style.css'); ?>" rel="stylesheet">

    <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body class="hold-transition skin-blue layout-top-nav">
    <header id="header">
        <div class="container-fluid">
            <div id="logo" class="pull-left">
                <h1 class="text-white" style="font-family: Vendana;"><img src="<?= base_url('img/bwi.png'); ?>" width="70" height="70"> VilDev</h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="<?= site_url('user/Homeuser'); ?>">Home</a></li>
                    <li class="menu-has-children"><a href="">Informasi Desa</a>
                        <ul>
                            <li><a href="<?= site_url('user/Homeuser/beritauser'); ?>">Berita Desa</a></li>
                            <li><a href="<?= site_url('user/Homeuser/eventuser'); ?>">Event Desa</a></li>
                            <li><a href="#">Kegiatan Desa</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="">Hasil Desa</a>
                        <ul>
                            <li><a href="#">Makanan Tradisional</a></li>
                            <li><a href="#">Kerajinan Desa</a></li>
                            <li><a href="#">Usaha Desa</a></li>
                            <li><a href="">Oleh oleh Khas Desa</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="">Pariwisata Desa</a>
                        <ul>
                            <li><a href="#">Wisata Desa</a></li>
                            <li><a href="#">Wisata Kuliner Desa</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="">Kependudukan</a>
                        <ul>
                            <li><a href="#">Permintaan surat</a></li>
                            <li><a href="#">Pendaftaran Perpajakan</a></li>
                            <li><a href="#">Data Pemenerima Bantuan</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="" style="color: white;"><?= $this->session->userdata('username'); ?> <img class="img-circle ml-3" src="<?= base_url('assets/img/foto_profil/') . $pengguna['foto']; ?>" width="30" height="30"></a>
                        <ul>
                            <li><a href="Homeuser/editprofile">Edit Profile</a></li>
                        </ul>
                    </li>
                </ul>
            </nav> <!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?= base_url('img/Telukijo.png'); ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <p>Teluk Ijo</p>
                                <a href="<?= base_url('user/Login/logout'); ?>" class="btn-get-started scrollto">Logout</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="<?= base_url('img/KaIj.png'); ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <p>Kawah Ijen</p>
                                <a href="<?= base_url('user/Login/logout'); ?>" class="btn-get-started scrollto">Logout</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?= base_url('img/watudodol.png'); ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <p>Watu Dodol</p>
                                <a href="<?= base_url('user/Login/logout'); ?>" class="btn-get-started scrollto">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- #intro -->
    <section id="featured-services">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 box">
                    <i class="ion-ios-location"></i>
                    <h4 class="title"><a href="">Alamat</a></h4>
                    <p class="description">Perum Bumi Maron, RT. 01/RW. 1, Dusun Kopen, Genteng Kulon, Kec. Genteng, Kabupaten Banyuwangi, Jawa Timur 68465</p>
                </div>

                <div class="col-lg-4 box box-bg">
                    <i class="ion-ios-bookmarks"></i>
                    <h4 class="title"><a href="">Kutipan</a></h4>
                    <p class="description">Orang yang hebat yakni orang yang mampu menaklukkan dirinya sendiri</p>
                </div>

                <div class="col-lg-4 box">
                    <i class="ion-ios-people-outline"></i>
                    <h4 class="title"><a href="">Kepala Desa</a></h4>
                    <p class="description"></p>
                </div>

            </div>
        </div>
    </section><!-- #featured-services -->

    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h3>Pendaftaran Data Diri</h3>
                <p>Silahkan isi data data anda</p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Alamat</h3>
                        <address>Isikan alamat anda</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Nomor Telepon</h3>
                        <p><a href="">Isikan nomor telepon dengan valid</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="">isikan email anda</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="nik" class="form-control" id="name" placeholder="NIK (Nomor Induk Kependudukan)..." />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="nama_lengkap" id="email" placeholder="Nama Lengkap..." />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="alamat" id="subject" placeholder="Alamat..." />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="subject" placeholder="Email..." />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    <select class="form-control" name="jenis_pajak">
                        <option>Jenis Pajak</option>
                        <option value="pajak tanah">Pajak Tanah</option>
                        <option value="pajak sawah">Pajak Sawah</option>
                        <option value="pajak rumah">Pajak Rumah</option>
                    </select>
                    </div>
                    <div class="text-center"><button type="submit">kirim</button></div>
                </form>
            </div>

        </div>
    </section><!-- #contact -->

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3 class="text-white" style="font-family: Vendana;"><img src="<?= base_url('img/bwi.png'); ?>" width="70" height="70"> VilDev</h3>
                        <p>Merupakan sistem informasi untuk masyarakat desa dalam mengembangkan desa dan mempermudah masyarakat dalam menerima informasi dari pemerintah desa</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Alamat</h4>
                        <p>
                            Perum Bumi Maron, RT. 01/RW. 1, Dusun Kopen, Genteng Kulon, Kec. Genteng, Kabupaten Banyuwangi, 68465<br>
                            Jawa Timur <br>
                            Indonesia <br>
                            <strong>No Telepon </strong> +1 5589 55488 55<br>
                            <strong>Email: </strong>villagedeveloper79@gmail.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Village Developer</strong>. Web by SansDev
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <!-- jQuery 3 -->
    <script src="<?= base_url('assets/biz/lib/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/jquery/jquery-migrate.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/easing/easing.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/superfish/hoverIntent.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/superfish/superfish.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/wow/wow.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/counterup/counterup.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/isotope/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/lightbox/js/lightbox.min.js'); ?>"></script>
    <script src="<?= base_url('assets/biz/lib/touchSwipe/jquery.touchSwipe.min.js'); ?>"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?= base_url('assets/biz/contactform/contactform.js'); ?>"></script>

    <!-- Template Main Javascript File -->
    <script src="<?= base_url('assets/biz/js/main.js'); ?>"></script>
</body>

</html>