<?php 

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


