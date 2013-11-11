<?php get_header(); ?>

<!-- ==== START of projects page ======================= -->
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
			
			<h1>				
				<?php if (ICL_LANGUAGE_CODE=='en') { ?>
					<?php echo get_the_title(10); ?>
				<?php } else { ?>
					<?php echo get_the_title(57); ?>
				<?php } ?>	
			</h1>
			
				<?php if(have_posts()): while(have_posts()): the_post(); ?>					
					<article id="post-<?php the_ID(); ?>" <?php post_class("post left"); ?>>
						
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<?php if(has_post_thumbnail());	?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>													
						<?php ?>
							
						<span>
							<?php the_excerpt(); ?>
						</span>						
						
					</article>			
				<?php endwhile; else: ?>
					<p>Sorry, we found no posts.</p>
				<?php endif; ?>	<!-- END posts loop -->			
				
			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?> <!-- navigation for multiple pages -->
		
		</div><!--.box780-->		

		</section> <!--.content-->
	</div><!--.content-wrapper-->
	<!-- ==== END of index.php ======================= -->

<?php get_footer(); ?>