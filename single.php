<?php get_header(); ?>

<!-- ==== START of single page ======================= -->
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
				<?php if(have_posts()): while(have_posts()): the_post(); ?>					
					
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						
						<?php // display attachment images as a flexslider gallery
			
							$attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment' ));
			
							if ($attachments) { // see if there are images attached to posting ?>
			        
						        <!-- Begin Slider --> 
						        <div class="flexslider">
						            <ul class="slides">
						            
						            <?php // create the list items for images with captions, from Mike Sinkula's code
						            
									foreach ( $attachments as $attachment_id => $attachment ) { 
						
										echo '<li>';
										echo wp_get_attachment_image($attachment_id, 'full size');
										echo '</li>';
						
						            } ?>
						            
						            </ul>
						        </div>
						        <!-- End Slider -->
			        
						<?php } // end see if images ?> 						
							
						<div>
							<?php the_content(); ?>
							
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
						</div>						
								
				<?php endwhile; else: ?>
					<p>Sorry, we found no posts.</p>
				<?php endif; ?>	<!-- END post loop -->			
			</div><!--.box780-->		
		</section> <!--.content-->
	</div><!--.content-wrapper-->
<!-- ==== END of single ======================= -->

<?php get_footer(); ?>