<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>CS | Keluhan Anda</title>
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
        <div class="first-widget parallax" id="blog">
            <div class="parallax-overlay">
                <div class="container pageTitle">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h2 class="page-title">Keluhan Anda</h2>
                        </div> <!-- /.col-md-6 -->
                        <div class="col-md-6 col-sm-6 text-right">
                            <span class="page-location">Home / Keluhan Anda</span>
                        </div> <!-- /.col-md-6 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.parallax-overlay -->
        </div> <!-- /.pageTitle -->


        <div class="container">	
            <div class="row">

                <div class="col-md-12 blog-posts">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="contact-form">
                                <h3>Keluhan Anda</h3>
                                <div class="widget-inner">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p style="font-size: 16px; font-weight: bold">ID Complaint : </p>
                                            <p style="font-size: 16px; font-weight: bold">Nama : </p>
                                            <p style="font-size: 16px">Email</p>
                                            <p style="font-size: 16px; font-weight: bolder">Topik keluhan</p>
                                            <p class="light-text">Deskripsi keluhan</p>
                                            <p style="font-size: 14px">Tanggal Keluhan</p>
                                            <p style="font-size: 14px">Tanggal Proses</p>
                                            <p style="font-size: 14px">Tanggal Selesai</p>
                                            <p style="font-size: 18px">Status</p>
                                        </div>
                                        <div class="col-md-8">
                                            <?php
                                            if (isset($get_id_keluhan)) {
                                                foreach ($get_id_keluhan as $rkeluhan) {
                                                    $id_keluhan = $rkeluhan->id_keluhan;
                                                    $nama_pelanggan = $rkeluhan->nama_pelanggan;
                                                    $email_pelanggan = $rkeluhan->email_pelanggan;
                                                    $judul_keluhan = $rkeluhan->judul_keluhan;
                                                    $deskrip_keluhan = $rkeluhan->deskrip_keluhan;
                                                    $status_keluhan = $rkeluhan->status_keluhan;
                                                    $tgl_keluhan = $rkeluhan->tgl_keluhan;
                                                    $tgl_proses = $rkeluhan->tgl_proses;
                                                    $tgl_selesai = $rkeluhan->tgl_selesai;
                                                    ?>
                                                    <p style="font-size: 16px; font-weight: lighter"><?php echo $id_keluhan ?></p>
                                                    <p style="font-size: 16px; font-weight: bold"><?php echo $nama_pelanggan ?></p>
                                                    <p style="font-size: 16px"><?php echo $email_pelanggan ?></p>
                                                    <p style="font-size: 16px; font-weight: bolder"><?php echo $judul_keluhan ?></p>
                                                    <p class="light-text"><?php echo $deskrip_keluhan ?></p>
                                                    <p class="light-text" style="margin-top: 10px"><?php echo date("d-M-Y H-i-s", strtotime($tgl_keluhan));?></p>
                                                    <p class="light-text"><?php if(isset($tgl_proses)) { echo date("d-M-Y H-i-s", strtotime($tgl_proses)); } else { echo "Belum proses";} ?></p>
                                                    <p class="light-text"><?php if(isset($tgl_selesai)) { echo date("d-M-Y H-i-s", strtotime($tgl_selesai)); } else { echo "Belum selesai";} ?></p>
                                                    <p style="font-size: 18px"><?php echo $status_keluhan ?></p>
                                                    <?php
                                                }
                                            } else {
                                                ?>
                                                <center>
                                                    <div class = "alert alert-success" style = "color:yellowgreen;" id = "alert">
                                                        <i class = "fa fa-warning fa-2x"></i> <h4>Data tidak ditemukan.</h4>
                                                    </div>
                                                </center>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
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


    </body>
</html>