<?php get_header(); ?>

	<div class="content-wrapper">
		<section class="content">
			<aside>
				<?php get_sidebar(); ?>
			</aside>
			<div class="box460">
				<!-- 404 title in English -->
				<?php if (ICL_LANGUAGE_CODE=='en') { ?>
					<h2>Error 404 - Page Not Found</h2>
				<!-- 404 title in Spanish -->
				<?php } else { ?>
					<h2>Error 404 - Página No Encontrada</h2>
				<?php } ?>
			</div>	
		</section> <!--.content-->
	</div><!--.content-wrapper-->


<?php get_footer(); ?>