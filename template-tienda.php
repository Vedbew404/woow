<?php
/**
* Template Name: Tienda template
*
*/
?>

<?php get_header(); ?>
<header id="headerTienda">
    <div class="container-md">
        <div class="row">
            <div class="col-sm-8">
                <p class="brand" href="#">&nbsp;Todo lo que tu mascota necesita en un solo lugar</p>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col-4">
                        <div class="iconos">
                            <a class="lupa" href="#">
                                <img src="../wp-content/themes/woow/img/lupa.svg" alt="Buscar">
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="iconos">
                            <a href="#">
                                <img class="iconCar" src="../wp-content/themes/woow/img/carrito.svg" alt="Carrito">
                            </a>
                        </div>
                        <a class="CarritoCentrado" href="">Carrito</a>
                    </div>
                    <div class="col-4">
                        <div class="iconos">
                            <a href="#">
                                <img class="iconCue" src="../wp-content/themes/woow/img/cuenta.svg" alt="Cuenta">
                            </a>
                        </div>
                        <a href="">Mi Cuenta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="posHeader2">
    <div class="container-md">
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
                                <a class="nav-link" href="template-home.php">Home</a>
                            </li>
                            <li>
                                <a class="actual nav-link" href="template-tienda.php">Tienda</a>
                            </li>
                            <li>
                                <a class="nav-link" href="template-nosotros.php">Nosotros</a>
                            </li>
                            <li>
                                <a class="nav-link" href="template-contacto.php">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<section id="backgroundTienda">
    <section id="cabecera2">
        <div class="container-md">
            <div class="row">
                <div class="col-12">
                    <h1>Tienda</h1>
                    <h2>Busca lo que necesitas para tu mascota</h2>
                    <form action="../../form-result.php" method="post" target="_blank">
                        <img class="lupita" src="../wp-content/themes/woow/img/lupa.svg">
                        <input class="search" type="search" name="busqueda" placeholder="Alimento para perros">
                        <a id="buscar" class="btnBusqueda" href="#">
                            <img src="../wp-content/themes/woow/img\playbusqueda.svg" alt="Icono de busqueda">
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
<section id="linea">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <a class="separador">.</a>
            </div>
        </div>
    </div>
</section>
<section id="productos">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="cajita col-sm-4">
                        <a href="template-single.php">
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
                        <a href="template-single.php">
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
                        <a href="template-single.php">
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
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="cajita col-sm-4">
                        <a href="template-single.php">
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
                        <a href="template-single.php">
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
                        <a href="template-single.php">
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