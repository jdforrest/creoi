<?php
	/*
	 * Template Name: Home Template
	 * 
	 */
?>
<?php get_header(); ?>

	<!-- ==== START of index.php ======================= -->
	<div class="content-wrapper">
		<section class="content">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
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
				
			<?php // comments_template(); ?>
	
			<?php endwhile; endif; ?>	
			
			<!-- this displays a random project post -->
			<div class="featured"> 
				<?php
					/*
					$args = array ('orderby'=>'rand', 'posts_per_page'=>'1');
					$query = new WP_Query($args);
					while ($query->have_posts()) : $query->the_post();
					*/ 
				?>
				
				<?php
					//if English, this will display a featured post from the list of IDs below
					if (ICL_LANGUAGE_CODE=='en') {
						$args = array (
							'orderby'=>'rand', 
							'posts_per_page'=>'1',
							'post__in' => array(589, 583, 579, 575, 566, 562, 558, 556, 554, 551), 
							//ENGLISH POSTS ONLY
							//this will only display posts whose ID is included in the array above, comma separated
							//to find the post ID, go to the main Posts page in WordPress. Hover over the title of the post
							//that you want to include (don't click) and look at the bottom left of the screen
							//there, you will see the status bar that includes the post ID.
							//look for "?post=" and the post ID is the number that follows.
						);
					}
					//if Spanish, this will display a featured post from the list of IDs below
					else{
						$args = array (
							'orderby'=>'rand', 
							'posts_per_page'=>'1',
							'post__in' => array(615, 610, 600, 591, 585, 573, 569, 560, 544, 537),
							//SPANISH POSTS ONLY
							//this will only display posts whose ID is included in the array above, comma separated
							//to find the post ID, go to the main Posts page in WordPress. Hover over the title of the post
							//that you want to include (don't click) and look at the bottom left of the screen
							//there, you will see the status bar that includes the post ID.
							//look for "?post=" and the post ID is the number that follows.
						);					
					}
					
					$query = new WP_Query($args);
					while ($query->have_posts()) : $query->the_post();	
				?>	
							
				
					<div>
						<!-- English h1 -->
						<?php if (ICL_LANGUAGE_CODE=='en') { ?>
							<h1>Featured Project</h1>
						<!-- Spanish h1 -->
						<?php } else { ?>
							<h1>Ejemplo de Proyectos</h1>
						<?php } ?>	
						
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<p>
							<?php the_excerpt(); ?>
						</p>
					</div>
					<div>
						<?php the_post_thumbnail(); ?>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>			
			</div><!--.featured-->
			
			<div class="box300-home">		
				<!-- About widget in English -->	
				<?php if (ICL_LANGUAGE_CODE=='en') { ?>
					<?php
						$excerpt = get_post_meta(5, 'Excerpt', true);
					?>					
					<h1><a href="<?php echo get_permalink(5); ?>">
						<?php echo get_the_title(5); ?></a>
					</h1>	
					<p>
						<?php echo $excerpt; ?>
						<a href="<?php echo get_permalink(5); ?>">
						Read more</a>
					</p>	
				<!-- About widget in Spanish -->		
				<?php } else { ?>
					<?php
						$excerpt = get_post_meta(42, 'Excerpt', true);
					?>					
					<h1><a href="<?php echo get_permalink(42); ?>">
						<?php echo get_the_title(42); ?></a>
					</h1>	
					<p>
						<?php echo $excerpt; ?>
						<!-- INSERT SPANISH LEER MAS LINK HERE -->
					</p>			
				<?php } ?>		
					
			</div><!--.box300-home-->
			
			<div class="box300-home">	
				<!-- Apply widget in English -->
				<?php if (ICL_LANGUAGE_CODE=='en') { ?>		

					<h1><a href="<?php echo get_permalink(8); ?>">
						<?php echo get_the_title(8); ?></a>
					</h1>

<!-- new content jan 2015 -->
					<p>
						As of 2015, CREOi is prioritizing conservation projects in Washington State, USA. Proposals are by invitation only.
						<a href="<?php echo get_permalink(8); ?>">
						Read more</a>
					</p>

<!-- temporarily hiding application content -->
<!--	
					<h2>Next deadline for project proposals:</h2>				
-->					
					<!-- this dynamically keeps track of next deadline -->
<!--
					<?php 
						$today = date("m.d.");
						if($today < 04.15){
							echo "<h1 class='duedates'>April 15, " . date("Y") . "</h1>";
						}
						elseif($today >= 04.30 && $today <= 10.15){
							echo "<h1 class='duedates'>October 15, " . date("Y") . "</h1>";
						}
						else {
							echo "<h1 class='duedates'>April 15, " . (date("Y") + 1) . "</h1>";
						}				
					?>
-->
<!--
					<p>
						For guidelines and other information, go to <a href="<?php echo get_permalink(8); ?>">Apply.</a>
					</p>
-->
				<!-- Apply widget in Spanish -->
				<?php } else { ?>
					<h1><a href="<?php echo get_permalink(47); ?>">
						<?php echo get_the_title(47); ?></a>
					</h1>

<!-- new content jan 2015 -->
					<p>
						Empezando en 2015, CREOi está prioritizando proyectos de conservación en el estado de Washington, EE.UU. Las propuestas son únicamente por invitación.
						<!-- INSERT SPANISH LEER MAS LINK HERE -->
					</p>	
					
					
					
					
<!-- temporarily hiding application content -->
<!--	
					<h2>Próxima fecha de entrega de propuestas:</h2>				
-->					
					<!-- this dynamically keeps track of next deadline -->
<!--
					<?php 
						$today = date("m.d.");
						if($today < 04.15){
							echo "<h1 class='duedates'>15 de Abril, " . date("Y") . "</h1>";
						}
						elseif($today >= 04.30 && $today <= 10.15){
							echo "<h1 class='duedates'>15 de Octubre, " . date("Y") . "</h1>";
						}
						else {
							echo "<h1 class='duedates'>15 de Abril, " . (date("Y") + 1) . "</h1>";
						}				
					?>
-->
<!--
					<p>
						Para obtener los requisitos  y otras informaciones consulte la <a href="<?php echo get_permalink(47); ?>">página Aplicar.</a>
					</p>
-->
				<?php } ?>					
			</div><!--.box300-home-->
			
			<div class="box300-home">
				<!-- Reporting section in English -->
				<?php if (ICL_LANGUAGE_CODE=='en') { ?>
					<h1><a href="<?php echo get_permalink(12); ?>">
						<?php echo get_the_title(12); ?></a>
					</h1>
					<h2>Next deadline for progress reports:</h2>
					
					<!-- this dynamically keeps track of next deadline -->
					<?php 
						$today = date("m.d.");
						if($today < 05.31){
							echo "<h1 class='duedates'>May 31, " . date("Y") . "</h1>";
						}
						elseif($today >= 05.31 && $today <= 11.29){
							echo "<h1 class='duedates'>November 30, " . date("Y") . "</h1>";
						}
						else {
							echo "<h1 class='duedates'>May 31, " . (date("Y") + 1) . "</h1>";
						}				
					?>
					<p>
						Final reports are due 30 days after project completion.
						Go to <a href="<?php echo get_permalink(12); ?>">Reporting.</a>
					</p>
				<!-- Reporting section in Spanish -->
				<?php } else { ?>
					<h1><a href="<?php echo get_permalink(59); ?>">
						<?php echo get_the_title(59); ?></a>
					</h1>
					<h2>Próxima fecha de entrega de informes de progreso:</h2>
					
					<!-- this dynamically keeps track of next deadline -->
					<?php 
						$today = date("m.d.");
						if($today < 05.31){
							echo "<h1 class='duedates'>31 de Mayo, " . date("Y") . "</h1>";
						}
						elseif($today >= 05.31 && $today <= 11.29){
							echo "<h1 class='duedates'>30 de Noviembre, " . date("Y") . "</h1>";
						}
						else {
							echo "<h1 class='duedates'>31 de Mayo, " . (date("Y") + 1) . "</h1>";
						}				
					?>				
					<p>
						Los informes finales se deben presentar 30 días después de completar el proyecto. 
						Consulte la página <a href="<?php echo get_permalink(59); ?>">Informes.</a>
					</p>			
				<?php } ?>				
				
			</div><!--.box300-home-->
		</section> <!--.content-->
	</div><!--.content-wrapper-->
	<!-- ==== END of index.php ======================= -->

<?php get_footer(); ?>