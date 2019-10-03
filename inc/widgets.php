<?php

if ( ! class_exists( 'Fresh_Author_Widget' ) ) {
	class Fresh_Author_Widget extends WP_Widget {
		/**
		 * Sets up the widgets name etc
		 */
		public function __construct() {
			$id_base        = 'fresh_author_widget';
			$name           = __( 'Fresh Author Widget', 'fresh-blog' );
			$widget_options = [
				'classname'   => 'fresh_author_widget',
				'description' => __( 'This widget will display user info', 'fresh-blog' )
			];
			parent::__construct( $id_base, $name, $widget_options );

			add_action( 'admin_enqueue_scripts', array( $this, 'fresh_enqueue_widget_scripts' ) );
		}


		public function fresh_enqueue_widget_scripts() {
			wp_enqueue_script( 'media-upload' );
			wp_enqueue_script( 'thickbox' );
			wp_enqueue_script( 'mfc-media-upload', get_stylesheet_directory_uri() . '/js/fresh-media-upload.js', array( 'jquery' ) );
			wp_enqueue_style( 'thickbox' );
		}

		public function update( $new_instance, $old_instance ) {
			return $new_instance;
		}

		public function form( $instance ) {

			$title       = ! empty( $instance['title'] ) ? $instance['title'] : '';
			$author_name = ! empty( $instance['author_name'] ) ? $instance['author_name'] : '';
			$description = ! empty( $instance['description'] ) ? $instance['description'] : '';
			$image       = ! empty( $instance['image'] ) ? $instance['image'] : '';
			?>
            <p>
                <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>"/>
            </p>
            <p>

                <label for="<?php echo $this->get_field_name( 'author_name' ); ?>"><?php _e( 'Author Name:' ); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id( 'author_name' ); ?>" name="<?php echo $this->get_field_name( 'author_name' ); ?>" type="text" value="<?php echo esc_attr( $author_name ); ?>"/>
            </p>

            <p>
                <label for="<?php echo $this->get_field_name( 'description' ); ?>"><?php _e( 'Description:' ); ?></label>
                <textarea class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" type="text"><?php echo esc_attr( $description ); ?></textarea>
            </p>

            <p>
                <label for="<?php echo $this->get_field_name( 'image' ); ?>"><?php _e( 'Image:' ); ?></label>
                <input name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" class="widefat" type="text" size="36" value="<?php echo esc_url( $image ); ?>"/>
                <input class="upload_image_button" type="button" value="Upload Image"/>
            </p>
			<?php
		}

		public function widget( $args, $instance ) {
			echo $args['before_widget'];
			if ( ! empty( $instance['title'] ) ) {
				echo $args['before_title'] . '<span class="fresh_author_widget__author-title">' . $instance['title'] . '</span>' . $args['after_title'];
			}
			?>
            <div class="fresh_author_widget__author-profile">
                <img src='<?php echo $instance['image']; ?>'>
            </div>
            <div class="fresh_author_widget__author-name">
				<?php echo wpautop( esc_html( $instance['author_name'] ) ) ?>
            </div>
            <div class='fresh_author_widget__author-description'>
				<?php echo wpautop( esc_html( $instance['description'] ) ) ?>
            </div>


			<?php

			echo $args['after_widget'];
		}
	}

	function fresh_load_widget() {
		register_widget( 'Fresh_Author_Widget' );
	}

	add_action( 'widgets_init', 'fresh_load_widget' );
}

