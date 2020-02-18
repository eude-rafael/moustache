<?php
	get_header();


	get_template_part('template_parts/content/menu_main' );
	get_template_part('template_parts/content/banner_home' );
	get_template_part('template_parts/content/carousel_main' );
	get_template_part('template_parts/content/contact_form_home');
	get_template_part('template_parts/content/contact_data_home');



	echo '<div class="container">';

		if(have_posts()){ 
			// Load posts loop.
			while ( have_posts() ) {
				the_post();

				echo '<h1>';
				the_title();
				echo '</h1>';
		
				echo '<p>';
				the_content();
				echo '</p>';
			}

		}else{ 
			//Posts empty
		}

	echo ' </div>';

	get_footer();
?>