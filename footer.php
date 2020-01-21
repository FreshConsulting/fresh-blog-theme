<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fresh_Starter_Theme
 */

?>

	</div><!-- #content -->
</div><!--. container -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="site-info">
				&copy
				<?php
				printf( esc_html__( date('Y') . ' ' . get_bloginfo('name') . 'All Rights Reserved', 'fresh-starter-theme' ) );
				?>
			</div><!-- .site-info -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
