<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

//Custom Post Types function
function create_custom_post_types() {
// Case Studies Custom Post Type
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
						'menu_icon' => 'dashicons-portfolio',
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );


//function to modify default WordPress query
function custom_query_order( $query ) {

    if( $query->is_archive() && get_query_var("post_type") == "case_studies" ) {

        // Set parameters to modify the query
        $query->set( 'orderby', 'date' );
        $query->set( 'order', 'ASC' );
    }
}

// Hook our custom query function to the pre_get_posts
add_action( 'pre_get_posts', 'custom_query_order' );
