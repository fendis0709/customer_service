<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Boox | Kontak</title>
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
        <link rel="stylesheet" href="<?php echo base_url();?>asset/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/misc.css">
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/blue-scheme.css">

        <!-- JavaScripts -->
        <script src="<?php echo base_url();?>asset/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url();?>asset/js/jquery-migrate-1.2.1.min.js"></script>

        <link rel="shortcut icon" href="<?php echo base_url();?>asset/images/favicon.ico" type="image/x-icon" />

    </head>
    <body>
        <div class="first-widget parallax" id="contact">
            <div class="parallax-overlay">
                <div class="container pageTitle">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h2 class="page-title">Kontak</h2>
                        </div> <!-- /.col-md-6 -->
                        <div class="col-md-6 col-sm-6 text-right">
                            <span class="page-location">Home / Kontak</span>
                        </div> <!-- /.col-md-6 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.parallax-overlay -->
        </div> <!-- /.pageTitle -->

        <div class="container">	
            <div class="row">

                <div class="col-md-12 blog-posts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-wrapper">
                                <h3>Hubungi kami</h3>                                
                                <div class="contact-map">
                                    <div class="google-map-canvas" id="map-canvas" style="height: 320px;">
                                    </div>
                                </div>
                            </div> <!-- /.contact-wrapper -->
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->
                </div> <!-- /.col-md-8 -->
            </div> <!-- /.col-md-4 -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->	

    <!-- Scripts -->
    <script src="<?php echo base_url();?>asset/js/min/plugins.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/min/medigo-custom.min.js"></script>
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 15,
                center: new google.maps.LatLng(-6.222934, 106.821670)
            };

            var map = new google.maps.Map(document.getElementById('map-canvas'),
                    mapOptions);
        }

        function loadScript() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
                    'callback=initialize';
            document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>


</body>
</html>