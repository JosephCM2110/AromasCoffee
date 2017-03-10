<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <!-- ========== Title ========== -->
        <title>Café Aromas</title>
        <!-- ========== Favicon Ico ========== -->
        <link rel="icon" href="./Resources/Icons/FOTO AROMAS.jpg" type="image/x-icon">
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
        <link href="StyleIndex/css/zoom.css" rel="stylesheet" type="text/css"/>
        <link href="StyleIndex/css/rotate.css" rel="stylesheet" type="text/css"/>
        <script src="StyleIndex/js/validateFields.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>

        <?php
        include_once './Business/InstancesIndex.php';
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
                        <li><a href="#reviews">Logros</a></li>
                        <li><a href="#tour">Tour del café</a></li>
                        <li><a href="#contact">Contacto</a></li>
                        <li> <div style= "background: transparent;" id="google_translate_element"></div><script type="text/javascript">
                            function googleTranslateElementInit() {
                                new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.FloatPosition.TOP_RIGHT}, 'google_translate_element');
                                document.getElementById(':0.targetLanguage').style.backgroundColor='transparent';
                                document.getElementById(':0.targetLanguage').style.border='none';
                            }
                        </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></li>
                     
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
                <?php
                $cont = 0;
                foreach ($allImages as $currentImage) {
                    if ($cont == 3) {
                        break;
                    }
                    $cont++;
                    ?>
                    <div class="slider_item">
                        <div class="slide-bg-image" style="background-image: url('./Resources/ImagesGalery/<?php echo $currentImage->getImagePath(); ?>')">
                            <div class="bg-overlay opacity-6"></div>
                            <div class="hero_slider_inner">
                                <div class="container">
                                    <!--<a class="hero-logo" href="#"><img src="./StyleIndex/img/logo.png" alt="" /></a>-->
                                    <h1 class="intro">Café Aromas</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
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
                            <h2 class="zoom">Nuestra historia</h2>
                            <div class="title-seperator"></div>
                        </div>
                    </div>
                </div>
                <!-- end section title-->
                <div class="row">
                    <div class="col-sm-8 text-center our-story-content col-sm-offset-2">
                        <p class="fadeIn animated wow zoom" data-wow-delay=".1s">
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
                            <h2 class="zoom">Nosotros</h2>
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
                            <p class="zoom">
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
                            <p class="zoom">
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
                                foreach ($characteristics as $currentCharacteristic) {
                                    echo '<li class="zoom">' . $currentCharacteristic->getCharateristic() . '</li>';
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
                            <h2 class="zoom">Productos</h2>
                            <div class="title-seperator"></div>
                        </div>
                    </div>
                </div>
                <!-- end section title-->
                <div class="row">
                    <?php
                    foreach ($products as $currentProduct) {
                        $productImages = $imageProductBusiness->
                                getAllTBImageProductsByProduct($currentProduct->getIdProduct());
                        ?>
                        <div class="col-sm-4">
                            <div class="single-offer text-center animated fadeInDown wow" data-wow-delay=".1s">        
                                <div class="flip-container center-block" ontouchstart="this.classList.toggle('hover');">
                                    <div class="flipper">
                                        <div class="front">
                                            <img src="./Resources/ImagesProducts/<?php echo $productImages[0]->getImagePath(); ?>" width="220px" height="290px" />

                                        </div>
                                        <div class="back">
                                            <img src="./Resources/ImagesProducts/<?php echo $productImages[1]->getImagePath(); ?>" width="220px" height="290px" />
                                        </div>
                                    </div>
                                </div>
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
                            <h2 class="zoom">Nuestro café</h2>
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
                                    <h4 class="text-center">Región del café</h4>
                                    <p class="text-center"><?php echo $descriptives->getCofeeRegion(); ?></p>
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
                                    <h4 class="text-center">Características de la región</h4>
                                    <p class="text-center"><?php echo $descriptives->getCharacteristicRegion(); ?></p>
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
                                    <h4 class="text-center">Altura</h4>
                                    <p class="text-center"><?php echo $descriptives->getHeight(); ?></p>
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
                                    <h4 class="text-center">Variedades de café</h4>
                                    <p class="text-center"><?php echo $descriptives->getVarietiesCofee(); ?></p>
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
                                    <h4 class="text-center">Periodo de cosecha</h4>
                                    <p class="text-center"><?php echo $descriptives->getHarvestPeriod(); ?></p>
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
                                    <h4 class="text-center">Tipo de secado</h4>
                                    <p class="text-center"><?php echo $descriptives->getDriedType(); ?></p>
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
                            <h2 class="zoom">Galería</h2>
                            <div class="title-seperator"></div>
                        </div>
                    </div>
                </div>
                <!-- end section title-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="zoom-gallery">
                            <?php
                            foreach ($allImages as $currentImage) {
                                ?>
                                <div class="grid-item col-sm-6" data-wow-delay=".1s">
                                    <a class="overlay" href="./Resources/ImagesGalery/<?php echo $currentImage->getImagePath(); ?>" title="<?php echo $currentImage->getDescription(); ?>">
                                        <img src="./Resources/ImagesGalery/<?php echo $currentImage->getImagePath(); ?>" alt="" />
                                        <span class="icon-focus item-icon"></span>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="clearfix"></div>
                        <a href="#" class="buttons animated zoomIn wow" data-wow-delay=".2s" id="loadmore">Ver más</a>
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
                            <h2 class="zoom">Nuestros logros</h2>
                            <div class="title-seperator"></div>
                        </div>
                    </div>
                </div>
                <!-- end section title-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="testimonial-carousel">
                            <?php foreach ($achievements as $currentAchievement) {
                                ?>
                                <div class="testimonial-item bg-black" >
                                    <!--                                   
                                    <div class="testimonial-image">
                                        <img src="./StyleIndex/img/testimonial1.jpg" alt="" />
                                        </div>
                                    -->
                                    <div class="testimonial-body">
                                        <!--<h3>Al-Rayhan</h3>-->
                                        <!--<p>Co-Founder & COO</p>-->
                                        <blockquote><i class="fa fa-align-center" aria-hidden="true"></i>
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

        <section id="tour" class="pt100 pb100 our-story bg-dark" style="background-image: url('./StyleIndex/img/our-story-bg.png')">
            <div class="container">
                <!-- section title -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title text-center mb90 fadeIn animated wow" data-wow-delay=".2s">
                            <h2 class="zoom">Tour del café</h2>
                            <div class="title-seperator"></div>
                        </div>
                    </div>
                </div>
                <!-- end section title-->
                <?php foreach ($coffeeTours as $currentCoffeeTour) {
                    ?>
                    <div class="row">
                        <div class="col-sm-8 text-center our-story-content col-sm-offset-2">
                            <p class="fadeIn animated wow zoom" data-wow-delay=".1s">
                                <?php
                                echo substr($currentCoffeeTour->getDescriptionCoffeeTour(), 0, 275);
                                ?>
                            </p>
                            <a href="#" class="buttons zoomIn animated wow" data-wow-delay=".2s" data-toggle="modal" data-target="#tourModal">Leer más</a>
                        </div>
                        <!-- full story modal-->
                        <!-- Modal -->
                        <div class="modal fade" id="tourModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-dark">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                    </div>
                                    <div class="modal-body bg-dark">
                                        <h3 class="text-center">Tour del café</h3>
                                        <p class="text-justify">
                                            <?php
                                            echo nl2br($currentCoffeeTour->getDescriptionCoffeeTour());
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>
        </section>
        <!-- ========== contact section ========== -->
        <section id="contact" class="pt100 pb100 bg-black">

            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center mb90 fadeIn animated wow" data-wow-delay=".2s">
                        <h2 class="zoom">Contacto</h2>
                        <p>Para cualquier consulta escríbanos, 
                            nos gustaría saber de tí y de tus opiniones sobre Café Aromas.</p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
                    <form name="frmContacto" method="post" enctype="multipart/form-data" action="./Business/SmtpAction.php">
                        <div class="form-group">
                            <label for="Nombre">Nombre:</label>
                            <input type="text" class="form-control" id="Name" name="Name" placeholder="Nombre">
                            <label for="error1" id="error1" style="color: red;"></label>
                        </div>
                        <div class="form-group">
                            <label for="Telefono">Teléfono:</label>
                            <input type="number" class="form-control" id="Telephone" name="Telephone" placeholder="Teléfono">
                            <label for="error2" id="error2" style="color: red;"></label>
                        </div>
                        <div class="form-group">
                            <label for="Correo electronico">Correo electrónico:</label>
                            <input type="email" class="form-control" id="Email" name="Email" placeholder="Correo electrónico">
                            <label for="error3" id="error3" style="color: red;"></label>
                        </div>
                        <div class="form-group">
                            <label for="Mensaje">Mensaje:</label>
                            <textarea class="form-control" rows="3" id="Comments" name="Comments" placeholder="Mensaje"></textarea>
                            <label for="error4" id="error4" style="color: red;"></label>
                        </div>                             
                        <input style="color: black;" type="submit" value="Enviar" id="btnAccept" name="btnAccept" 
                               class="btn-block" onclick="return validateFields()" />    

                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center mb90 fadeIn animated wow" data-wow-delay=".2s">
                        <div class="title-seperator"></div>
                        <h2 class="zoom">Localización</h2>
                        <div class="title-seperator"></div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3931.6559350651164!2d-83.73175398578373!3d9.795151892991782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe1ee08383bbded24!2sMicrobeneficio+%26+Tostadora+Gamboa+S.R.L!5e0!3m2!1ses!2ses!4v1488831131587" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>
                </div>
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
                                foreach ($phones as $currentPhone) {
                                    echo "(+506)&nbsp" . $currentPhone->getPhone() . "<br>";
                                }
                                ?>
                            </p>
                            <span class="color-primary">Correo(s)</span><br>
                            <p>
                                <?php
                                foreach ($emails as $currentEmail) {
                                    ?>
                                <p>
                                    <?php echo $currentEmail->getEmail(); ?></p><br>
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
                    <div class="col-sm-4 text-center-xs">
                        <h3 class="logo animated fadeInLeft wow" data-wow-delay=".1s"><a class="logo animated fadeInLeft wow" href="./PresentationAdmin/login.php">Café Aromas</a></h3>
                    </div>
                    <div class="col-md-2">
                        <button style="color: #000;" onclick="return modalSelectDevelo('Michael Meléndez Mesén',
                                        'Joseph Cordero Marín');
                                "type="button" class="btn btn-main"
                                data-toggle="modal" data-target="#myModal2">
                            TCU 563 Universidad de Costa Rica <br> Sede del Atlántico</button>
                    </div>
                    <div class="col-sm-6 text-right text-center-xs">
                        <p class="animated fadeInRight wow" data-wow-delay=".2s">&copy; 2017 Café Aromas - Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Modal
           ============================================= -->
        <!-- ========== Testimonial section End ========== -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">    
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body bg-dark">
                        <div class="text">

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Modal desarrolladores-->
        <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">    
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h4 class="modal-title">Desarrolladores:</h4>
                    </div>
                    <div class="modal-body bg-dark">
                        <ul>
                            <li><a style="color: white" class="Desa1" href="https://www.facebook.com/michael.melendezm?fref=grp_mmbr_list"></a></li>
                            <li><a style="color: white" class="Desa2" href="https://www.facebook.com/joseph.cordero.94?fref=grp_mmbr_list"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <script>
            function modalSelect(modalMessage, modalTitle) {
                document.getElementsByClassName("modal-title")[0].textContent = modalTitle;
                document.getElementsByClassName("text")[0].textContent = modalMessage;
            }
            function modalSelectDevelo(name1, name2) {
                document.getElementsByClassName("Desa1")[0].textContent = name1;
                document.getElementsByClassName("Desa2")[0].textContent = name2;
            }
        </script> 
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