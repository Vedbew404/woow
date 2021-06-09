<?php
/**
* Template Name: Contacto template
*
*/
?>

<?php get_header(); ?>
<section id="backgroundContacto">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <h1>Contacto</h1>
            </div>
        </div>
    </div>
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
                    <img src="../wp-content/themes/woow/img/logoWhatsapp.svg" alt="Logo de Whatsapp">
                    <a href="#">Whatsapp</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="ButtonT col-sm-6">
                    <img src="../wp-content/themes/woow/img/logoTelegram.svg" alt="Logo de Telegram">
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