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
    
	// creating custom excerpt
	function new_trim_excerpt($text) { 
	  global $post;
	  if ( '' == $text ) {
	    $text = get_the_content('');
	    $text = apply_filters('the_content', $text);
	    $text = str_replace('\]\]\>', ']]&gt;', $text);
	    $text = strip_tags($text, '<i>');
	    $excerpt_length = 55;
	    $words = explode(' ', $text, $excerpt_length + 1);
	    if (count($words)> $excerpt_length) {
	      	array_pop($words);
			
			//Read More text first in English
			if (ICL_LANGUAGE_CODE=='en') {
				array_push($words, '<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read more</a>');
			} 		
			//and in Spanish
			else {
				array_push($words, '<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Leer más</a>');
			}	
				
	      $text = implode(' ', $words);
	    }
	  }
	return $text;
	}
	remove_filter('get_the_excerpt', 'wp_trim_excerpt');
	add_filter('get_the_excerpt', 'new_trim_excerpt');

?>