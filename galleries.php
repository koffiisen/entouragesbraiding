<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services | ENTOURAGE'S BRAIDING</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <link href="nanogallery2/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
    <link href="nanogallery2/css/nanogallery2.woff.min.css" rel="stylesheet" type="text/css">


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 d-flex">
                    <a href="index.html" class="site-logo">
                        ENTOURAGE'S BRAIDING
                    </a>

                    <a href="#"
                       class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a>

                </div>
                <div class="col-12 col-lg-6 ml-auto d-flex">
                    <div class="ml-md-auto top-social d-none d-lg-inline-block">
                        <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
                    </div>


                    <div class="d-flex">
                        <a href="tel:+404-483-3565">404-483-3565 </a> <strong>/</strong> <a href="tel:+678-489-5882">
                            678-489-5882</a>
                    </div>


                </div>
                <div class="col-6 d-block d-lg-none text-right">

                </div>
            </div>
        </div>


        <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

            <div class="container">
                <div class="d-flex align-items-center">

                    <div class="mr-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                <li>
                                    <a href="index.html" class="nav-link text-left">Home</a>
                                </li>
                                <li>
                                    <a href="services.html" class="nav-link text-left">Services</a>
                                </li>
                                <li class="active">
                                    <a href="galleries.php" class="nav-link text-left">Galleries</a>
                                </li>
                                <li><a href="contact.html" class="nav-link text-left">Contact</a>
                                </li>
                            </ul>
                        </nav>

                    </div>

                </div>
            </div>

        </div>

    </div>


    <div class="site-section">
        <div class="container">

            <div ID="ngy2p" data-nanogallery2='{
        "itemsBaseURL": "images/customers/",
        "thumbnailWidth": "200",
        "thumbnailLabel": {
          "position": "overImageOnMiddle",
          "display": false
        },
        "thumbnailHoverEffect2": "toolsSlideDown",
        "thumbnailAlignment": "center",
        "thumbnailLevelUp": true,
        "thumbnailOpenImage": true
      }'>
                <?php
                foreach (glob('images/customers/*') as $filename) {
                    $p = pathinfo($filename);
                    $href = $p['basename'];
                    $fname = $p['basename'];
                    echo "<a href='$href' data-ngthumb='$href' data-ngdesc=''>$fname</a>";
                }
                ?>
            </div>

        </div>
        <!-- END section -->


        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright">
                            <p>
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                All rights reserved | Powered by ENTOURAGE'S BRAIDING
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- .site-wrap -->

</div>
<!-- loader -->
<div id="loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#ff5e15"/>
    </svg>
</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>
<script type="text/javascript" src="nanogallery2/jquery.nanogallery2.core.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>
