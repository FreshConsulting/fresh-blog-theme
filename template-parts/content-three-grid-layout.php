<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="row">

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
                    <div class="col-sm-4 d-flex">

                        <div class="card flex-fill">
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
                    </div><!--.col-sm-4-->
				<?php
				endwhile;
				?>
                <div class="col-12">
					<?php
					the_posts_navigation();
					?>
                </div>
			<?php
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
        </div><!--.row-->
    </main><!-- #main -->
</div><!-- #primary -->

