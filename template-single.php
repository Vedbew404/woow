<?php
/**
* Template Name: Single template
*
*/
?> 

<?php get_header(); ?>
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
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li>
                                <a class="actual nav-link" href="tienda.php">Tienda</a>
                            </li>
                            <li>
                                <a class="nav-link" href="nosotros.php">Nosotros</a>
                            </li>
                            <li>
                                <a class="nav-link" href="contacto.php">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<section id="cabeceraProducto">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <h2>Busca lo que necesitas para tu mascota</h2>
                <form action="../../form-result.php" method="post" target="_blank">
                    <img class="lupita" src="img/lupa.svg">
                    <input class="search" type="search" name="busqueda" placeholder="Alimento para perros">
                    <a id="buscar" class="btnBusqueda" href="#">
                        <img src="img\playbusqueda.svg" alt="Icono de busqueda">
                    </a>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="Product">
    <div class="container-md">
        <div class="row">
            <div class="col-6">
                <img src="img/single.png" alt="Imagen 1 del producto">
                <div id="imgsProduct">
                    <div class="row">
                        <div class="col-12">
                            <img src="img/single.png" alt="Imagen 2 del producto">
                            <img src="img/single.png" alt="Imagen 3 del producto">
                            <img src="img/single.png" alt="Imagen 4 del producto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div>
                    <a href="#">
                        <img class="botonR" src="img/right.svg" alt="Boton producto siguiente">
                    </a>
                    <a href="#">
                        <img class="botonL" src="img/left.svg" alt="Boton producto anterior">
                    </a>
                </div>
            </div>
            <div class="InformacionProduct col-md-6">
                <span class="separadore"></span>
                <h1>Placas ID Smart</h1>
                <h2>$80.000</h2>
                <p>Lorem Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                <label for="talla">Talla</label>
                <br />
                <select id="talla" name="talla">
                    <option value="" selected="selected">Elige la talla de tu peludo</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                </select>
                <br />
                <label for="Cantidad">Cantidad</label>
                <br />
                <input class="signoMENOS" id="menos" type="image" src="img/signoMENOS.svg" alt="Signo Menos">
                <input class="cantidad" id="contador" type="number">
                <input class="signoMAS" id="mas" type="image" src="img/signoMAS.svg" alt="signo Mas">
                <br />
                <input class="botonCarrito" type="submit" value="Añadir al carrito">
                <br />
                <br />
                <br />
                <p class="detalles">SKU: 000000000</p>
                <p class="detalles">Categorías: Hogar, Mantas, Otros, Wawaw</p>
                <p class="detalles">Compartir: XXXXXX</p>
            </div>
        </div>
    </div>
</section>
<section id="imgsProduct">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <div class="descripcionHTML">
                    <h1>Espacio para descripción HTML
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="productos">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <h1>También te puede interesar</h1>
                <div class="items">
                    <div class="row">
                        <div class="izquierda col-sm-1">
                            <a href="">
                                <img src="img/izquierda.png" alt="">
                            </a>
                        </div>
                        <div class="caja col-sm-3">
                            <a href="single.php">
                                <div class="imagencita">
                                    <img src="img/single.png">
                                    <img class="previa previaSlide" src="img/previa.svg">
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
                                    <img src="img/PañoletaAzul.png">
                                    <img class="previa previaSlide" src="img/previa.svg">
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
                                    <img src="img/ArnesFloral.png">
                                    <img class="previa previaSlide" src="img/previa.svg">
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
                                <img src="img/derecha.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
var sumar = document.getElementById("mas");
var restar = document.getElementById("menos");
var contador = document.getElementById("contador");
var valorBase = 1;
var prevValue;

function calcular() {
    var value = contador.value;
    var isValid = /^[1-9][0-9]*$/.test(value);

    if (!isValid) {
        contador.value = prevValue;
    } else {
        prevValue = value;
    }

    importe.value = Number.parseFloat(contador.value * valorBase).toFixed(2);
}

sumar.onclick = function() {
    contador.value = Number(contador.value) + 1;
    calcular();
};

restar.onclick = function() {
    contador.value = Number(contador.value) - 1;
    calcular();
};

contador.onchange = function() {
    calcular();
};

contador.onkeyup = function() {
    if (contador.value === "") {
        return;
    }
    calcular();
};

calcular();
</script>
<?php get_footer(); ?>