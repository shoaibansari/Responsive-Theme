<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrao_to_WordPress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

       <!--Bootstrap Core CSS-->
      <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
      
     <!--FontAwsome Icons-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/font-awesome/css/font-awesome.min.css">
    
    <!--Google Fonts-->
   <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
   
    <!--Custom CSS-->
   <!--<link rel="stylesheet" href="css/style.css">-->





<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrao-to-wordpress' ); ?></a>

	
     <!--HEADER 
     ===========================================-->
    <header class="site-header" role="banner">
    
        <!--NAVBAR 
        ===========================================-->
        <div class="navbar-wrapper">
        
             <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                
                <div class="container">
                   <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                             <span class="sr-only">Toggle navigation</span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                           <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo (1).png" alt="Bootstrao to Wordpress">
                        </a>
                   </div><!-- navbar-header -->
                   
                   <?php
				   
				       wp_nav_menu( array(
					   
					     'theme_location'  => 'primary',
						 'container'       => 'nav',
						 'container_class' => 'navbar-collapse collapse',
						 'menu_class'      => 'nav navbar-nav navbar-right',
						 
					   
					   ));
				      
				   ?>
                   
                   
                </div><!-- container -->
             
             </div><!-- navbar -->
        
        </div><!--navbar-wrapper-->
        
    </header>
    
    </div>
</body>