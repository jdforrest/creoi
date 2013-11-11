<!-- START sidebar.php -->	
	<!-- Begin Widgets -->
    <?php if ( is_home() || is_search() || is_single() || is_archive() ) { ?>
    	<!-- Archive title in English -->
    	<?php if (ICL_LANGUAGE_CODE=='en') { ?>
			<h3>Project Archives</h3>
		<!-- Archive title in Spanish -->
		<?php } else { ?>
			<h3>Archivos de Proyectos</h3>
		<?php } ?>	   	
    	
    	<ul>
    		<!-- <?php wp_get_archives('type=yearly'); ?> --> 
    		
    		<!-- removed yearly archives since we don't care about publish date, just category (category of year) -->
    		<?php wp_list_categories('order=DESC&title_li=&exclude=2'); ?>
    	</ul>
    <?php } ?>
    <!-- Begin Widgets -->


	<!-- Begin Sub-Navigation -->
	<?php 
	if ( !is_404() ) { if ( !is_search() ) {  ?> 
	
	    <?php //list sub-pages even if on a sub-page
	    if($post->post_parent)
	    	$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0&exclude=30,106,729" ); else
	    	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&exclude=106,729");
	    if ($children) { ?>
	    	<ul id="sub-navigation"><?php echo $children; ?></ul>
	    <?php } ?>   
    <?php }} ?>  
    <!-- End Sub-Navigation -->    

<!-- END sidebar.php -->