<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$title?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url();?>/assets-user/img/favico.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?=base_url()?>/assets-user/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets-user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets-user/css/ticker-style.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets-user/css/flaticon.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets-user/css/slicknav.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets-user/css/animate.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets-user/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets-user/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets-user/css/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets-user/css/slick.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets-user/css/nice-select.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets-user/css/style.css">
    <?=$this->renderSection('script-head')?>
</head>

<body>
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-mid d-none d-md-block">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="<?=base_url()?>assets-user/img/logo.png" alt=""
                                            height="100"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="index.html"><img src="<?=base_url()?>/assets-user/img/logo.png" alt=""
                                            width="175" height="100"></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="<?=base_url('/')?>">Home</a></li>
                                            <li><a href="<?=base_url('politik')?>">Politik</a></li>
                                            <li><a href="<?=base_url('hukum')?>">Hukum</a></li>
                                            <li><a href="<?=base_url('global')?>">Global</a></li>
                                            <li><a href="<?=base_url('peristiwa')?>">Peristiwa</a></li>
                                            <li><a href="<?=base_url('nasional')?>">Nasional</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="Search">

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <main>
        <?=$this->RenderSection('content')?>
    </main>

    <footer>

        <!-- footer-bottom aera -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                    document.write(new Date().getFullYear());
                                    </script> All rights reserved
                                    <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                        target="_blank">LPM-Sinergis</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="<?=base_url()?>assets-user/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?=base_url()?>assets-user/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?=base_url()?>assets-user/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets-user/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?=base_url()?>assets-user/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?=base_url()?>assets-user/js/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>assets-user/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="<?=base_url()?>assets-user/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <!-- contact js -->
    <script src="<?=base_url()?>assets-user/js/contact.js"></script>
    <script src="<?=base_url()?>assets-user/js/jquery.form.js"></script>
    <script src="<?=base_url()?>assets-user/js/jquery.validate.min.js"></script>
    <script src="<?=base_url()?>assets-user/js/mail-script.js"></script>
    <script src="<?=base_url()?>assets-user/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?=base_url()?>assets-user/js/plugins.js"></script>
    <script src="<?=base_url()?>assets-user/js/main.js"></script>
    <?=$this->renderSection('script')?>

</body>

</html>