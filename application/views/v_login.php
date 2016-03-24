<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
        <meta name="author" content="GeeksLabs">
        <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>Boox | Masuk</title>

        <!-- Bootstrap CSS -->    
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="<?php echo base_url(); ?>asset/css/bootstrap-theme.css" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="<?php echo base_url(); ?>asset/css/elegant-icons-style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>asset/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles -->
        <link href="<?php echo base_url(); ?>asset/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-img3-body">
        <section id="container" class="">

            <header class="header dark-bg">

                <!--logo start-->
                <a href="<?php echo base_url() ?>" class="logo">
                    <img src="<?php echo base_url(); ?>asset/images/logo.png" alt="Boox Logo" style="max-height: 48px">
                </a>
                <!--logo end-->

                <div class="nav search-row" id="top_menu">
                    <!--  search form start -->
                    <ul class="nav top-menu">
                        <a href="<?php echo base_url() ?>">
                            <button class="btn btn-primary">
                                <i class="fa fa-home"></i>&nbsp;Kembali ke beranda
                            </button>
                        </a>
                    </ul>
                    <!--  search form end -->                
                </div>

                <div class="top-nav notification-row">                
                    <!-- notificatoin dropdown start-->
                    <ul class="nav pull-right top-menu">
                        <!-- user login dropdown start-->
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#">
                                <button class="btn btn-info">
                                    <span>Frequently Asked Question</span>
                                </button>
                            </a>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                    <!-- notificatoin dropdown end-->
                </div>
            </header>  
        </section>

        <div class="container">

            <form class="login-form" action="<?php echo base_url();?>login/login" method="post">        
                <div class="login-wrap">
                    <p class="login-img"><i class="icon_lock_alt"></i></p>
                    <p><?php echo $this->session->flashdata('pesan');?></p>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_profile"></i></span>
                        <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me"> Remember me
                        <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
                    </label>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Masuk</button>
                    <a class="btn btn-block" href="<?php echo base_url() ?>daftar" >
                        <button class="btn btn-info btn-lg btn-block">Daftar</button>
                    </a>
                </div>
            </form>

        </div>


    </body>
</html>
