
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <!-- 
            Medigo Template
            http://www.templatemo.com/preview/templatemo_460_medigo
        -->

        <!-- Google Fonts -->
        <link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/misc.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/blue-scheme.css">

        <!-- JavaScripts -->
        <script src="<?php echo base_url(); ?>asset/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/jquery-migrate-1.2.1.min.js"></script>

        <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/favicon.ico" type="image/x-icon" />

    </head>      
    <header class="site-header clearfix">
        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="pull-left logo">
                        <a href="index.html">
                            <img src="<?php echo base_url(); ?>asset/images/logo.png" alt="Boox Logo" style="max-height: 48px">
                        </a>
                    </div>	<!-- /.logo -->

                    <div class="main-navigation pull-right">

                        <nav class="main-nav visible-md visible-lg">
                            <ul class="sf-menu">
                                <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
                                <li><a href="<?php echo base_url()?>keluhan/cari">Cari status keluhan</a></li>
                                <li><a href="kontak">Kontak</a></li>
                                <?php
                                $username = $this->session->userdata('username');
                                if (isset($username)) {
                                    ?>
                                    <li>
                                        <a class="main-button accent-color" href="#"><?php echo $this->session->userdata('nama_akun');?> <i class="fa fa-angle-down"></i></a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp; Profil</a></li>
                                            <li><a href="login/logout" style="text-decoration-color: tomato"><i class="fa fa-sign-out"></i> &nbsp;&nbsp;&nbsp;Log out</a></li>
                                        </ul>
                                    </li>
                                <?php } else {
                                    ?>
                                    <li><a href="login" class="main-button accent-color">Masuk</a></li>
                                    <?php
                                }
                                ?>
                            </ul> <!-- /.sf-menu -->
                        </nav> <!-- /.main-nav -->

                        <!-- This one in here is responsive menu for tablet and mobiles -->
                        <div class="responsive-navigation visible-sm visible-xs">
                            <a href="#nogo" class="menu-toggle-btn">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div> <!-- /responsive_navigation -->

                    </div> <!-- /.main-navigation -->

                </div> <!-- /.col-md-12 -->

            </div> <!-- /.row -->

        </div> <!-- /.container -->
    </header> <!-- /.site-header -->

    <!-- Scripts -->
    <script src="<?php echo base_url(); ?>asset/js/min/plugins.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/min/medigo-custom.min.js"></script>
</html>