<div class="row">
    <div class="col-sm-7">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
                        <header>
                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                        </header>
					<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						?>
                        <div class="card">
							<?php
							/*
										 * Include the Post-Type-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
										 */
							get_template_part( 'template-parts/content', get_post_type() );
							?>
                            <!--.card-->
                        </div>
					<?php
					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
    <div class="col-sm-5">
		<?php get_sidebar(); ?>
    </div>
</div>
