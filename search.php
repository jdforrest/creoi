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
			
			<!-- English h1 -->
			<?php if (ICL_LANGUAGE_CODE=='en') { ?>
				<h1>Search Results for "<?php echo get_search_query(); ?>".</h1>
			<!-- Spanish h1 -->
			<?php } else { ?>
				<h1>Resultados Para Búsqueda de "<?php echo get_search_query(); ?>".</h1>
			<?php } ?>		
				
			
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
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
				<article <?php post_class("post left"); ?>>
					<!-- English message -->
					<?php if (ICL_LANGUAGE_CODE=='en') { ?>
						<h2>Sorry, the search produced no results.</h2>
					<!-- Spanish message -->
					<?php } else { ?>
						<h2>No se han encontrado resultados.</h2>
					<?php } ?>					
				</article>		
			<?php endif; ?>
			
			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?> <!-- navigation for multiple pages -->

			
			
			
			</div><!--.box780-->
		</section> <!--.content-->
	</div><!--.content-wrapper-->

<?php get_footer(); ?>