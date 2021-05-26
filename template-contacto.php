<?php
/**
* Template Name: Contacto template
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
                                <a class="nav-link" href="tienda.php">Tienda</a>
                            </li>
                            <li>
                                <a class="nav-link" href="nosotros.php">Nosotros</a>
                            </li>
                            <li>
                                <a class="actual nav-link" href="contacto.php">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<section id="backgroundContacto">
    <section id="cabeceraContacto">
        <div class="container-md">
            <div class="row">
                <div class="col-12">
                    <h1>Contacto</h1>
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
<section id="formContacto">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <h2 class="h2Sup">¿Necesitas más información?</h2>
                <h2>Te invitamos a contactar a nuestros asesores</h2>
                <h2>con gusto te atenderemos</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="ButtonW col-sm-6">
                    <img src="img/logoWhatsapp.svg" alt="Logo de Whatsapp">
                    <a href="#">Whatsapp</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="ButtonT col-sm-6">
                    <img src="img/logoTelegram.svg" alt="Logo de Telegram">
                    <a href="#">Telegram</a>
                </div>
            </div>
        </div>
        <div class="row">
            <fieldset>
                <form action="contacto.html">
                    <input class="FormNA" type="text" placeholder="Nombre y Apellido">
                    <br />
                    <input class="FormT" type="text" placeholder="Telefono">
                    <select class="FormMascota" name="Mascota">
                        <option value="" selected="selected">Mascota</option>
                        <option value="10">Perro</option>
                        <option value="11">Gato</option>
                        <option value="12">Ave</option>
                        <option value="13">Rata</option>
                    </select>
                    <br />
                    <input class="FormE" type="email" placeholder="Email" />
                    <br />
                    <textarea class="FormM" placeholder="Mensaje"></textarea>
                    <br />
                    <button Class="FormButton">Enviar ahora</button>
                </form>
            </fieldset>
        </div>
    </div>
    </div>
</section>
<?php get_footer(); ?>