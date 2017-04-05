hej single...
<?php

	get_header();
	
		if(have_posts()) {
			while (have_posts()) {
				the_post();

				if (has_post_thumbnail()) {
					get_template_part('content-templates/article', 'with-featured-image');
				}else{
					get_template_part('content-templates/article', '');
				}
				?>
					<br>
					<div class="col-md-6 offset-md-3">
						<?php comments_template(); ?>
					</div>
				<?php
			}
		}else{
			_e('Ledsen, kunde inte hitta inlägget..', 'details');
		}
	get_footer();

?>