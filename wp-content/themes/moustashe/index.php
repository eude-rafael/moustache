<?php

/**
 * The main template file
 *
 * This is the template to test from Moustache Agency
 * Developed by Eude Rafael de Souza, fi
 *
 * @link no link
 *
 * @package WordPress
 * @subpackage Moustache-test
 * @since 1.0.0
 */

	get_header();

	get_template_part('template_parts/content/menu_main' );
	get_template_part('template_parts/content/banner_home' );
	get_template_part('template_parts/content/carousel_main' );
	get_template_part('template_parts/content/contact_form_home');
	get_template_part('template_parts/content/contact_data_home');

	get_footer();
?>