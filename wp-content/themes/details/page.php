<?php

	get_header();

		if(have_posts()) {
			while (have_posts()) {
				the_post();

				get_template_part('content-templates/page', '');
			}
		}else{
			_e('Ledsen, kunde inte hitta sidan..', 'details');
		}
	get_footer();

?>