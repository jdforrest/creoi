<?php
	
	// Add RSS links to <head> section
	//automatic_feed_links(); #DEPRECATED V 3.0 - Bill
	add_theme_support( 'automatic-feed-links' ); 
	
	// Load jQuery	
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://code.jquery.com/jquery-1.9.1.min.js"), false);
	   wp_enqueue_script('jquery');
	}

	//nav menus
	if (function_exists('register_nav_menus')) {
		register_nav_menus(
			array(
				'main_nav' => 'Main Navigation Menu'
				)
		);
	}
	
	//this allows featured images in posts
	add_theme_support('post-thumbnails'); 	
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

	//adding read more tag to excerpt	
	function new_excerpt_more( $more ) {
			
		//first in English
		if (ICL_LANGUAGE_CODE=='en') {
			return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
		} 
		
		//and in Spanish
		else {
			return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Leer Más</a>';
		}		
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );



?>