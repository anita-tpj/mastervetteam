<?php
/**
 * Template Name:Page with Right Sidebar
 */

get_header(); ?>

<?php do_action( 'pet_animal_store_header_pageright' ); ?>

<div class="container">
    <div class="middle-align row">       
		<div class="col-md-8" id="content-aa" >
			<?php while ( have_posts() ) : the_post(); ?>
                <div class="feature-box">   
                    <img src="<?php the_post_thumbnail_url('full'); ?>" width="100%">
                </div>
                <h1><?php the_title(); ?></h1>
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
        <div class="col-md-4" id="sidebar">
			<?php dynamic_sidebar('sidebar-1'); ?>
		</div>
        <div class="clearfix"></div>
    </div>
</div>

<?php do_action( 'pet_animal_store_footer_pageright' ); ?>

<?php get_footer(); ?>