<?php get_header(); ?>

<!-- ==== START of single page ======================= -->
	<div class="content-wrapper">
		<section class="content">			
			<aside>
				<?php get_sidebar(); ?>
			</aside>			
			<div class="box780-single">
				<div>
					<div class="breadcrumbs">
						<?php do_action('icl_navigation_breadcrumb'); ?>
					</div><!--.breadcrumbs-->
				</div>				
				<?php if(have_posts()): while(have_posts()): the_post(); ?>		
					
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>		
						<?php if(has_post_thumbnail());	?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>													
						<?php ?>
						
						<span>
							<?php the_content(); ?>
						</span>
						
						<?php if (ICL_LANGUAGE_CODE=='en') { ?>
							<div class="links">
							<?php previous_post_link('%link', 'Previous Project', FALSE); ?>
							<?php next_post_link( '%link', 'Next Project', 'FALSE'); ?>
							</div>
						<?php } else { ?>
							<div class="links">
							<?php previous_post_link('%link', 'Proyecto Anterior', FALSE); ?>
							<?php next_post_link('%link', 'Proyecto Siguiente', 'FALSE'); ?>
							</div>
						<?php } ?>						
								
				<?php endwhile; else: ?>
					<p>Sorry, we found no posts.</p>
				<?php endif; ?>	<!-- END post loop -->			
			</div><!--.box780-->		
		</section> <!--.content-->
	</div><!--.content-wrapper-->
<!-- ==== END of single ======================= -->

<?php get_footer(); ?>