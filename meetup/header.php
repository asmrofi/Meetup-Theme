<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Meetup
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Meetup is a free responsive single page bootstrap template by designerdada.com">
    <meta name="author" content="Akash Bhadange">
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?php wp_head(); ?>
</head>

<body id="page-top" data-spy="scroll" data-target=".side-menu"<?php body_class();?>>
    <nav class="side-menu">
   
  
        <?php
                wp_nav_menu(array(
                'theme_location' => 'menu-1',
                ));
        ?>
    </nav>
    <div class="container-fluid">
        <!-- Start: Header -->
        <div class="row hero-header" id="home">
            <div class="col-md-7">
               <?php if(current_theme_supports("custom-logo")): ?>
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>
                <?php
                endif;
                ?>
                <h1><?php bloginfo("name"); ?></h1>
                <h3><?php bloginfo("description"); ?></h3>
                <h4><?php
                            global $meetup;
                            echo wp_kses_post($meetup['hdate']);
                           ?></h4>
                <a href="<?php
                            global $meetup;
                            echo wp_kses_post($meetup['hbuttonurl']);
                           ?>" class="btn btn-lg btn-red">
                           <?php
                                global $meetup;
                                echo wp_kses_post($meetup['hbutton']);
                           ?> <span class="ti-arrow-right"></span></a>

            </div>
            <div class="col-md-5 hidden-xs">
                <img src="<?php
                            global $meetup;
                            echo wp_kses_post($meetup['side-image']['url']);
                           ?>" class="rocket animated bounce">
            </div>
        </div>
        <!-- End: Header -->
    </div>
    