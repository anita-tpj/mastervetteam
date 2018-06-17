<?php
/**
 * Template part for displaying posts on Home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mastervet theme
 */

?>

<div class="col-sm-4">
    <div class="card">
        <h3 class="card-title"><?php the_title();?></h3>
        <p class="card-meta"><?php echo get_the_time('F j, Y'); ?></p>
        <?php the_post_thumbnail( 'section-3col-image', array( 'class' => 'card-img-top img-fluid' ) ); ?>
        <div class="card-body">
            <p class="card-text"><?php the_excerpt();?></p>
            <span><a class="post-excerpt-btn" href="<?php echo get_permalink(); ?>">Continue</a></span>
        </div>
    </div>
</div>