<?php
/**
 * @package WordPress
 * @subpackage sigma
 */
get_header();  //the Header

get_template_part( 'content', 'index' ); //the Loop
get_template_part( 'sidebar', 'index' ); //the Sidebar

get_footer(); //the Footer
?>  
                               