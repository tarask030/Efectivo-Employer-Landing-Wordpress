<?php
/**
 * ===============================
 * PARTIAL ABOUT 50/50.PHP - box 50/50
 * ===============================
 *
 * @package FRONTLINE
 * @since 1.0.0
 * @version 1.0.0
 */
$boxes_50_subtitle = get_field('about_50_subtitle');
$boxes_50_title = get_field('about_50_title');
?>

<div class="box-50-50 box-50-50--bg">
	<div class="box-50-50-cnt">
		
		<!-- FOTO -->
		<div class="foto">
			<?php $boxes_50_foto = get_field( 'about_50_foto' ); ?>
			<?php $size = 'image545'; ?>
			<?php if ( $boxes_50_foto ) : ?>
				<?php echo wp_get_attachment_image( $boxes_50_foto , $size, false, [
	                'class' => 'lazyload',
	                'loading' => 'lazy',
	                'data-src' => wp_get_attachment_image_url( $boxes_50_foto , $size ),
	                'alt' => get_post_meta( $boxes_50_foto , '_wp_attachment_image_alt', true),
	                ]); 
                ?>
			<?php endif; ?>
		</div>

		<!-- CNT -->
		<div class="cnt" data-aos="fade-up">
			
			<?php if ($boxes_50_subtitle): ?>
				<div class="subtitle">
					<?php echo $boxes_50_subtitle ?>
				</div>
			<?php endif ?>
			
			<?php if ($boxes_50_title): ?>
				<h2><?php echo $boxes_50_title ?></h2>
			<?php endif ?>


			<?php if ( have_rows( 'about_50_links' ) ) : ?>
				<ul>
				<?php while ( have_rows( 'about_50_links' ) ) : the_row(); ?>
					<li>
						<?php $about_50_links_item = get_sub_field( 'about_50_links_item' ); ?>
						<?php if ( $about_50_links_item ) : ?>
						<a href="<?php echo esc_url( $about_50_links_item['url'] ); ?>" class="btn-base"><?php echo esc_html( $about_50_links_item['title'] ); ?></a>
						<?php endif; ?>
					</li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		
		</div>
	</div>
</div>