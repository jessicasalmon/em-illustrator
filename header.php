<!DOCTYPE html>

<html>

  <head>
    <title><?php wp_title(); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fb og sharing -->
    <meta property="og:url"             content="http://emilymcgovern.com/" />
    <meta property="og:title"           content="Official website of Emily’s Cartoons" />
    <meta property="og:description"     content="Home of comics including Background Slytherin, Bloodlust &amp; Bonnets and more." />
    <meta property="og:image"           content="http://emilymcgovern.com/wp-content/uploads/2017/01/og-image.png" />

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <?php include_once("analyticstracking.php") ?>
    <!-- call GA -->

    <div class="page-container">


    <!--  SITE HEADER -->
    <!-- ================================================================ -->
    <header>
      <div class="header row">

          <div class="logo-container col-sm-12">
            <a href="<?php echo esc_url(home_url("/"))?>">
              <img class="em-header-logo"
              src="<?= get_template_directory_uri()?>/assets/graphics/em-logo.png" alt="<?php echo esc_attr(get_bloginfo( 'name' )) ?>"/></a>
          </div>

        <div class="line-break-header col-sm-12">
           <hr />
         </div>

      </div>



      <!-- navigation & social links row-->
      <div class="nav-bar row">

        <!-- Displays primary navigation -->
        <?php
          $defaults = array(
            'container' => false,
            'theme_location' => 'primary-menu', //tells wp where menu lives
            'menu_class' => 'nav col-xs-12 col-sm-7 col-md-8'
          );

          wp_nav_menu( $defaults );
        ?>


        <!-- social media links -->
        <div class="social-links col-xs-12 col-sm-5 col-md-4">

              <div class="social-links-container">

                <div class="social-link-icons">
                  <a href="https://twitter.com/emilyscartoons" target="blank"
                    title="keywords-here">
                      <img class="soc-link-icon-img"
                        src="<?= get_template_directory_uri() ?>/assets/graphics/twitter-icon.png" /></a>
                </div>

                <div class="social-link-icons">
                  <a href="https://en-gb.facebook.com/backgroundslytherin/" target="blank"
                    title="keywords-here">
                      <img class="soc-link-icon-img"
                        src="<?= get_template_directory_uri() ?>/assets/graphics/fb-icon.png" /></a>
                </div>

                <div class="social-link-icons">
                  <a href="http://emilyscartoons.tumblr.com/" target="blank"
                    title="keywords-here">
                      <img class="soc-link-icon-img"
                      src="<?= get_template_directory_uri() ?>/assets/graphics/tumblr-icon.png" /></a>
                </div>

                <div class="social-link-icons">
                  <a href="https://www.instagram.com/emilyscartoons/" target="blank"
                   title="keywords-here">
                    <img class="soc-link-icon-img"
                      src="<?= get_template_directory_uri() ?>/assets/graphics/ig-icon.png" /></a>
                </div>

              </div>

          </div>

      </div>

    </header>

<div id="content">
