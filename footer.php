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
$social_medias = array(
  'facebook',
  'twitter',
  'linkedin',
  'youtube',
  'instagram',
  'pinterest',
  'google',
  'email'
);
?>

</div><!-- #content -->
</div><!--. container -->

<footer id="colophon" class="site-footer footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer__social-media social-media">
                    <?php foreach ( $social_medias as $social_media ) {

                        if ( get_theme_mod( $social_media ) ):
                            ?>
                            <span class="social-media__item"><a href="<?php echo get_theme_mod( $social_media ); ?>" class="social-meida__link"></a><i class="fa fa-<?php echo $social_media ?>"></i></span>
                        <?php
                        endif;

                    } ?>
                </div>
            </div>
            <div class="col-12">
                <div class="site-info">
                    &copy
                    <?php
                    printf( esc_html__( date( 'Y' ) . ' ' . get_bloginfo( 'name' ) . 'All Rights Reserved', 'fresh-starter-theme' ) );
                    ?>
                </div><!-- .site-info -->
            </div>
        </div>
    </div><!-- .container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
