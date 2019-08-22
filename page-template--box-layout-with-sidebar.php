<?php
/**
 * Template Name: Box Layout With Sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fresh_Starter_Theme
 */

get_header();
?>
<div class="row">
	<div class="col-sm-7">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
	<div class="col-sm-5">
		<?php get_sidebar(); ?>
	</div>
</div>

