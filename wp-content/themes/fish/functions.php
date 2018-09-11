<?php
function my_theme_enqueue_styles() {

    $parent_style = 'wp-bootstrap-starter'; 

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Section post type
function create_posttype() {
 
    register_post_type( 'section',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Sections' ),
				'singular_name' => __( 'Section' ),
			),
			'supports' => array( 'title', 'editor','thumbnail' ),
            'public' => true,
            'has_archive' => true,
			'rewrite' => array('slug' => 'sections'),
			
			
		)
		
    );
}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


?>