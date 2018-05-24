<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title><?php
            echo $tittle 
            ?>
                
            </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ;?>assets/vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ;?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="<?php echo base_url() ;?>assets/css/animate.css" rel="stylesheet">
        <link href="<?php echo base_url() ;?>assets/vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="<?php echo base_url() ;?>assets/css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url() ;?>assets/ico/favicon.ico"/>
        <!-- <link rel="shortcut icon" href="favicon.ico"/> -->
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.html">
                                <img class="logo-img logo-img-main" src="<?php echo base_url() ;?>assets/img/logo.png" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="<?php echo base_url() ;?>assets/img/logo-dark.png" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child nav-item-hover " href="<?php echo site_url('Welcome/')?>">Home</a></li>
                                <!-- <li class="nav-item"><a class="nav-item-child nav-item-hover" href="pricing.html">Pricing</a></li> -->
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="<?php echo site_url('Welcome/about')?>">Career</a></li>
                                <!-- <li class="nav-item"><a class="nav-item-child nav-item-hover" href="products.html">Products</a></li> -->
                                <!-- <li class="nav-item"><a class="nav-item-child nav-item-hover" href="faq.html">FAQ</a></li> -->
                                <li class="nav-item"><a class="nav-item-child nav-item-hover " href="<?php echo site_url('Welcome/contact') ?>">Contact</a></li>
                                <!-- <li class="btn nav-item-child"><a class="btn-item-hover btn-primary btn btn-theme-sm  " href="<?php echo site_url('login/') ?>">Login</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
       <div>
       <?php
            echo $body
            ?>
       </div>

    

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="<?php echo base_url() ;?>assets/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ;?>assets/vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ;?>assets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url() ;?>assets/vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ;?>assets/vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ;?>assets/vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ;?>assets/vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ;?>assets/vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ;?>assets/vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ;?>assets/vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url() ;?>assets/js/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ;?>assets/js/components/wow.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ;?>assets/js/components/swiper.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ;?>assets/js/components/masonry.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>