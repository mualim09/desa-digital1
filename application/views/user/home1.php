<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('assets/bower_components/Ionicons/css/ionicons.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/AdminLTE.min.css'); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">
    <link rel="shortcut icon" href="<?= base_url('img/bwi.png'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <header class="main-header">
            <nav class="navbar fixed-top navbar-static-top">
                <div class="navbar-header ml-3">
                    <img src="<?= base_url('img/bwi.png'); ?>" width="45" height="45">
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                        <li class="divider"></li>
                        <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informasi Desa<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="">Berita Desa</a></li>
                                <li class="divider"></li>
                                <li><a href="">Event Desa</a></li>
                                <li class="divider"></li>
                                <li><a href="">Kegiatan Desa</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hasil Desa<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Makanan Tradisional</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Kerajinan Desa</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Usaha Desa</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Oleh-oleh desa</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pariwisata Desa<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="">Wisata Desa</a></li>
                                <li class="divider"></li>
                                <li><a href="">Wisata Kuliner Desa</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="<?= base_url('user/Login'); ?>" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= $this->session->userdata('foto'); ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?= $this->session->userdata('username'); ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="<?= $this->session->userdata('foto'); ?>" class="img-circle" alt="User Image">
                                    <p><?= $this->session->userdata('username'); ?></p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?= base_url('Home'); ?>" class="btn btn-danger">Logout</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= base_url('Home'); ?>" class="btn btn-success">Edit Profile</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?= base_url('img/KaIj.png'); ?>" alt="First slide">

                    <div class="carousel-caption">
                        First Slide
                    </div>
                </div>
                <div class="item">
                    <img src="<?= base_url('img/Telukijo.png'); ?>" alt="Second slide">

                    <div class="carousel-caption">
                        Second Slide
                    </div>
                </div>
                <div class="item">
                    <img src="<?= base_url('img/watudodol.png'); ?>" alt="Third slide">

                    <div class="carousel-caption">
                        Third Slide
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="fa fa-angle-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="fa fa-angle-right"></span>
            </a>
        </div>
        <div class="content-wrapper">
            <div class="container">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Top Navigation
                        <small>Example 2.0</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Layout</a></li>
                        <li class="active">Top Navigation</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="callout callout-info">
                        <h4>Tip!</h4>

                        <p>Add the layout-top-nav class to the body tag to get this layout. This feature can also be used with a
                            sidebar! So use this class if you want to remove the custom dropdown menus from the navbar and use regular
                            links instead.</p>
                    </div>
                    <div class="callout callout-danger">
                        <h4>Warning!</h4>

                        <p>The construction of this layout differs from the normal one. In other words, the HTML markup of the navbar
                            and the content will slightly differ than that of the normal layout.</p>
                    </div>
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">Blank Box</h3>
                        </div>
                        <div class="box-body">
                            The great content goes here
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.container -->
        </div>

    </div>


    <footer class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.13
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
            reserved.
        </div>
        <!-- /.container -->
    </footer>

    <!-- jQuery 3 -->
    <script src="<?= base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <!-- SlimScroll -->
    <script src="<?= base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('assets/bower_components/fastclick/lib/fastclick.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets/dist/js/demo.js') ?>"></script>
</body>

</html>