<?php
	get_header();

	echo '<div class="container">';

	if(have_posts()) : while(have_posts()) : the_post();
		
		echo '<h1>';
		//the_title();
		echo '</h1>';

		//the_content();

	endwhile;
	else:

		echo '	<p> nada encontrado</p>';
	endif;


	echo ' </div>';

	get_footer();
?>