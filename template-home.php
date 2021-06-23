<?php
/**
* Template Name: Home template
*
*/
?>

<?php get_header(); 
// var_dump( get_field('img_header'));
// die();
?>
<style>
#backgroundHome {
    background-image: url(<?= get_field('img_header');
    ?>);
}
</style>
<section id="productos" class="Slide">
    <div class="container-md">
        <h1>Nuevos Productos</h1>
        <?php echo do_shortcode ('[yith_wc_productslider id=112]'); ?>
    </div>
</section>
<!-- <section id="productos">
    <div class="container-md">
        <h1>Nuevos Productos</h1>
        <?php //echo do_shortcode ('[products limit="4" columns="2" paginate="true"] '); ?>
    </div>
</section> -->

<!-- Esto es el loop de productos en html -->
<section id="productos" class="slideIpad">
    <div class="container-md">
        <h1>Nuevos Productos</h1>
        <div class="woocommerce columns-2 ">
            <div class="woocommerce-notices-wrapper"></div>
            <p class="woocommerce-result-count" style="display: none;">
                Mostrando 1–4 de 6 resultados</p>
            <form class="woocommerce-ordering" method="get">
                <select name="orderby" class="orderby" aria-label="Pedido de la tienda" style="display: none;">
                    <option value="menu_order">Orden por defecto</option>
                    <option value="popularity">Ordenar por popularidad</option>
                    <option value="rating">Ordenar por calificación media</option>
                    <!-- Dejamos "selected" en "date" para que muestre los mas nuevos -->
                    <option value="date" selected="selected">Ordenar por los últimos</option>
                    <option value="price">Ordenar por precio: bajo a alto</option>
                    <option value="price-desc">Ordenar por precio: alto a bajo</option>
                </select>
                <input type="hidden" name="paged" value="1">
            </form>
            <ul class="products columns-2">
                <li
                    class="product type-product post-127 status-publish first instock product_cat-sin-categorizar has-post-thumbnail shipping-taxable purchasable product-type-variable">
                    <a href="http://woowcolombia.test/producto/panoleta-azul-copia/"
                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="288"
                            height="288" src="http://woowcolombia.test/wp-content/uploads/2021/06/PanoletaAzul.png"
                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"
                            srcset="http://woowcolombia.test/wp-content/uploads/2021/06/PanoletaAzul.png 288w, http://woowcolombia.test/wp-content/uploads/2021/06/PanoletaAzul-150x150.png 150w, http://woowcolombia.test/wp-content/uploads/2021/06/PanoletaAzul-100x100.png 100w"
                            sizes="(max-width: 288px) 100vw, 288px">
                        <img class="previa2" src="http://woowcolombia.test/wp-content/uploads/2021/06/previa.svg">
                        <h5 class="separadorsito">.</h5>
                        <h2 class="woocommerce-loop-product__title">Pañoleta – azul (copia)</h2>
                        <p>Lorem Lorem ipsum dolor sit amet, consectetuer
                            adipiscing&nbsp;elit,&nbsp;sed&nbsp;diam&nbsp;nonummy.</p>
                    </a>
                </li>
                <li
                    class="product type-product post-125 status-publish last instock product_cat-sin-categorizar has-post-thumbnail shipping-taxable purchasable product-type-variable">
                    <a href="http://woowcolombia.test/producto/arnes-floral-copia/"
                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300"
                            height="300"
                            src="http://woowcolombia.test/wp-content/uploads/2021/06/ArnesFloral-300x300.png"
                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"
                            srcset="http://woowcolombia.test/wp-content/uploads/2021/06/ArnesFloral-300x300.png 300w, http://woowcolombia.test/wp-content/uploads/2021/06/ArnesFloral-150x150.png 150w, http://woowcolombia.test/wp-content/uploads/2021/06/ArnesFloral-100x100.png 100w, http://woowcolombia.test/wp-content/uploads/2021/06/ArnesFloral.png 310w"
                            sizes="(max-width: 300px) 100vw, 300px">
                        <img class="previa2" src="http://woowcolombia.test/wp-content/uploads/2021/06/previa.svg">
                        <h5 class="separadorsito">.</h5>
                        <h2 class="woocommerce-loop-product__title">Arnes Floral (copia)</h2>
                        <p>Lorem Lorem ipsum dolor sit amet, consectetuer
                            adipiscing&nbsp;elit,&nbsp;sed&nbsp;diam&nbsp;nonummy.</p>
                    </a>
                </li>
                <li
                    class="product type-product post-123 status-publish first instock product_cat-sin-categorizar has-post-thumbnail shipping-taxable purchasable product-type-variable">
                    <a href="http://woowcolombia.test/producto/placas-id-smart-copia/"
                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300"
                            height="300" src="http://woowcolombia.test/wp-content/uploads/2021/06/single-300x300.png"
                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"
                            srcset="http://woowcolombia.test/wp-content/uploads/2021/06/single-300x300.png 300w, http://woowcolombia.test/wp-content/uploads/2021/06/single-150x150.png 150w, http://woowcolombia.test/wp-content/uploads/2021/06/single-100x100.png 100w, http://woowcolombia.test/wp-content/uploads/2021/06/single.png 319w"
                            sizes="(max-width: 300px) 100vw, 300px">
                        <img class="previa2" src="http://woowcolombia.test/wp-content/uploads/2021/06/previa.svg">
                        <h5 class="separadorsito">.</h5>
                        <h2 class="woocommerce-loop-product__title">Placas ID Smart (copia)</h2>
                        <p>Lorem Lorem ipsum dolor sit amet, consectetuer
                            adipiscing&nbsp;elit,&nbsp;sed&nbsp;diam&nbsp;nonummy.</p>
                    </a>
                </li>
                <li
                    class="product type-product post-70 status-publish last instock product_cat-sin-categorizar has-post-thumbnail shipping-taxable purchasable product-type-variable">
                    <a href="http://woowcolombia.test/producto/arnes-floral/"
                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300"
                            height="300"
                            src="http://woowcolombia.test/wp-content/uploads/2021/06/ArnesFloral-300x300.png"
                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"
                            srcset="http://woowcolombia.test/wp-content/uploads/2021/06/ArnesFloral-300x300.png 300w, http://woowcolombia.test/wp-content/uploads/2021/06/ArnesFloral-150x150.png 150w, http://woowcolombia.test/wp-content/uploads/2021/06/ArnesFloral-100x100.png 100w, http://woowcolombia.test/wp-content/uploads/2021/06/ArnesFloral.png 310w"
                            sizes="(max-width: 300px) 100vw, 300px">
                        <img class="previa2" src="http://woowcolombia.test/wp-content/uploads/2021/06/previa.svg">
                        <h5 class="separadorsito">.</h5>
                        <h2 class="woocommerce-loop-product__title">Arnes Floral</h2>
                        <p>Lorem Lorem ipsum dolor sit amet, consectetuer
                            adipiscing&nbsp;elit,&nbsp;sed&nbsp;diam&nbsp;nonummy.</p>
                    </a>
                </li>
            </ul>
            <nav class="woocommerce-pagination">
                <ul class="page-numbers">
                    <li><span aria-current="page" class="page-numbers current">1</span></li>
                    <li><a class="page-numbers" href="/?orderby=date&amp;product-page=2">2</a></li>
                    <li><a class="next page-numbers" href="/?orderby=date&amp;product-page=2">→</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<section id="separadorInvisible"></section>
<section id="banners1">
    <div class=" container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="banner col-6">
                        <a href="#">
                            <img src="../wp-content/themes/woow/img/banner1.png" class="d-block w-100" alt="...">
                        </a>
                    </div>
                    <div class="banner col-6">
                        <a href="#">
                            <img src="../wp-content/themes/woow/img/banner2.png" class="d-block w-100" alt="...">
                        </a>
                    </div>
                    <div class="banner col-6">
                        <a href="#">
                            <img src="../wp-content/themes/woow/img/banner3.png" class="d-block w-100" alt="...">
                        </a>
                    </div>
                    <div class="banner col-6">
                        <a href="#">
                            <img src="../wp-content/themes/woow/img/banner4.png" class="d-block w-100" alt="...">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="banners2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselHome" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../wp-content/themes/woow/img/banner1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../wp-content/themes/woow/img/banner2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../wp-content/themes/woow/img/banner3.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../wp-content/themes/woow/img/banner4.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>