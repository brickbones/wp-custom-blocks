<?php 

function parent_css_theme_style() { 
 wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 
}
add_action( 'wp_enqueue_scripts', 'parent_css_theme_style' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'iEatWebsites General Settings',
		'menu_title'	=> 'ieatSettings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Style',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Whatever',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Something Else',
		'parent_slug'	=> 'theme-general-settings',
	));

	
}

function register_acf_block_types() {

    // register block.
    acf_register_block_type(array(
        'name'              => 'player',
        'title'             => __('Player'),
        'description'       => __('A custom player block.'),
        'render_template'   => 'template-parts/blocks/player/player.php',
        'category'          => 'formatting',
        'icon'              => 'admin-users',
		'keywords'          => array( 'player', 'user' ),
		'enqueue_style' 	=> get_stylesheet_directory_uri() . '/template-parts/blocks/player/player.css',
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}


