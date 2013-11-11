	<!-- ==== START of footer.php ======================= -->
	<div class="footer-wrapper">
		<footer>
			<div class="box220">
				<!-- English logo -->
				<?php if (ICL_LANGUAGE_CODE=='en') { ?>
						<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url');?>/images/header-logo.png" alt="Conservation, Research and Education Opportunities International"></a>
				<!-- Spanish logo -->
				<?php } else { ?>
						<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url');?>/images/logo-spanish.png" alt="Oportunidades Internacionales para Conservación, Investigación y Educación "></a>
				<?php } ?>
			</div><!--.box220-->
	
			<div class="box540">
				<!-- copyright notice in English -->
				<?php if (ICL_LANGUAGE_CODE=='en') { ?>
					<p>
						Copyright &copy; <?php echo date("Y"); ?> <a href="http://www.creoi.org">CREOi</a> All Rights Reserved | <a href="mailto:info%40creoi%2ecom?subject=Hi, Michelle&body=Hi, Michelle, how are you?">info@creoi.org</a>
					</p>
				<!-- copyright notice in Spanish -->
				<?php } else { ?>
					<p>
						Copyright &copy; <?php echo date("Y"); ?> <a href="http://www.creoi.org">CREOi</a> Todos los derechos reservados | <a href="mailto:info%40creoi%2ecom?subject=Hi, Michelle&body=Hi, Michelle, how are you?">info@creoi.org</a>
					</p>	
				<?php } ?>
			</div><!--.box540-->
	
			<div class="box140">
				<!-- commenting out this link until link to CREOi YouTube page is received
				<ul>
					<li><a href="http://www.youtube.com/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/youtube2.png" alt="Youtube" class="youtube"></a></li>
				</ul>
				-->
			</div><!--.box140-->

			<?php wp_footer(); ?>
		</footer>
	</div><!--.footer-wrapper-->
</body>
</html>