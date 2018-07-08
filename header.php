<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-aa">
 *
 * @package Pet Animal Store
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900|EB+Garamond|Vollkorn" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="main-bodybox">
 <div class="toggle"><a class="toggleMenu" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src='<?php echo get_stylesheet_directory_uri(); ?>/images/logo.jpg'></a></div>

<div class="topbar">
  	<div class="container">
		  	<div class="row">
		  	<div class="site_header col-lg-10 col-sm-12 offset-lg-1">
			  	<div class="row">
				    <div class="col-md-2 col-sm-2">
				    	<div class="logo">
					      	<?php if( has_custom_logo() ) :
                                    pet_animal_store_the_custom_logo();
                            endif; ?>			         	
					    </div>
				    </div>
				    <div class="col-lg-7 col-sm-10">

                        <?php $description = get_bloginfo( 'description', 'display' );
                        if ( $description || is_customize_preview() ) : ?> 
                            <h1 class="site-description"><?php echo esc_html($description); ?>       
                        <?php endif; ?>
                            </br><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    </div>
                    <address class="col-md-3 col-sm-3">
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> Preradovićeva 11, Petrovaradin</span></br>
                        <span><i class="fa fa-phone-square" aria-hidden="true"></i> 065/89-89-107</span>
                        <p><a href="https://www.facebook.com/pages/biz/Veterinarska-Ambulanta-Master-Vet-Team-1838774376417196/" target="_blank"><i class="social-icon fab fa-facebook-f"></i></a><a href="https://www.instagram.com/mastervetteam/" target="_blank"><i class="social-icon fab fa-instagram"></i></a></p>
                    </address>
                </div>
                <div id="header" class="header-slider row">      
                    <div class="col-sm-12 col-md-8 menubg">
                        <div class="menubox nav">
                            <div class="mainmenu">
                                <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="col-md-4 cta">
                        <p><?php echo __("Hitne intervencije 00-24h", 'pet-animal-store'); ?></p>
                        <p><?php echo __("065/89-89-107", 'pet-animal-store'); ?></p>
					</div> 
                </div>
            </div>
        </div>
    </div>
</div>


 <?php
 do_action( 'pet_animal_store_above_slider' );
 if ( is_front_page() || is_home() ) : ?>


    <div class="slider-main">
        <div id="slider" class="nivoSlider">
            <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/header_banner_3.png'>
        </div>
    </div>

 <?php
 elseif(!is_page_template( 'page-template/contact.php' )): ?>
     <div class="slider-main">
         <div id="slider" class="nivoSlider">
             <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/header_banner_4.png'>
         </div>
     </div>
 <?php
 endif;
 do_action( 'pet_animal_store_below_slider' );
 ?>

                        



