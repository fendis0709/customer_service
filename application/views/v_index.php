<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Customer Service | Home</title>
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
    <body>

        <section id="homeIntro" class="parallax first-widget">
            <div class="parallax-overlay">
                <div class="container home-intro-content">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Boox Technology Indonesia</h2>
                            <p>Kami membangun produk-produk yang bisa membantu organisasi (pada semua level) <br>meningkatkan efektivitas dan efisiensi proses bisnis mereka. </p>
                            <a href="#" class="large-button white-color">Download Boox Apps <i class="icon-button fa fa-download"></i></a>
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.parallax-overlay -->
        </section> <!-- /#homeIntro -->

        <section class="cta clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="cta-title"><strong>Ingin tahu lebih banyak tentang Boox Technology Indonesia?</strong>  </h4>
                        <a href="http://www.boox.asia" class="main-button accent-color">kunjungi Boox<i class="icon-button fa fa-arrow-right"></i></a>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </section> <!-- /.cta -->

        <div class="container">	
            <div class="row">

                <div class="col-md-12 blog-posts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-wrapper">
                                <h3>Punya keluhan yang ingin disampaikan ke Boox?</h3>
                                <p>Kami senantiasa memberikan pelayanan yang terbaik untuk pelanggan kami. Kami sangat peduli pada kepuasan pelanggan. Untuk itu, demi memberikan pelayanan terbaik, Jika Anda memiliki keluhan yan ingin Anda sampaikan kepada kami silakan mengisi formulir yang tersedia di bawah ini. <br>Anda juga dapat mengecek status keluhan Anda dengan mencatumkan <i><u>ID Complaint</u></i> yang ada pada keluhan yang telah Anda kirim ke kami.<br></p>
<!--                                <p><strong>Login dibutuhkan untuk menyampaikan keluhan.</strong></p>      -->
                            </div> <!-- /.contact-wrapper -->
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->
                    <div class="row" id="keluhan">
                        <div class="col-md-8">
                            <div class="contact-form">
                                <h3>Sampaikan keluhan Anda</h3>
                                <div class="widget-inner">
                                    <?php echo $this->session->flashdata('pesan') ?>
                                    <br>
                                    <?php echo $this->session->flashdata('mail') ?>
                                    <form action="<?php echo base_url();?>keluhan/insert" method="post" id="contact-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <label for="name"><?php echo date("l, d-M-Y")?></label>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <label for="judul">Nama* :</label>
                                                    <input name="nama" type="text" id="name" value="<?php echo set_value('nama')?>"/>
                                                    <?php echo form_error('nama')?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <label for="judul">Email* :</label>
                                                    <input name="email" type="text" id="name" value="<?php echo set_value('email')?>"/>
                                                    <?php echo form_error('email')?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <label for="judul">Topik keluhan Anda* :</label>
                                                    <input name="topik" type="text" id="name" value="<?php echo set_value('topik')?>"/>
                                                    <?php echo form_error('topik')?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <label for="message">Keluhan Anda* :</label>
                                                    <textarea name="keluhan" id="message"><?php echo set_value('keluhan')?></textarea>
                                                    <?php echo form_error('keluhan')?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="message">Berapa hasil perhitungan ini* :</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <?php
                                                $a = rand(0, 50);
                                                $b = rand(0, 50);
                                                $hasil = $a + $b;
                                                ?>
                                                <label for="name"><?php echo $a." + ".$b?> = ...</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="hidden" name="anti_spam_ans" id="name" value="<?php echo $hasil; ?>">
                                                <input type="text" name="anti_spam" id="name" placeholder="Hasil kalkulasi disamping">
                                                <?php echo form_error('anti_spam')?>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="result"></div>
                                                </div> <!-- /.col-md-12 -->
                                            </div>
                                        </div> <!-- /.row -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="mainBtn" id="submit" onclick="return confirm('Apakah Anda yakin untuk mengirimkan keluhan ini?')" type="submit" value="Kirim keluhan"/>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- /.widget-inner -->
                            </div> <!-- /.contact-form -->
                        </div> <!-- /.col-md-8 -->
                        <div class="col-md-4">
                            <div class="contact-form">
                                <h3>Cek status keluhan Anda</h3>
                                <div class="widget-inner">
                                    <?php echo $this->session->flashdata('pesan_cari');?>
                                    <form action="<?php echo base_url(); ?>keluhan/cari" method="post" id="contact-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <label for="name"><i><u>ID Complaint</u></i>:</label>
                                                    <input type="text" name="id_complaint" id="name">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="mainBtn" id="submit">Cek status</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="result"></div>
                                            </div> <!-- /.col-md-12 -->
                                        </div> <!-- /.row -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.col-md-8 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->	

        <!-- Scripts -->
        <script src="<?php echo base_url(); ?>asset/js/min/plugins.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/min/medigo-custom.min.js"></script>
        <script>
            function confirm_complaint() {
                var x;
                if (confirm("Apakah Anda yakin?") == true) {
                    x = "OK!";
                } else {
                    x = "Cancel!";
                }
                document.getElementById("demo").innerHTML = x;
            }
        </script>

    </body>
</html>