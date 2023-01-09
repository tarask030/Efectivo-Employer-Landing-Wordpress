<?php
/**
 * ===============================
 * HOME HERO.PHP - main header file
 * ===============================
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */
$hero_slogan = get_field( 'hero_slogan' );
$hero_cnt = get_field( 'hero_cnt' );
$hero_button = get_field( 'hero_button' );
$hero_img = get_field( 'hero_img' );
?>

<section class="home-hero">
	<div class="container">
		<?php if ($hero_slogan ): ?>
			<h1 data-aos="fade-up">
				<?php echo $hero_slogan; ?>
			</h1>
		<?php endif ?>
		<?php if ($hero_cnt): ?>			
		<div data-aos="fade-up">
			<?php echo $hero_cnt ?>			
		</div>
		<?php endif ?>

		<!-- BUTTON -->
		<?php if ($hero_button): ?>
			<div data-aos="fade-up">
				<a href="<?php echo $hero_button; ?>" target="_blank">
					<?php pll_e('Pobierz aplikację'); ?>
				</a>
			</div>
		<?php endif ?>

		<!-- IMAGES -->
		<?php $hero_img = get_field( 'hero_img' ); ?>
		<?php $size = 'full'; ?>
		<?php if ( $hero_img ) : ?>
			<div class="home-hero-images" data-aos="fade-up">
				<?php echo wp_get_attachment_image( $hero_img, $size, false, [
			        'class' => 'lazyload img-fluid',
			        'loading' => 'lazy',
			        'data-src' => wp_get_attachment_image_url( $hero_img , $size ),
			        'alt' => get_post_meta( $hero_img , '_wp_attachment_image_alt', true),
			        ]); 
			    ?>
			</div>
		<?php endif; ?>

		<!-- BG ANIMACJA -->
		<div class="home-hero-animation">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/svg/hero-bg.svg" alt="" class="img-fluid">
		</div>
	</div>
</section>