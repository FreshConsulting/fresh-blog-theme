<?php
/**
 * The styleguide for our theme
 *
 * This is the template that contains our styleguide.
 * If you would like to view this styleguide create a page
 * with the slug 'styleguide'. It's recommended that this page is private
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fresh_Starter_Theme
 */

get_header();
?>

<div class="container">
	<div class="styleguide">
		<div class="row">
			<div class="col-12">

				<!-- Color Section -->
				<div class="styleguide__section">
					<div class="styleguide__header">Colors</div>
					<div class="d-flex">
						<div class="styleguide__color-block bg-gray"></div>
						<div class="styleguide__color-block bg-gray-light"></div>
						<div class="styleguide__color-block bg-gray-lighter"></div>
						<div class="styleguide__color-block bg-cyan"></div>
						<div class="styleguide__color-block bg-cyan-light"></div>
						<div class="styleguide__color-block bg-red"></div>
					</div>
				</div>
				<!-- End Color Section -->

				<!-- Typography Section -->
				<div class="styleguide__section">
					<div class="styleguide__header">Typography</div>
					<div class="heading-one">Montserrat Bold 64px</div>
					<div class="heading-two">Montserrat Bold 36px</div>
					<div class="heading-three">Montserrat Bold 28px</div>
					<div class="heading-four">Montserrat Bold 24px</div>
					<div class="heading-five">Open Sans Semibold 18px</div>
				</div>
				<!-- End Typography Section -->

				<!-- Button Section -->
				<div class="styleguide__section">
					<div class="styleguide__header">Buttons</div>
					<a href="#nogo" class="button button--cyan">Large Button</a>
				</div>
				<!-- End Button Section -->

				<!-- Cards Section -->
				<div class="styleguide__section">
					<div class="row">
						<div class="col-12">
							<div class="styleguide__header">Cards</div>
						</div>
						<div class="col-sm-4">
							<a href="#nogo" class="card">
								<picture class="card__picture img-fluid">
									<source srcset="https://www.fillmurray.com/g/600/300"
													media="(max-width: 767px)">
									<img src="https://www.fillmurray.com/g/600/300" class="card__image img-fluid" />
								</picture>
								<div class="card__content-wrapper">
									<div class="card__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
									<div class="card__date">July, 18th 2020</div>
									<div class="card__body">Body style 1 Georgia Regular 18px. ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum, nibh pellentesque vestibulum...</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<!-- End  Card Section -->

			</div>
		</div>
	</div>
</div>

<?php
get_footer();
