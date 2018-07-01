<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Pet Animal Store
 */

get_header(); ?>

<?php do_action( 'pet_animal_store_header_page' ); ?>

<div class="container">
    <div class="middle-align">       
        <div id="content-aa" >
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="feature-box">   
                    <img src="<?php the_post_thumbnail_url('full'); ?>" width="100%">
                </div>
                <h1 class="title-line"><?php the_title(); ?></h1>
                <div class="border-image">
                    <img  src="<?php echo esc_url(get_theme_mod('pet_animal_store_border_image',get_template_directory_uri().'/images/line.png')); ?>" alt="">
                </div>
                <?php the_content();
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'pet-animal-store' ),
                    'after'  => '</div>',
                ) );
                
                //If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                        comments_template();
                ?>
            <?php endwhile; // end of the loop. ?>             
        </div>            
    </div>
</div>

<?php do_action( 'pet_animal_store_footer_page' ); ?>

<?php get_footer(); ?>