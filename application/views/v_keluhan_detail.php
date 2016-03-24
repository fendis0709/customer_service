<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Boox | Admin</title>

        <!-- Bootstrap core CSS -->

        <link href="<?php echo base_url(); ?>asset/admin/css/bootstrap.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>asset/admin/fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/admin/css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="<?php echo base_url(); ?>asset/admin/css/custom.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/admin/css/icheck/flat/green.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/admin/css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">

        <script src="<?php echo base_url(); ?>asset/admin/js/jquery.min.js"></script>

        <!--[if lt IE 9]>
              <script src="../assets/js/ie8-responsive-file-warning.js"></script>
              <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
              <![endif]-->

    </head>


    <body class="nav-md">

        <div class="container body">


            <div class="main_container">

                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="clearfix"></div>

                        <!-- menu prile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="<?php echo base_url(); ?>asset/admin/images/admin.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2>Admin Master</h2>
                            </div>
                        </div>
                        <!-- /menu prile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                            <div class="menu_section">
                                <h3 style="text-align: left">Main menu</h3>
                                <ul class="nav side-menu active">
                                    <li><a href="<?php echo base_url()?>admin"><i class="fa fa-home"></i> Home</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar menu -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">

                    <div class="nav_menu">
                        <nav class="" role="navigation">
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="<?php echo base_url(); ?>asset/admin/images/admin.jpg" alt="">Admin Master
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                        <li><a href="javascript:;"><i class="fa fa-user pull-right"></i> Profile</a></li>
                                        <li><a href="<?php echo base_url(); ?>login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="clearfix"></div>

                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Data keluhan pelanggan</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row">
                                            <div class="col-md-4" style="text-align: right">
                                                <p>ID Complaint</p>
                                                <p>Nama Pelanggan</p>
                                                <p>Email Pelanggan</p>
                                                <p>Topik Keluhan</p>
                                                <p>Deskripsi Keluhan</p>
                                                <p>Status Keluhan</p>
                                                <p>Tanggal Keluhan</p>
                                                <p>Tanggal Proses</p>
                                                <p>Tanggal Selesai</p>
                                            </div>
                                            <div class="col-md-8">
                                                <?php
                                                foreach ($get_byid as $value) {
                                                    ?>
                                                    <form method="post" action="<?php echo base_url().'keluhan/update/'.$value->id_keluhan;?>" >
                                                        <p class="light-text"><?php echo $value->id_keluhan ?></p>
                                                        <p class="light-text"><?php echo $value->nama_pelanggan ?></p>
                                                        <p class="light-text"><a href="mailto:<?php echo $value->email_pelanggan ?>" target="_blank"><?php echo $value->email_pelanggan ?></a></p>
                                                        <p class="light-text"><?php echo $value->judul_keluhan ?></p>
                                                        <p class="light-text"><?php echo $value->deskrip_keluhan ?></p>
                                                        <select name="status_keluhan">
                                                            <option value="Belum" <?php if($value->status_keluhan == "Belum"){ echo 'selected';}?>>Belum</option>
                                                            <option value="Proses" <?php if($value->status_keluhan == "Proses"){ echo 'selected';}?>>Proses</option>
                                                            <option value="Selesai" <?php if($value->status_keluhan == "Selesai"){ echo 'selected';}?> <?php if($value->status_keluhan == "Belum"){ echo 'disabled';}?>>Selesai</option>
                                                        </select>
                                                        <p class="light-text" style="margin-top: 10px"><?php echo date("d-M-Y H-i-s", strtotime($value->tgl_keluhan));?></p>
                                                        <p class="light-text"><?php if(isset($value->tgl_proses)) { echo date("d-M-Y H-i-s", strtotime($value->tgl_proses)); } else { echo "Belum proses";} ?></p>
                                                        <p class="light-text"><?php if(isset($value->tgl_selesai)) { echo date("d-M-Y H-i-s", strtotime($value->tgl_selesai)); } else { echo "Belum selesai";} ?></p>
                                                        <input class="btn btn-warning" type="submit" value="Update"/>
                                                    </form>                                                   
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br />
                            <br />
                            <br />

                        </div>
                    </div>
                    <!-- footer content -->
                    <footer>
                        <div class="copyright-info">
                            <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <!-- /footer content -->

                </div>
                <!-- /page content -->
            </div>

        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="<?php echo base_url(); ?>asset/admin/js/bootstrap.min.js"></script>

        <!-- chart js -->
        <script src="<?php echo base_url(); ?>asset/admin/js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="<?php echo base_url(); ?>asset/admin/js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/admin/js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="<?php echo base_url(); ?>asset/admin/js/icheck/icheck.min.js"></script>

        <script src="<?php echo base_url(); ?>asset/admin/js/custom.js"></script>


        <!-- Datatables -->
        <script src="<?php echo base_url(); ?>asset/admin/js/datatables/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>asset/admin/js/datatables/tools/js/dataTables.tableTools.js"></script>

        <!-- pace -->
        <script src="<?php echo base_url(); ?>asset/admin/js/pace/pace.min.js"></script>
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Search all columns:"
                    },
                    "aoColumnDefs": [{
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
                    ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers",
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": "<?php echo base_url('assets2/js/Datatables/tools/swf/copy_csv_xls_pdf.swf'); ?>"
                    }
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });
        </script>
    </body>

</html>
