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
    background-image: url(<?= get_field('img_header'); ?>);
} 
</style>
<section id="backgroundHome">
    <div id="posHeader1" class="container-md">
        <div class="row">
            <div class="col-sm-6">
                <div id="marca">
                    <h6>
                        <span class="resaltado">WOOW</span>
                    </h6>
                </div>
            </div>
            <div class="col-6">
                <nav class="nav2 navbar navbar-expand-lg navbar-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li>
                                <a class="actual nav-link" href="./">Home</a>
                            </li>
                            <li>
                                <a class="nav-link" href="./tienda">Tienda</a>
                            </li>
                            <li>
                                <a class="nav-link" href="./nosotros">Nosotros</a>
                            </li>
                            <li>
                                <a class="nav-link" href="./contacto">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div id="cabecera" class="container-md">
        <div class="row">
            <div class="col-12">
                <h1>Lorem ipsum
                </h1>
                <input type="submit" value="VER AHORA">
            </div>
        </div>
    </div>
</section>
<section id="productos">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <h1>Nuevos Productos</h1>
                <div class="items">
                    <div class="row">
                        <div class="izquierda col-sm-1">
                            <a href="">
                                <img src="../wp-content/themes/woow/img/izquierda.png" alt="">
                            </a>
                        </div>
                        <div class="caja col-sm-3">
                            <a href="single.php">
                                <div class="imagencita">
                                    <img src="../wp-content/themes/woow/img/single.png">
                                    <img class="previa previaSlide" src="../wp-content/themes/woow/img/previa.svg">
                                </div>
                                <h5 class="separadorsito">.</h5>
                                <h3 class="tituloproducto">Placas ID Smart
                                </h3>
                                <p class="descripcionproducto" align="justify"> Lorem Lorem ipsum dolor sit
                                    amet, consectetuer adipiscing elit, sed diam nonummy.
                                </p>
                            </a>
                        </div>
                        <div class="caja col-sm-3">
                            <a href="single.php">
                                <div class="imagencita">
                                    <img src="../wp-content/themes/woow/img/PañoletaAzul.png">
                                    <img class="previa previaSlide" src="../wp-content/themes/woow/img/previa.svg">
                                </div>
                                <h5 class="separadorsito">.</h5>
                                <h3 class="tituloproducto">Pañoleta - azul
                                </h3>
                                <p class="descripcionproducto" align="justify"> Lorem Lorem ipsum dolor sit
                                    amet, consectetuer adipiscing elit, sed diam nonummy.
                                </p>
                            </a>
                        </div>
                        <div class="caja col-sm-3">
                            <a href="single.php">
                                <div class="imagencita">
                                    <img src="../wp-content/themes/woow/img/ArnesFloral.png">
                                    <img class="previa previaSlide" src="../wp-content/themes/woow/img/previa.svg">
                                </div>
                                <h5 class="separadorsito">.</h5>
                                <h3 class="tituloproducto">Arnes Floral
                                </h3>
                                <p class="descripcionproducto" align="justify"> Lorem Lorem ipsum dolor sit
                                    amet, consectetuer adipiscing elit, sed diam nonummy.
                                </p>
                            </a>
                        </div>
                        <div class="derecha col-sm-1">
                            <a href="">
                                <img src="../wp-content/themes/woow/img/derecha.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselHome"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>