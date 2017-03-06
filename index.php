<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta name="description" content="Koffie One Page HTML Landing Page">
        <meta name="keywords" content="koffie, Bootstrap, Landing page, Template, Business, One page ">
        <meta name="author" content="ThemeAtelier">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- ========== Title ========== -->
        <title>Café Aromas</title>
        <!-- ========== Favicon Ico ========== -->
        <link rel="icon" href="fav.ico">
        <!-- ========== STYLESHEETS ========== -->
        <!-- Bootstrap CSS -->
        <link href="./StyleIndex/css/bootstrap.min.css" rel="stylesheet">
        <!-- Fonts Awesome CSS -->
        <link href="./StyleIndex/css/font-awesome.min.css" rel="stylesheet">
        <!-- Et line icon CSS -->
        <link href="./StyleIndex/css/et-line-icon.css" rel="stylesheet">
        <!-- Owl Carousel CSS -->
        <link href="./StyleIndex/css/owl.carousel.css" rel="stylesheet">
        <link href="./StyleIndex/css/owl.transitions.css" rel="stylesheet">
        <link href="./StyleIndex/css/owl.theme.css" rel="stylesheet">
        <!-- magnific CSS -->
        <link href="./StyleIndex/css/magnific-popup.css" rel="stylesheet"/>
        <!-- Animate CSS -->
        <link href="./StyleIndex/css/animate.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="./StyleIndex/css/style.css" rel="stylesheet">
        <!--responsive css -->
        <link href="./StyleIndex/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="./StyleIndex/css/colors/yellow.css" id="color-switch">
        <!-- teamplate colors -->
        <!-- <link rel="stylesheet" href="css/colors/turquoise.css">-->
        <!-- <link rel="stylesheet" href="css/colors/light-green.css"> -->
        <!-- <link rel="stylesheet" href="css/colors/purple.css"> -->
        <!-- <link rel="stylesheet" href="css/colors/light-blue.css"> -->
        <!-- <link rel="stylesheet" href="css/colors/brown.css"> -->
        
        <?php 
        include './Business/OrganizationBusiness.php';
        include './Business/CharacteristicBusiness.php';
        include './Business/ProductBusiness.php';
        include './Business/DescriptiveSheetCofeeBusiness.php';
        include './Business/AchievementBusiness.php';
        include './Business/PhoneBusiness.php';
        include './Business/EmailBusiness.php';
        ?>
        
    </head>
    <body>
        
        <?php
        $organizationBusiness = new OrganizationBusiness();
        $organization = $organizationBusiness->getAllTBOrganizations();
        
        $characteristicsBusiness = new CharacteristicBusiness();
        $characteristics = $characteristicsBusiness->getAllTBCharacteristics();
        
        $productBusiness = new ProductBusiness();
        $products = $productBusiness->getAllTBProducts();
        
        $descriptiveSheetCofeeBusiness = new DescriptiveSheetCofeeBusiness();
        $descriptives = $descriptiveSheetCofeeBusiness->getAllTBDescriptiveSheetCofees();
        
        $achievementBusiness = new AchievementBusiness();
        $achievements = $achievementBusiness->getAllTBTBAchievements();
        
        $phoneBusiness = new PhoneBusiness();
        $phones = $phoneBusiness->getAllTBPhones();
        
        $emailBusiness = new EmailBusiness();
        $emails = $emailBusiness->getAllTBEmails();
        ?>
        
        <!-- ========== preloader Start ========== -->
        <div class="preloader-wrap">
            <div class="preloader">
                <div class="preloader-top">
                    <div class="preloader-top-cup">
                        <i class="fa fa-coffee" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== preloader End ========== -->
        <!-- ========== Header ========== -->
        <header class="navbar header navbar-fixed-top">
            <div class="container">
                <!-- Navbar-header -->
                <div class=" navbar-header">
                    <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" 
                            data-target=".navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO - Add your logo text or change image url to your logo -->
                    <a class="navbar-brand logo" href="index.html">
                        Café Aromas
                        <!-- <img src="img/yourlogo.png" alt="">-->
                    </a>
                </div>
                <!-- end navbar-header -->

                <!-- menu -->
                <div class="navbar-collapse collapse" id="data-scroll">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#home">Inicio</a></li>
                        <li><a href="#about">Acerca de</a></li>
                        <li><a href="#offer">Productos</a></li>
                        <li><a href="#menu">Nuestro café</a></li>
                        <li><a href="#gallery">Galeria</a></li>
                        <li><a href="#reviews">Nuestros logros</a></li>
                        <li><a href="#contact">Contacto</a></li>
                    </ul>
                </div>
                <!--/Menu -->
            </div>
            <!-- end container -->
        </header>
        <!-- ========== Header End ========== -->

        <!-- ========== hero section ========== -->
        <section id="home" class="hero home_intro_carousel bg-black">
            <div class="fullscreen-slider owl-carousel">
                <div class="slider_item">
                    <div class="slide-bg-image" style="background-image: url('./StyleIndex/img/hero/slider-1.jpg')">
                        <div class="bg-overlay opacity-6"></div>
                        <div class="hero_slider_inner">
                            <div class="container">
                                <a class="hero-logo" href="#"><img src="./StyleIndex/img/logo.png" alt="" /></a>
                                <h1 class="intro">Served With Love & Smile</h1>
                                <a href="#offer" class="buttons scroll">Vea nuestros productos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== hero section  End ========== -->
        <!-- ========== our story ========== -->
        <section id="about" class="pt100 pb100 our-story bg-dark" style="background-image: url('./StyleIndex/img/our-story-bg.png')">
            <div class="container">
                <!-- section title -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-center mb90 fadeIn animated wow" data-wow-delay=".2s">
                            <h2>Nuestra historia</h2>
                            <div class="title-seperator"></div>
                        </div>
                    </div>
                </div>
                <!-- end section title-->
                <div class="row">
                    <div class="col-sm-8 text-center our-story-content col-sm-offset-2">
                        <p class="fadeIn animated wow" data-wow-delay=".1s">
                            <?php
                            echo $organization->getHistory();
                            ?>
                        </p>
                        <a href="#" class="buttons zoomIn animated wow" data-wow-delay=".2s" data-toggle="modal" data-target="#storyModal">Leer más</a>
                    </div>
                    <!-- full story modal-->
                    <!-- Modal -->
                    <div class="modal fade" id="storyModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-dark">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                </div>
                                <div class="modal-body bg-dark">
                                    <h3>Nuestra historia</h3>
                                    <p>
                                        <?php
                                        echo $organization->getHistory();
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="container">
                <!-- section title -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-center mb90 fadeIn animated wow" data-wow-delay=".2s">
                            <h2>Nosotros</h2>
                            <div class="title-seperator"></div>
                        </div>
                    </div>
                </div>
                <!-- end section title-->
                <div class="row">
                    <!-- Single blog start -->
                    <div class="col-sm-4">
                        <div class="single-blog bg-dark animated fadeInDown wow" data-wow-delay=".1s">
                            <img class="center-block" src="./StyleIndex/img/offer-img.png" alt="" />
                            <div class="post-title">
                                <h3 class="text-center">Misión</h3>
                            </div>
                            <p>
                                <?php
                                echo $organization->getMission();
                                ?>
                            </p>
                        </div>
                    </div>
                    <!-- Single blog end -->
                    <!-- Single blog start -->
                    <div class="col-sm-4">
                        <div class="single-blog bg-dark animated fadeInDown wow" data-wow-delay=".1s">
                            <img class="center-block" src="./StyleIndex/img/offer-img.png" alt="" />
                            <div class="post-title">
                                <h3 class="text-center">Visión</h3>
                            </div>
                            <p>
                                <?php
                                echo $organization->getVision();
                                ?>
                            </p>
                        </div>
                    </div>
                    <!-- Single blog end -->
                    <!-- Single blog start -->
                    <div class="col-sm-4">
                        <div class="single-blog bg-dark animated fadeInDown wow" data-wow-delay=".1s">
                            <img class="center-block" src="./StyleIndex/img/offer-img.png" alt="" />
                            <div class="post-title">
                                <h3 class="text-center">¿Qué nos caracteriza?</h3>
                            </div>
                            <p>
                                <ul>
                                <?php
                                foreach ($characteristics as $currentCharacteristic){
                                    echo '<li>' . $currentCharacteristic->getCharateristic() . '</li>';
                                }
                                ?>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <!-- Single blog end -->
                </div>
                <!-- end section title-->
            </div>
            
        </section>
        <!-- ========== our story section  End ========== -->
        
        <!-- ========== our offter ========== -->
        <section id="offer" class="pt100 pb100 bg-black">
            <div class="container">
                <!-- section title -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-center mb90 fadeIn animated wow" data-wow-delay=".2s">
                            <h2>Productos</h2>
                            <div class="title-seperator"></div>
                        </div>
                    </div>
                </div>
                <!-- end section title-->
                <div class="row">
                    <?php
                    foreach($products as $currentProduct){
                        ?>

                            <div class="col-sm-4">
                                <div class="single-offer text-center animated fadeInDown wow" data-wow-delay=".1s">
                                    <img src="./StyleIndex/img/offer-img.png" alt="" />
                                    <h3><?php echo $currentProduct->getNameProduct(); ?></h3>
                                    <p><?php echo $currentProduct->getDescription(); ?></p>
                                </div>
                            </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- ========== our offer section  End ========== -->
        <!-- ========== special menu ========== -->
        <section id="menu" class="pt100 pb100 special-menu bg-dark" style="background-image: url('./StyleIndex/img/special-menu-bg.jpg')">
            <div class="container">
                <!-- section title -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-center mb90 fadeIn animated wow" data-wow-delay=".2s">
                            <h2>Nuestro café</h2>
                            <div class="title-seperator"></div>
                        </div>
                    </div>
                </div>
                <!-- end section title-->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="single-special-menu animated fadeInDown wow" data-wow-delay=".1s">
                            <div class="sp-menu-thumb">
                                <img class="pull-left" src="./StyleIndex/img/menu-chart.jpg" alt="" />
                            </div>
                            <div class="sp-menu-content">
                                <div class="sp-menu-name-price">
                                    <h4>Región del café</h4>
                                    <p><?php echo $descriptives->getCofeeRegion(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-special-menu animated fadeInDown wow" data-wow-delay=".1s">
                            <div class="sp-menu-thumb">
                                <img class="pull-left" src="./StyleIndex/img/menu-chart.jpg" alt="" />
                            </div>
                            <div class="sp-menu-content">
                                <div class="sp-menu-name-price">
                                    <h4>Características de la región</h4>
                                    <p><?php echo $descriptives->getCharacteristicRegion(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-special-menu animated fadeInDown wow" data-wow-delay=".1s">
                            <div class="sp-menu-thumb">
                                <img class="pull-left" src="./StyleIndex/img/menu-chart.jpg" alt="" />
                            </div>
                            <div class="sp-menu-content">
                                <div class="sp-menu-name-price">
                                    <h4>Altura</h4>
                                    <p><?php echo $descriptives->getHeight(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-special-menu animated fadeInDown wow" data-wow-delay=".1s">
                            <div class="sp-menu-thumb">
                                <img class="pull-left" src="./StyleIndex/img/menu-chart.jpg" alt="" />
                            </div>
                            <div class="sp-menu-content">
                                <div class="sp-menu-name-price">
                                    <h4>Variedades de café</h4>
                                    <p><?php echo $descriptives->getVarietiesCofee(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-special-menu animated fadeInDown wow" data-wow-delay=".1s">
                            <div class="sp-menu-thumb">
                                <img class="pull-left" src="./StyleIndex/img/menu-chart.jpg" alt="" />
                            </div>
                            <div class="sp-menu-content">
                                <div class="sp-menu-name-price">
                                    <h4>Periodo de cosecha</h4>
                                    <p><?php echo $descriptives->getHarvestPeriod(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="single-special-menu animated fadeInDown wow" data-wow-delay=".1s">
                            <div class="sp-menu-thumb">
                                <img class="pull-left" src="./StyleIndex/img/menu-chart.jpg" alt="" />
                            </div>
                            <div class="sp-menu-content">
                                <div class="sp-menu-name-price">
                                    <h4>Tipo de secado</h4>
                                    <p><?php echo $descriptives->getDriedType(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== special menu section  End ========== -->
        <!-- ========== gallery ========== -->
        <section id="gallery" class="gallery-section pt100 pb100 bg-black">
            <div class="container">
                <!-- section title -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-center mb90 text-center mb90 fadeIn animated wow" data-wow-delay=".2s">
                            <h2>Galería</h2>
                            <div class="title-seperator"></div>
                        </div>
                    </div>
                </div>
                <!-- end section title-->
                <div class="row">

                    <div class="col-sm-12">
                        <div class="zoom-gallery">
                            <div class="grid-item col-sm-6" data-wow-delay=".1s">
                                <a class="overlay" href="./StyleIndex/img/gallery/gallery-1-full.jpg" title="Black coffee">
                                    <img src="./StyleIndex/img/gallery/gallery-1.jpg" alt="" />
                                    <span class="icon-focus item-icon"></span>
                                </a>
                            </div>

                            <div class="grid-item col-sm-6" data-wow-delay=".2s">
                                <a class="overlay" href="./StyleIndex/img/gallery/gallery-5-full.jpg" title="Cold coffee">
                                    <img src="./StyleIndex/img/gallery/gallery-2.jpg" alt="" />
                                    <span class="icon-focus item-icon"></span>
                                </a>
                            </div>
                            <div class="grid-item col-sm-6" data-wow-delay=".3s">
                                <a class="overlay" href="./StyleIndex/img/gallery/gallery-3-full.jpg" title="Black coffee">
                                    <img src="./StyleIndex/img/gallery/gallery-3.jpg" alt="" />
                                    <span class="icon-focus item-icon"></span>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="grid-item col-sm-4" data-wow-delay=".4s">
                                <a class="overlay" href="./StyleIndex/img/gallery/gallery-4-full.jpg" title="Special coffee">
                                    <img src="./StyleIndex/img/gallery/gallery-4.jpg" alt="" />
                                    <span class="icon-focus item-icon"></span>
                                </a>
                            </div>
                            <div class="grid-item col-sm-4" data-wow-delay=".5s">
                                <a class="overlay" href="./StyleIndex/img/gallery/gallery-5-full.jpg" title="Layered coffee">
                                    <img src="./StyleIndex/img/gallery/gallery-5.jpg" alt="" />
                                    <span class="icon-focus item-icon"></span>
                                </a>
                            </div>
                            <div class="grid-item col-sm-4" data-wow-delay=".6s">
                                <a class="overlay" href="./StyleIndex/img/gallery/gallery-6-full.jpg" title="Been coffee">
                                    <img src="./StyleIndex/img/gallery/gallery-6.jpg" alt="" />
                                    <span class="icon-focus item-icon"></span>
                                </a>
                            </div>
                            <div class="grid-item col-sm-4" data-wow-delay=".1s">
                                <a class="overlay" href="./StyleIndex/img/gallery/gallery-7-full.jpg" title="Layered coffee">
                                    <img src="./StyleIndex/img/gallery/gallery-7.jpg" alt="" />
                                    <span class="icon-focus item-icon"></span>
                                </a>
                            </div>
                            <div class="grid-item col-sm-4" data-wow-delay=".2s">
                                <a class="overlay" href="./StyleIndex/img/gallery/gallery-8-full.jpg" title="Special coffee">
                                    <img src="./StyleIndex/img/gallery/gallery-8.jpg" alt="" />
                                    <span class="icon-focus item-icon"></span>
                                </a>
                            </div>
                            <div class="grid-item col-sm-4" data-wow-delay=".3s">
                                <a class="overlay" href="./StyleIndex/img/gallery/gallery-9-full.jpg" title="Been coffee">
                                    <img src="./StyleIndex/img/gallery/gallery-9.jpg" alt="" />
                                    <span class="icon-focus item-icon"></span>
                                </a>
                            </div>	
                        </div>

                        <div class="clearfix"></div>
                        <a href="#" class="buttons animated zoomIn wow" data-wow-delay=".2s" id="loadmore">Load more</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== gallery section End ========== -->
        
        <!-- ========== Testimonial section ========== -->
        <section id="reviews" class="pt100 pb100 bg-dark">
            <div class="container">
                <!-- section title -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-center mb90 fadeIn animated wow" data-wow-delay=".2s">
                            <h2>Nuestros logros</h2>
                            <div class="title-seperator"></div>
                        </div>
                    </div>
                </div>
                <!-- end section title-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="testimonial-carousel">
                            <?php foreach($achievements as $currentAchievement) {
                                ?>
                                <div class="testimonial-item bg-black">
<!--                                    <div class="testimonial-image">
                                        <img src="./StyleIndex/img/testimonial1.jpg" alt="" />
                                    </div>-->
                                    <div class="testimonial-body">
                                        <!--<h3>Al-Rayhan</h3>-->
                                        <!--<p>Co-Founder & COO</p>-->
                                        <blockquote><i class="fa fa-quote-left" aria-hidden="true"></i>
                                            <?php
                                            echo $currentAchievement->getAchievement();
                                            ?>
                                        </blockquote>
                                        <!--<a href="http://www.companywebsite.com">DeviserWeb</a>-->
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!-- ========== Testimonial section End ========== -->
        <!-- ========== contact section ========== -->
        <section id="contact" class="pt100 pb100 bg-black">
            
            <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-center mb90 fadeIn animated wow" data-wow-delay=".2s">
                            <h2>Contacto</h2>
                            <div class="title-seperator"></div>
                        </div>
                    </div>
                </div>
            
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3931.6559350651164!2d-83.73175398578373!3d9.795151892991782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe1ee08383bbded24!2sMicrobeneficio+%26+Tostadora+Gamboa+S.R.L!5e0!3m2!1ses!2ses!4v1488831131587" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            
            <div class="container">
                <!-- section title -->
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-contact-widget bg-dark animated fadeInDown wow" data-wow-delay=".2s">
                            <div class="contact-widget-icon">
                                <i class="fa fa-paper-plane"></i>
                            </div>
                            <h3>Ubicación</h3>
                            <p><span class="color-primary">Dirección:</span><br><?php echo $organization->getLocation(); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-contact-widget bg-dark animated fadeInDown wow" data-wow-delay=".1s">
                            <div class="contact-widget-icon">
                                <i class="fa fa-facebook"></i>
                            </div>
                            <h3>Síguenos</h3>
                            <span class="color-primary">Facebook</span>
                            <br><a href="https://www.facebook.com/cafepuroaromas/?fref=ts" target="_blank">Café Aromas</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-contact-widget bg-dark animated fadeInDown wow" data-wow-delay=".3s">
                            <div class="contact-widget-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h3>Contacto</h3>
                            <span class="color-primary">Teléfono(s)</span><br>
                            <p>
                            <?php 
                            foreach($phones as $currentPhone){
                                echo "(+506)&nbsp" . $currentPhone->getPhone() . "<br>";
                            }
                            ?>
                            </p>
                            <span class="color-primary">Correo(s)</span><br>
                            <p>
                            <?php 
                            foreach($emails as $currentEmail){
                                ?>
                                <a href="<?php echo $currentEmail->getEmail(); ?>">
                                    <?php echo $currentEmail->getEmail(); ?></a><br>
                                <?php
                            }
                            ?>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end section title-->
            </div>
        </section>
        <!-- ========== contact section End ========== -->
        <!-- ========== footer ========== -->
        <footer id="footer" class="pt50 pb50 bg-black footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 text-center-xs">
                        <h3 class="logo animated fadeInLeft wow" data-wow-delay=".1s">Café Aromas</h3>
                    </div>
                    <div class="col-sm-9 text-right text-center-xs">
                        <p class="animated fadeInRight wow" data-wow-delay=".2s">&copy; 2017 Café Aromas - Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ========== footer section End ========== -->
        <!-- JQUERY -->
        <script type="text/javascript" src="./StyleIndex/js/jquery.min.js"></script>
        <!-- Bootstrap js -->
        <script type="text/javascript" src="./StyleIndex/js/bootstrap.min.js"></script>
        <!-- Onepage nav js -->
        <script type="text/javascript" src="./StyleIndex/js/jquery.nav.js"></script>
        <!-- Stellar js -->
        <script type="text/javascript" src="./StyleIndex/js/jquery.stellar.min.js"></script>
        <!-- Owl curosel js -->
        <script type="text/javascript" src="./StyleIndex/js/owl.carousel.min.js" ></script>
        <!-- magnific popuop js -->
        <script type="text/javascript" src="./StyleIndex/js/jquery.magnific-popup.min.js"></script>
        <!-- WOW JS -->
        <script src="./StyleIndex/js/wow.min.js"></script>
        <!-- Custom js -->
        <script type="text/javascript" src="./StyleIndex/js/app.js"></script>
    </body>
</html>
