<?php
/**
 * ===============================
 * PARTIAL BOX 50/50.PHP - box content
 * ===============================
 *
 * @package FRONTLINE
 * @since 1.0.0
 * @version 1.0.0
 */
$box_lead_title = get_field('box_lead_title');
$box_lead_cnt = get_field('box_lead_cnt')
?>

<div class="about-grand" id="next">
    
    <!-- LEAD -->
    <div class="about-grand-lead">
        <?php if ($box_lead_title): ?>
            <h2 data-aos="fade-up">
                <?php echo $box_lead_title; ?>
            </h2>
        <?php endif ?>
        <?php if ($box_lead_cnt): ?>
            <div data-aos="fade-up">
                <?php echo $box_lead_cnt ?>
            </div>
        <?php endif ?>
    </div>

    <!-- BOXES -->
    <?php if ( have_rows( 'box_lead_boxes' ) ) : ?>
    <div class="about-grand-boxes about-grand-boxes--margin">
        
    <div class="container">
        <ul>
            <?php while ( have_rows( 'box_lead_boxes' ) ) : the_row();
            $box_lead_boxes_title = get_sub_field( 'box_lead_boxes_title' );
            $box_lead_boxes_cnt = get_sub_field( 'box_lead_boxes_cnt' );
            ?>
            <li>
                <!-- FOTO -->
                <div class="foto">
                    <?php $box_lead_boxes_img = get_sub_field( 'box_lead_boxes_img' ); ?>
                    <?php $size = 'image682'; ?>
                    <?php if ( $box_lead_boxes_img ) : ?>
                        <?php echo wp_get_attachment_image( $box_lead_boxes_img , $size, false, [
                            'class' => 'lazyload',
                            'loading' => 'lazy',
                            'data-src' => wp_get_attachment_image_url( $box_lead_boxes_img , $size ),
                            'alt' => get_post_meta( $box_lead_boxes_img , '_wp_attachment_image_alt', true),
                            ]); 
                        ?>
                    <?php endif; ?>
                </div>

                <!-- CNT -->
                <div class="cnt">

                    <?php if ($box_lead_boxes_title): ?>
                       <h3 data-aos="fade-up" class="typo1"><?php echo $box_lead_boxes_title ?></h3>
                    <?php endif;?>

                    <?php if ($box_lead_boxes_cnt): ?>
                        <div data-aos="fade-up">
                            <?php echo $box_lead_boxes_cnt ?>
                        </div>
                    <?php endif ?>

                    <?php $box_lead_boxes_button = get_sub_field( 'box_lead_boxes_button' ); ?>
                    <?php if ( $box_lead_boxes_button ) : ?>
                        <div data-aos="fade-up">
                            <a href="<?php echo esc_url( $box_lead_boxes_button['url'] ); ?>" class="btn-purple"><?php echo esc_html( $box_lead_boxes_button['title'] ); ?></a>
                        </div>
                    <?php endif; ?>
                </div>

            </li>
        <?php endwhile; ?>
        </ul>
    </div>
    </div>
    <?php endif; ?>
</div>
