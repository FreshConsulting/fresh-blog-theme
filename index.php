<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fresh_Starter_Theme
 */

get_header();
$page_layout = get_theme_mod( 'front_page_setting', 'three-grid-layout' );
if ( $page_layout === 'box-layout--no-sidebar' ) :
	get_template_part( 'template-parts/content', 'box-layout--no-sidebar' );
elseif ( $page_layout === 'three-grid-layout' ):
	get_template_part( 'template-parts/content', 'three-grid-layout' );
else:
	get_template_part( 'template-parts/content', 'box-layout--sidebar' );
endif;


get_footer();

