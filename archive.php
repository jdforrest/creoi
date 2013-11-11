<?php get_header(); ?>		

	<div class="content-wrapper">
		<section class="content">
			<aside>
				<?php get_sidebar(); ?>
			</aside>
			
			<div class="box780">
				<div>
					<div class="breadcrumbs">
						<?php do_action('icl_navigation_breadcrumb'); ?>
					</div><!--.breadcrumbs-->
				</div>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			
			<!-- Archive title in English -->
			<?php if (ICL_LANGUAGE_CODE=='en') { ?>
				<?php /* If this is a category archive */ if (is_category()) { ?>
					<h1>Archive for <?php single_cat_title(); ?></h1>
	
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
					<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
	
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
					<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
	
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					<h1>Archive for <?php the_time('F, Y'); ?></h1>
	
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					<h1>Archive for <?php the_time('Y'); ?></h1>
	
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					<h1>Project Archives</h1>
				
				<?php } ?>	
				
			<!-- Archive title in Spanish -->				
			<?php } else { ?>
				<?php /* If this is a category archive */ if (is_category()) { ?>
					<h1>Archivos Para <?php single_cat_title(); ?></h1>
	
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
					<h1>>Archivos Para &#8216;<?php single_tag_title(); ?>&#8217;</h1>
	
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
					<h1>Archivos Para  <?php the_time('F jS, Y'); ?></h1>
	
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					<h1>Archivos Para  <?php the_time('F, Y'); ?></h1>
	
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					<h1>Archivos Para  <?php the_time('Y'); ?></h1>
	
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					<h1>Archivos de Proyectos</h1>
				
				<?php } ?>				
			<?php } ?>
		

			<?php while (have_posts()) : the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class("post left"); ?>>						
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					
					<?php if(has_post_thumbnail());	?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>													
					<?php ?>
						
					<span>
						<?php the_excerpt(); ?>
					</span>							
				</article>
			
			<?php endwhile; ?>
			
		<?php else : ?>
			<!-- English message -->
			<?php if (ICL_LANGUAGE_CODE=='en') { ?>
				<h2>Sorry, the search produced no results.</h2>
			<!-- Spanish message -->
			<?php } else { ?>
				<h2>No se han encontrado resultados.</h2>
			<?php } ?>	
				
		
		<?php endif; ?>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?> <!-- navigation for multiple pages -->

			
			
			
			</div><!--.box780-->
		</section> <!--.content-->
	</div><!--.content-wrapper-->


<?php get_footer(); ?>