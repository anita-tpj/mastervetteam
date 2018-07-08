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
    if(is_front_page() || is_home()){
        return '<a class="post-excerpt-link" href="'. get_permalink( get_the_ID() ) . '">' . __('...', 'animal-pet-store') . '</a>';
    }
}

add_filter( 'excerpt_more', 'elt_excerpt_more' );


/*Add tags on pages*/
function add_taxonomies_to_pages() {
    register_taxonomy_for_object_type( 'post_tag', 'page' );
}

add_action( 'init', 'add_taxonomies_to_pages' );

if ( ! is_admin() ) {
    add_action( 'pre_get_posts', 'tag_archives' );
}

function tag_archives( $wp_query ) {
    $my_post_array = array('post','page');

    if ( $wp_query->get( 'tag' ) )
        $wp_query->set( 'post_type', $my_post_array );
}

/*Limit number of tags inside widget*/
add_filter('widget_tag_cloud_args', 'tag_widget_limit');

function tag_widget_limit($args){

    //Check if taxonomy option inside widget is set to tags
    if(isset($args['taxonomy']) && $args['taxonomy'] == 'post_tag'){
        $args['number'] = 10; //Limit number of tags
    }

    return $args;
}

/*Post Thumbnail size*/
add_image_size( 'hp-news-size', 300, 200, array( 'left', 'top' ) ); // Hard crop left top