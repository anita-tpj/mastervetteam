<?php 

//Enquue styles and scripts
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/*Customize Excerpt Length*/
function elt_excerpt_length(){
    return 35;
}

add_filter('excerpt_length', 'elt_excerpt_length');

function elt_excerpt_more( $more ) {
    if(is_front_page()){
        return '<div class=""><a class="read_more" href="'. get_permalink( get_the_ID() ) . '">' . __('Saznaj više', 'animal-pet-store') . '</a></div>';
    }else{
        return '<a class="post-excerpt-link" href="'. get_permalink( get_the_ID() ) . '">' . __(' ... više', 'animal-pet-store') . '</a>';

    }
}
add_filter( 'excerpt_more', 'elt_excerpt_more' );