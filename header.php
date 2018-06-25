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
 <div class="toggle"><a class="toggleMenu" href="#"><img src='<?php echo get_stylesheet_directory_uri(); ?>/images/logo.jpg'></a></div>

<div class="topbar">
  	<div class="container">
		  	<div class="row">
		  	<div class="site_header col-lg-10 col-sm-12 offset-lg-1">
			  	<div class="row">
				    <div class="col-md-3 col-sm-3">
				    	<div class="logo">
					      	<?php if( has_custom_logo() ) :
                                    pet_animal_store_the_custom_logo();
                            endif; ?>			         	
					    </div>
				    </div>
				    <div class="col-md-9 col-sm-9">

                        <?php $description = get_bloginfo( 'description', 'display' );
                        if ( $description || is_customize_preview() ) : ?> 
                            <h1 class="site-description"><?php echo esc_html($description); ?>       
                        <?php endif; ?>
                            </br><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    </div>
                </div>
                <div id="header" class="header-slider row">      
                    <div class="col-sm-12 col-md-9 menubg">
                        <div class="menubox nav">
                            <div class="mainmenu">
                                <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="col-md-3 cta">
                        <p><?php echo __("Hitne intervencije 00h-24h", 'pet-animal-store'); ?></p>
                        <p><?php echo __("065/89-89-107", 'pet-animal-store'); ?></p>
					</div> 
                </div>
            </div>
        </div>
    </div>
</div>


 <?php
 if ( is_front_page() || is_home() ) :

 do_action( 'pet_animal_store_above_slider' ); ?>

 <?php
 // Get pages set in the customizer (if any)
 $pages = array();
 for ( $count = 1; $count <= 5; $count++ ) {
     $mod = absint( get_theme_mod( 'pet_animal_store_slidersettings-page-' . $count ) );
     if ( 'page-none-selected' != $mod ) {
         $pages[] = $mod;
     }
 }
 if( !empty($pages) ) :
     $args = array(
         'posts_per_page' => 5,
         'post_type' => 'page',
         'post__in' => $pages,
         'orderby' => 'post__in'
     );
     $query = new WP_Query( $args );
     if ( $query->have_posts() ) :
         $count = 1;
         ?>
         <div class="slider-main">
             <div id="slider" class="nivoSlider">
                 <?php
                 $pet_animal_store_n = 0;
                 while ( $query->have_posts() ) : $query->the_post();

                     $pet_animal_store_n++;
                     $pet_animal_store_slideno[] = $pet_animal_store_n;
                     $pet_animal_store_slidetitle[] = get_the_title();
                     $pet_animal_store_slidecontent[] = get_the_content();
                     $pet_animal_store_slidelink[] = esc_url(get_permalink());
                     ?>
                     <img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $pet_animal_store_n ); ?>" />
                     <?php
                     $count++;
                 endwhile;
                 wp_reset_postdata();
                 ?>
             </div>

             <?php
             $pet_animal_store_k = 0;
             foreach( $pet_animal_store_slideno as $pet_animal_store_sln ){ ?>
                 <div id="slidecaption<?php echo esc_attr( $pet_animal_store_sln ); ?>" class="nivo-html-caption">
                     <div class="slide-cap  ">
                         <div class="container">
                             <h2><?php echo esc_html( $pet_animal_store_slidetitle[$pet_animal_store_k] ); ?></h2>
                             <p><?php echo esc_html( $pet_animal_store_slidecontent[$pet_animal_store_k] ); ?></p>
                             <a class="read-more" href="<?php echo esc_url( $pet_animal_store_slidelink[$pet_animal_store_k] ); ?>"><?php  esc_html_e( 'Saznaj više','pet-animal-store' ); ?></a>
                         </div>
                     </div>
                 </div>
                 <?php $pet_animal_store_k++;
             } ?>
         </div>
     <?php else : ?>
         <div class="header-no-slider"></div>
     <?php
     endif;
 else : ?>
     <div class="header-no-slider"></div>
 <?php
 endif;
 ?>

 <?php do_action( 'pet_animal_store_below_slider' );

 elseif(!is_page_template( 'page-template/contact.php' )): ?>
     <div class="slider-main">
         <div id="slider" class="nivoSlider">
             <img src='<?php echo get_stylesheet_directory_uri(); ?>/images/dog-and-cat.jpg'>
         </div>
     </div>

 <?php
 endif;
 ?>

                        



