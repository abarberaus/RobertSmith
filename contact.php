<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Robert Smith - Attorney At Law</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
        <!-- Plugin CSS -->
        <link rel="stylesheet" href="css/animate.min.css" type="text/css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/creative.css" type="text/css">
        <!-- My CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
        #map-canvas {
        width: 500px;
        height: 400px;
        }
        </style>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
        function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
        center: new google.maps.LatLng(30.2747749, -97.7467618),
        zoom: 8,
        mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>
    <body id="page-top">
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="index.html"><span class="white">Robert Smith <span class="disappear_small">Attorney at Law</span></span></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a class="page-scroll" href="about.html">About Robert</a>
                        </li>
                        <!-- Priorities page to be updated with Lenny's content
                        <li>
                            <a class="page-scroll" href="priorities.html">Priorities</a>
                        </li>
                        -->
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="contact.php">Contact</a></li>
                        <!-- <li><a href="https://www.facebook.com/lennyforda" style="padding-right: 0px; padding-top: 12px;"><i class="fa fa-facebook-square fa-2x"></i></a></li> -->
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- Section 1 -->
        <header>
            <div class="container v1">
                <div class="row">
                    <div class="box">
                        <div class="col-md-4 col-xs-12 left_align">
                            <h4>The Law Office of Robert Smith</h4>
                            <p>Phone: 512-710-5297</p>
                            <p>Address: 1104 Nueces St, Ste. 202 Austin, TX  78701</p>
                            <img src="https://maps.googleapis.com/maps/api/staticmap?center=%221104%20Nueces%20St%2C%20Ste%2E%20202%22%2BAustin%2BTX%2B78701-0000&zoom=14&size=360x240&maptype=roadmap&markers=color:red%7C%221104%20Nueces%20St%2C%20Ste%2E%20202%22%2BAustin%2BTX%2B78701-0000" style="width: 100%; max-width: 500px;">
                            <br>
                            <br>
                            <a href="https://www.google.com/maps?q=1104+Nueces+St,+Ste.+202+Austin,+TX++78701-0000">See in Google Maps</a>
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <h2>Contact Robert</h2>
                            <hr>
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <p>Please fill out the information below, and we'll contact you as soon as possible.</p>
                            <form action="email.php" method="post" role="form">
                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label>Phone Number</label>
                                        <input type="tel" class="form-control" name="phone">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group col-lg-12">
                                        <label>Message</label>
                                        <textarea class="form-control" rows="6" name="message"></textarea>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input type="hidden" name="save" value="contact">
                                        <button type="submit" name="submit" class="btn btn-default v_button">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </header>
        <footer class="footer">
            <div class="container">
                <p>Copyright &copy; 2015. All Rights Reserved Robert Smith</p>
            </div>
        </footer>
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.fittext.js"></script>
        <script src="js/wow.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="js/creative.js"></script>
    </body>
</html>