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

<div class="styleguide">

	<!-- Color Section -->
	<div class="styleguide__section">
		<div class="container">
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
	</div>
	<!-- End Color Section -->

	<!-- Typography Section -->
	<div class="styleguide__section">
		<div class="container">
			<div class="styleguide__header">Typography</div>
			<div class="heading-one">Montserrat Bold 64px</div>
			<div class="heading-two">Montserrat Bold 36px</div>
			<div class="heading-three">Montserrat Bold 28px</div>
			<div class="heading-four">Montserrat Bold 24px</div>
			<div class="heading-five">Open Sans Semibold 18px</div>
		</div>
	</div>
	<!-- End Typography Section -->

	<!-- Button Section -->
	<div class="styleguide__section">
		<div class="container">
			<div class="styleguide__header">Buttons</div>
			<a href="#nogo" class="button button--cyan">Large Button</a>
		</div>
	</div>
	<!-- End Button Section -->

	<!-- Cards Section -->
	<div class="styleguide__section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="styleguide__header">Cards</div>
				</div>
				<div class="col-sm-4">
					<a href="#nogo" class="card card--link">
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
	</div>
	<!-- End Card Section -->

	<!-- Hero Section -->
	<div class="styleguide__section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="styleguide__header">Hero</div>
				</div>
			</div>
		</div>
		<section class="hero" style="background-image:url('https://images.unsplash.com/photo-1558981806-ec527fa84c39?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9');">
			<div class="container">
				<div class="hero__content-container">
					<h1 class="hero__title">Blog Title</h1>
				</div>
				<div class="bio-card">
					<img src="https://www.fillmurray.com/163/163" alt="Name" class="bio-card__image" />
					<div class="content-container">
						<div class="bio-card__title">Bill Murray</div>
						<div class="bio-card__description">
						Body style 1 Georgia Regular 18px. ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum, nibh pellentesque vestibulum
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- End Hero Section -->
</div>

<?php
get_footer();
