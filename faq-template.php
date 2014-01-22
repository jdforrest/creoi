<?php
	/*
	 * Template Name: FAQ Template
	 * 
	 */
?>
<?php get_header(); ?>

	<!-- ==== START of FAQ page ======================= -->
	<div class="content-wrapper">
		<section class="content">
			<aside>
				<?php get_sidebar(); ?>
			</aside>
			
			<div class="box620">
				<div class="breadcrumbs">
					<?php do_action('icl_navigation_breadcrumb'); ?>
				</div><!--.breadcrumbs-->
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<div class="post" id="post-<?php the_ID(); ?>">
						<h1><?php the_title(); ?></h1>	
						<div class="entry">
							
							<?php the_content(); ?>
			
							<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			
						</div>	

					</div>
				
				<?php // comments_template(); ?>
		
				<?php endwhile; endif; ?>
			</div><!--.box620-->

			<?php // display attachment images 

				$attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment' ));

				if ($attachments) { // see if there are images attached to posting ?>
        			<div class="box300">							            
			            <?php foreach ( $attachments as $attachment_id => $attachment ) { 
							echo wp_get_attachment_image($attachment_id, 'full size');							
			            } ?>
			        </div>
        
			<?php } // end see if images ?>

		</section> <!--.content-->
	</div><!--.content-wrapper-->
	<!-- ==== END of index.php ======================= -->

<?php get_footer(); ?>