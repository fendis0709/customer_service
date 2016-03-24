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
                                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
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
                        

                        <div class="row top_tiles">
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-comments"></i>
                                    </div>
                                    <div class="count"><?php echo ($count_belum+$count_proses+$count_selesai);?></div>

                                    <h3>Total keluhan</h3>
                                    <p>Jumlah total seluruh keluhan yang disimpan.</p>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-book"></i>
                                    </div>
                                    <div class="count"><?php echo $count_belum;?></div>

                                    <h3>Keluhan Belum</h3>
                                    <p>Keluhan yang belum ditangani.</p>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                    <div class="count"><?php echo $count_proses;?></div>

                                    <h3>Keluhan Proses</h3>
                                    <p>Keluhan yang sedang ditangani.</p>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-check-square-o"></i>
                                    </div>
                                    <div class="count"><?php echo $count_selesai;?></div>

                                    <h3>Keluhan Selesai</h3>
                                    <p>Keluhan yang telah ditangani.</p>
                                </div>
                            </div>
                        </div>
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
                                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                                            <thead>
                                                <tr class="headings">
                                                    <th>
                                                        <input type="checkbox" class="tableflat">
                                                    </th>
                                                    <th>ID Complaint </th>
                                                    <th>Nama Pelangan </th>
                                                    <th>Email Pelanggan </th>
                                                    <th>Topik Keluhan </th>
                                                    <th>Status </th>
                                                    <th class=" no-link last"><span class="nobr">Action</span>
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $i = 0;
                                                foreach ($get_data as $row) {
                                                    if (($i % 2) == 0) {
                                                        $color = 'class="even pointer"';
                                                    } else {
                                                        $color = 'class="odd pointer"';
                                                    }
                                                    ?>
                                                    <tr <?php echo $color; ?>>
                                                        <td class="a-center ">
                                                            <input type="checkbox" class="tableflat">
                                                        </td>
                                                        <td><?php echo $row->id_keluhan; ?></td>
                                                        <td><?php echo $row->nama_pelanggan ?></td>
                                                        <td><?php echo $row->email_pelanggan ?></td>
                                                        <td><?php echo $row->judul_keluhan ?></td>
                                                        <td><?php echo $row->status_keluhan ?></td>
                                                        <td><a href="<?php echo base_url()?>keluhan/detail/<?php echo $row->id_keluhan?>" title="Lihat detail data"><button class="btn btn-info"><i class="fa fa-search-plus"></i></button></a></td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>

                                        </table>
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
