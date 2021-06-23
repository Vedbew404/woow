<?php
/**
* Template Name: Tienda template
*
*/
?>
<?php //if (!defined('ABSPATH')) exit; ?>
<?php get_header();  ?>
<section id="backgroundTienda">
    <section id="cabecera2">
        <div class="container-md">
            <div class="row">
                <div class="col-12">
                    <h1>Tienda</h1>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
</section>
<section id="linea">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <a class="separador separNONE">.</a>
            </div>
        </div>
    </div>
</section>
<section id="productos">
    <div class="container-md">
        <div class="row">
            <?php echo do_shortcode ('[products limit="6" columns="3" paginate="true"] '); ?>
        </div>
    </div>
</section>



<?php  
    // $args = array(
    //     'post_type'      => 'product',
    //     'posts_per_page' => 6,
    // );

    // $loop = new WP_Query( $args );

    // while ( $loop->have_posts() ) : $loop->the_post();
    //     global $product;
    //     echo '<br /><a href="'.get_permalink().'">' . woocommerce_get_product_thumbnail().' '.get_the_title().'</a>';
    // endwhile;

    // wp_reset_query();
?>
<?php
    // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    // $args = array(
    //     'post_type' => 'product',
    //     'paged' => $paged,
    //     'posts_per_page' => 2
    // );
    // $wp_query = new WP_Query($args);

        ?>

<?php //do_action('woocommerce_archive_description'); ?>

<?php //if (have_posts()) : ?>

<?php
            // I don't want the sorting anymore
            //do_action('woocommerce_before_shop_loop');
            ?>

<!-- <ul class = "products-list">
                <?php //while (have_posts()) : the_post(); ?>

                    <?php //woocommerce_get_template_part('content', 'product'); ?>

                <?php //endwhile; // end of the loop.   ?>
            </ul> -->

<?php
            /*  woocommerce pagination  */
           /* echo 'paginacion';
            echo get_query_var('paged');
            do_action('woocommerce_after_shop_loop');*/
            ?>

<?php //elseif (!woocommerce_product_subcategories(array('before' => woocommerce_product_loop_start(false), 'after' => woocommerce_product_loop_end(false)))) : ?>

<?php //woocommerce_get_template('loop/no-products-found.php'); ?>

<?php //endif; ?>

<?php get_footer(); ?>