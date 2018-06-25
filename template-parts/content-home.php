<?php
/**
 * Template part for displaying posts on Home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mastervet theme
 */

?>

<!--<div class="col-sm-4">
    <div class="card home-blog-box">
        <h3 class="card-title"><?php /*the_title();*/?></h3>
        <p class="card-meta blog_date"><?php /*echo get_the_time('F j, Y'); */?></p>
        <?php /*the_post_thumbnail( 'pet-animal-store-homepage-thumb', array( 'class' => '' ) ); */?>
        <div class="card-body">
            <p class="card-text"><?php /*the_excerpt();*/?></p>
            <span><a class="read_more" href="<?php /*echo get_permalink(); */?>">Continue</a></span>
        </div>
    </div>
</div>-->

<div class="col-md-4">
    <div class="text-center">
        <div class="home-blog-box">
            <div class="blog-img">
                <?php the_post_thumbnail( 'pet-animal-store-homepage-thumb', array( 'class' => 'team-image' ) ); ?>
                <span class="blog_date"><?php echo get_the_time('F j, Y'); ?></span>
            </div>

            <h4 class="team-batch"><?php the_title();?></h4>
            <p class="content"><?php the_excerpt();?></p>
            <a class="read_more" href="<?php the_permalink(); ?>"><?php esc_html_e('Saznaj više','pet-animal-store'); ?></a>

        </div>
    </div>
</div>