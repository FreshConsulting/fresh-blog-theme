<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fresh_Starter_Theme
 */

get_header();
get_header();
$page_layout = get_theme_mod( 'post_archive_setting', 'three-grid-layout' );
if ( $page_layout === 'box-layout--no-sidebar' ) :
	get_template_part( 'template-parts/content', 'box-layout--no-sidebar' );
elseif ( $page_layout === 'three-grid-layout' ):
	get_template_part( 'template-parts/content', 'three-grid-layout' );
else:
	get_template_part( 'template-parts/content', 'box-layout--sidebar' );
endif;

get_footer();
