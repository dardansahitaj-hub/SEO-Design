<!DOCTYPE html>

<html class="no-js" lang="zxx">

  <head>

    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script

      async

      src="https://www.googletagmanager.com/gtag/js?id=UA-163863049-2"

    ></script>

    <script>

      window.dataLayer = window.dataLayer || [];

      function gtag() {

        dataLayer.push(arguments);

      }

      gtag("js", new Date());



      gtag("config", "UA-163863049-2");

    </script>



    <meta charset="utf-8" />

    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>SEO Design - Agence web & communication</title>

    <meta name="description" content="" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta

      name="description"

      content="SEO Design - Agence web & communication "

    />

    <meta name="robots" content="index,follow" />



    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo/logoMini.png" />


    <!-- CSS here -->

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/owl.carousel.min.css" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/flaticon.css" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/slicknav.css" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/animate.min.css" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/magnific-popup.css" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/fontawesome-all.min.css" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/themify-icons.css" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/slick.css" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/nice-select.css" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/style.css" />

  </head>


  <body>
  <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->


   <header>

      <!-- Header Start -->

      <div  class="header-area header-transparrent">

        <div id="navbar" class="main-header header-sticky">

          <div class="container">

            <div class="row align-items-center">

              <!-- Logo -->

              <div class="col-xl-2 col-lg-2 col-md-1">

                <div>

                    <a href="index.html">

                      <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo/logo.png" alt="" class="logoSEO bounce-animate"/>

                     </a>

                </div>

              </div>



              <div class="col-xl-8 col-lg-8 col-md-8">

                <!-- Main-menu -->

                <div class="main-menu d-none d-lg-block">

                  <nav>

<!-- <li><a href="index.php" class="btn header-btn " role="button"  aria-haspopup="true">Seo Design</a></li>

<li><a href="les-services-que-nous-vous-proposons.html" class="btn header-btn" role="button" aria-haspopup="true">Pour vous</a></li>

<li><a href="a-propos-de-nous.html" class="btn header-btn" role="button" aria-haspopup="true">Nos réalisations</a></li> -->

                    <ul id="navigation" class="d-flex justify-content-around">
                      <?php
                        $nomMenu = "Menu";
                        $argsM = array(
                          'theme_location' => $nomMenu,
                          'container' => false,
                          'echo' => false,
                          'fallback_cb' => false,
                          'items_wrap' => '%3$s',
                          'depth' => 0,
                        );
                        $menu = wp_nav_menu($argsM);
                        $menu = str_replace('<a', '<a class="btn header-btn text-white"', $menu);

                        echo $menu;

                        
                                             
                        ?>
                    </ul>

                  </nav>

                </div>

              </div>

              <!-- Mobile Menu -->

              <div class="col-12">

                <div class="mobile_menu d-block d-lg-none mt-3"></div>

              </div>

            </div>

          </div>

        </div>

      </div>

      <!-- Header End --> 

    </header>

