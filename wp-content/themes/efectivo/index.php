<?php
/**
 * ===============================
 * INDEX.PHP - The template for displaying content in the home page
 * ===============================
 *
 * Template name: Home
 * 
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */

get_header();
?>


    <main>
    <?php
        get_template_part( 'template-parts/partial', 'home-hero');
        get_template_part( 'template-parts/partial', 'home-how-works');
        get_template_part( 'template-parts/partial', 'home-why');
        get_template_part( 'template-parts/partial', 'home-worker');
        get_template_part( 'template-parts/partial', 'home-packages');
        get_template_part( 'template-parts/partial', 'home-blog');
    ?> 
    </main> 

<?php
get_footer();
