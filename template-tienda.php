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
            <?php echo do_shortcode ('[products limit="6" columns="3"]'); ?> 
            <!-- <div class="col-12">
                    <div class="row">
                        <div class="cajita col-sm-4">
                            <a href="./single">
                                <div class="imagencita">
                                    <img src="../wp-content/themes/woow/img/single.png">
                                    <img class="previa" src="../wp-content/themes/woow/img/previa.svg">
                                </div>
                                <h5 class="separadorsito">.</h5>
                                <h3 class="tituloproducto">Placas ID Smart
                                </h3>
                                <p class="descripcionproducto" align="justify"> Lorem Lorem ipsum dolor sit amet,
                                    consectetuer
                                    adipiscing elit, sed diam nonummy.
                                </p>
                            </a>
                        </div>
                        <div class="cajita col-sm-4">
                            <a href="./single">
                                <div class="imagencita">
                                    <img src="../wp-content/themes/woow/img/single.png">
                                    <img class="previa" src="../wp-content/themes/woow/img/previa.svg">
                                </div>
                                <h5 class="separadorsito">.</h5>
                                <h3 class="tituloproducto">Placas ID Smart
                                </h3>
                                <p class="descripcionproducto" align="justify"> Lorem Lorem ipsum dolor sit amet,
                                    consectetuer
                                    adipiscing elit, sed diam nonummy.
                                </p>
                            </a>
                        </div>
                        <div class="cajita col-sm-4">
                            <a href="./single">
                                <div class="imagencita">
                                    <img src="../wp-content/themes/woow/img/single.png">
                                    <img class="previa" src="../wp-content/themes/woow/img/previa.svg">
                                </div>
                                <h5 class="separadorsito">.</h5>
                                <h3 class="tituloproducto">Placas ID Smart
                                </h3>
                                <p class="descripcionproducto" align="justify"> Lorem Lorem ipsum dolor sit amet,
                                    consectetuer
                                    adipiscing elit, sed diam nonummy.
                                </p>
                            </a>
                        </div>
                        <div class="cajita col-sm-4">
                            <a href="./single">
                                <div class="imagencita">
                                    <img src="../wp-content/themes/woow/img/single.png">
                                    <img class="previa" src="../wp-content/themes/woow/img/previa.svg">
                                </div>
                                <h5 class="separadorsito">.</h5>
                                <h3 class="tituloproducto">Placas ID Smart
                                </h3>
                                <p class="descripcionproducto" align="justify"> Lorem Lorem ipsum dolor sit amet,
                                    consectetuer
                                    adipiscing elit, sed diam nonummy.
                                </p>
                            </a>
                        </div>
                        <div class="cajita col-sm-4">
                            <a href="./single">
                                <div class="imagencita">
                                    <img src="../wp-content/themes/woow/img/single.png">
                                    <img class="previa" src="../wp-content/themes/woow/img/previa.svg">
                                </div>
                                <h5 class="separadorsito">.</h5>
                                <h3 class="tituloproducto">Placas ID Smart
                                </h3>
                                <p class="descripcionproducto" align="justify"> Lorem Lorem ipsum dolor sit amet,
                                    consectetuer
                                    adipiscing elit, sed diam nonummy.
                                </p>
                            </a>
                        </div>
                        <div class="cajita col-sm-4">
                            <a href="./single">
                                <div class="imagencita">
                                    <img src="../wp-content/themes/woow/img/single.png">
                                    <img class="previa" src="../wp-content/themes/woow/img/previa.svg">
                                </div>
                                <h5 class="separadorsito">.</h5>
                                <h3 class="tituloproducto">Placas ID Smart
                                </h3>
                                <p class="descripcionproducto" align="justify"> Lorem Lorem ipsum dolor sit amet,
                                    consectetuer
                                    adipiscing elit, sed diam nonummy.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
             -->
        </div>
    </section>
    <section id="siguientesProductos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <a href="#">
                            <img class="left" src="../wp-content/themes/woow/img/left.svg" alt="BotonLeft">
                        </a>
                        <a Class="numeros" href="">1</a>
                        <a Class="proActual" href="">2</a>
                        <a Class="numeros" href="">3</a>
                        <a Class="numeros" href="">4</a>
                        <a href="">
                            <img class="right" src="../wp-content/themes/woow/img/right.svg" alt="BotonRight">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>