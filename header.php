<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />	
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="initial-scale=1.0, width=device-width">
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>		
		<?php if (ICL_LANGUAGE_CODE=='en') { ?>
		   <?php // title for English
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; | '; }
			  elseif (is_page_template('home-template.php')){
			  	echo 'Home | '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive | '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' | '; }
		      elseif (is_404()) {
		         echo 'Not Found | '; }
		      if (is_home()) {
		         wp_title(''); echo ' | '; bloginfo('name'); echo ' | Seattle, WA'; }
		      else {
		          bloginfo('name'); echo ' | Seattle, WA ';}
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>			
		<?php } else { ?>
		   <?php // title for Spanish 
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Resultados Para &quot;"); echo '&quot; | '; }
			  elseif (is_page_template('home-template.php')){
			  	echo 'Inicio | '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archivos | '; }
		      elseif (is_search()) {
		         echo 'Resultados Para &quot;'.wp_specialchars($s).'&quot; | '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' | '; }
		      elseif (is_404()) {
		         echo 'No Hay Resultados | '; }
		      if (is_home()) {
		         wp_title(''); echo ' | '; bloginfo('name'); echo ' | Seattle, WA'; }
		      else {
		          bloginfo('name'); echo ' | Seattle, WA ';}
		      if ($paged>1) {
		         echo ' - página '. $paged; }
		   ?>
		<?php } ?>


	</title>

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/flexslider.css" type="text/css">
	
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	<?php wp_head(); ?>
	
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/creoi.js"></script>	
</head>

<body <?php body_class(); ?>>
	<div class="header-wrapper">
		<header>		
			<div class="box540">
				<!-- English logo -->	
				<?php if (ICL_LANGUAGE_CODE=='en') { ?>
						<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url');?>/images/header-logo.png" alt="Conservation, Research and Education Opportunities International"></a>
				<!-- Spanish logo -->
				<?php } else { ?>
						<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url');?>/images/logo-spanish.png" alt="Oportunidades Internacionales para Conservación, Investigación y Educación "></a>
				<?php } ?>
			</div><!--.box540-->
			
			<div class="box380">
				<ul class="language">
					<?php do_action('icl_language_selector'); ?> <!-- language selector widget using WPML plugin -->
				</ul>
			
				<div>
					<!-- Donate button in English -->
					<?php if (ICL_LANGUAGE_CODE=='en') { ?>
						<a href="index.php?page_id=18‎" class="button2">Donate</a>
					<!-- Donate button in Spanish -->
					<?php } else { ?>
						<a href="index.php?page_id=51‎" class="button2">Donar</a>
					<?php } ?>					
				</div>
				<?php get_search_form(); ?>			
				<div class="responsive-icon">
					<img src="<?php bloginfo('template_url');?>/images/nav2.png" alt="navigation icon" />
				</div>			
			</div><!--.box380-->		
		</header>
	</div><!--.header-wrapper-->
	
	<nav class="nav-wrapper">
		<?php wp_nav_menu( array('menu' => 'Main Navigation Menu' )); ?>

	</nav><!--.nav-wrapper-->
	
	<!-- ==== END of header.php ======================= -->