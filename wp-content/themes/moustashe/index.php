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

		echo '<hr/><hr/><hr/><hr/><hr/>';







		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			)
		);
		


		





echo 'Final';
		echo '<hr/><hr/><hr/><hr/><hr/>';


	}else{ 

		echo '	<p> nada encontrado</p>';
	}


	echo ' </div>';

	get_footer();
?>