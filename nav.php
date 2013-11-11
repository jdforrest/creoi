<div class="navigation">
	<!-- English next and previous links -->
	<?php if (ICL_LANGUAGE_CODE=='en') { ?>
		<div class="next-posts"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="prev-posts"><?php previous_posts_link('Newer Entries &raquo;') ?></div>				
	<!-- Spanish next and previous links -->
	<?php } else { ?>
		<div class="next-posts"><?php next_posts_link('&laquo; Proyectos Anteriores') ?></div>
		<div class="prev-posts"><?php previous_posts_link('Proyectos Recientes &raquo;') ?></div>	
	<?php } ?>	
</div>