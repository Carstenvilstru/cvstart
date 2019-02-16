<?php 


function cvstart_scripts() {
	wp_enqueue_style( 'cvstart-style', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), time(), 'all' );
	
	wp_enqueue_script( 'cvstart-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array('jquery'), time(), true);
	
	wp_enqueue_script( 'cvstart-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array(), time(), true);

	wp_enqueue_script( 'cvstart-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'cvstart-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cvstart_scripts' );



function secondtheme_admin_assets() {
	wp_enqueue_style( 'secondtheme-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), time(), 'all' );

	wp_enqueue_script( 'secondtheme-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), time(), true);
}

add_action('admin_enqueue_scripts','secondtheme_admin_assets');