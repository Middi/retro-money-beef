<?php
/**
 * Enqueue script tags
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package retro_money_beef
 */

function retro_money_beef_scripts() {

	wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Libre+Baskerville:400,700&display=swap', false);
	
	wp_enqueue_script( 'retro-money-beef-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'retro-money-beef-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('retro-money-beef-scripts', get_stylesheet_directory_uri() . '/assets/js/main.min.js', array('jquery','jquery-form'), filemtime( get_stylesheet_directory() . '/assets/js/main.min.js'), true );


	if ( is_single() ) {
		wp_enqueue_style('retro-money-beef-style', get_stylesheet_directory_uri() . '/assets/css/posts.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/posts.css' ));
	}
	else {
		wp_enqueue_style('retro-money-beef-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/style.css' ));
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'retro_money_beef_scripts' );


function my_enqueue2($hook) {
        wp_enqueue_script('custom_script', get_bloginfo('template_url').'/assets/js/main.min.js', array('jquery', 'jquery-form'));
}
 
add_action('admin_enqueue_scripts', 'my_enqueue2');