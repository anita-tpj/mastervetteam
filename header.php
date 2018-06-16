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
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="main-bodybox">
 <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','pet-animal-store'); ?></a></div>

<div class="topbar">
  	<div class="container">
		  	<div class="row">
		  	<div class="site_header col-md-10 col-sm-12 offset-md-1">
			  	<div class="row">
				    <div class="col-md-3 col-sm-3">
				    	<div class="logo">
					      	<?php if( has_custom_logo() ) :
                                    pet_animal_store_the_custom_logo();
                            endif; ?>			         	
					    </div>
				    </div>
				    <div class="col-md-9 col-sm-9">
                        <div class="baricon row">
                            <div class="col-md-5 col-sm-5">
                            <i class="fas fa-at"></i><p class="email_title"><?php echo esc_html(get_theme_mod('pet_animal_store_mail_title',__('EMAIL','pet-animal-store'))); ?></p>
                                <?php if( get_theme_mod( 'pet_animal_store_mail','' ) != '') { ?>
                                    <p class="email icon social fb"><?php echo esc_html( get_theme_mod('pet_animal_store_mail',__('support@example.com','pet-animal-store')) ); ?></p>
                                    <?php } ?>
                            </div>
                            <div class="col-md-5 col-sm-5">
                            <i class="fas fa-phone-volume"></i><p class="call_title"><?php echo esc_html(get_theme_mod('pet_animal_store_call_title',__('CALL NOW','pet-animal-store'))); ?></p>
                                <?php if( get_theme_mod( 'pet_animal_store_call','' ) != '') { ?>
                                    <p class="call"><?php echo esc_html( get_theme_mod('pet_animal_store_call',__('(518) 356-5373','pet-animal-store') )); ?></p>
                                    <?php } ?>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <?php if( get_theme_mod( 'pet_animal_store_youtube_url','' ) != '') { ?>
                                    <a href="<?php echo esc_url( get_theme_mod( 'pet_animal_store_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i></a>
                                    <?php } ?>
                                    <?php if( get_theme_mod( 'pet_animal_store_facebook_url','' ) != '') { ?>
                                        <a href="<?php echo esc_url( get_theme_mod( 'pet_animal_store_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
                                        <?php } ?>
                                        <?php if( get_theme_mod( 'pet_animal_store_twitter_url','' ) != '') { ?>
                                            <a href="<?php echo esc_url( get_theme_mod( 'pet_animal_store_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
                                            <?php } ?>
                                            <?php if( get_theme_mod( 'pet_animal_store_rss_url','' ) != '') { ?>
                                                <a href="<?php echo esc_url( get_theme_mod( 'pet_animal_store_rss_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
                                                <?php } ?>
                            </div>
                        </div>
                        					        	
                        <?php $description = get_bloginfo( 'description', 'display' );
                        if ( $description || is_customize_preview() ) : ?> 
                            <h1 class="site-description"><?php echo esc_html($description); ?>       
                        <?php endif; ?>
                            </br><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    </div>
                </div>
                <div id="header" class="header-slider row">      
                    <div class="col-md-9 col-sm-9 menubg">
                        <div class="menubox nav">
                            <div class="mainmenu">
                                <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="col-md-3 col-sm-3 searchbg">
						<div class="emergency">
						  <p>Hitne intervencije 00-24</p>
						</div>
					</div> 
                </div>
            </div>
        </div>
    </div>
</div>
                        



