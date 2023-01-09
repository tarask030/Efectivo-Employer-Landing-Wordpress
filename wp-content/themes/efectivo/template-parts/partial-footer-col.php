<?php
/**
 * ===============================
 * FOOTER COL .PHP - footer copy
 * ===============================
 *
 * @package FRONTLINE
 * @since 1.0.0
 * @version 1.0.0
 */
?>
<div class="container">

    <div class="row">

        <!-- LOGO, TXT -->        
        <div class="col">

            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-footer.svg" alt="<?php bloginfo('name'); ?>" width="180" height="40">
            </div>

            <div class="txt">
                <span><?php pll_e('Skontaktuj się z nami!'); ?></span>
                <p><?php pll_e('Sprawdź sam, jak zmotywować pracowników do wydajniejszej pracy. Odezwij się do nas, jeśli masz pytania lub chcesz nawiązać współpracę!'); ?></p>
                <button class="btn-white"><?php pll_e('Zacznij teraz'); ?></button>
            </div>

        </div>

        <!-- MENU, SOCIAL -->
        <div class="col">
            
            <!-- MENU -->
            <nav aria-label="Footer">
                <?php
                wp_nav_menu(
                    array(
                    'theme_location' => 'main-menu',
                    'container'      => '',
                    'menu_class'     => 'navbar__fixed-nav',
                    'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'         => new WP_Bootstrap_Navwalker(),
                    )
                );
                ?>
            </nav> 

            <!-- SOCIAL -->
            <?php if ( have_rows( 'footer_social', 'option' ) ) : ?>
                <ul class="social">
                    <?php while ( have_rows( 'footer_social', 'option' ) ) : the_row(); ?>
                        <li>
                            <a href="<?php the_sub_field( 'footer_social_link' ); ?>" target="_blank">
                                <?php $footer_social_icon = get_sub_field( 'footer_social_icon' ); ?>
                                <?php $size = 'full'; ?>
                                <?php if ( $footer_social_icon ) : ?>
                                    <?php echo wp_get_attachment_image( $footer_social_icon, $size ); ?>
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

        </div>

    </div>

    <!-- COPY -->
    <div class="copy">
        Copyright 2022 - Designed & Developed by HumanIT
    </div>
    
</div>