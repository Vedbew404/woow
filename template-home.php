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
        <?php echo do_shortcode ('[yith_wc_productslider id=69]'); ?>
    </div>
</section>
<section id="productos" class="Slide2">
    <div class="container-md">
        <h1>Nuevos Productos</h1>
        <?php echo do_shortcode ('[products limit="4" columns="2" paginate="true"] '); ?>
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