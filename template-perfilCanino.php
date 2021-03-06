<?php
/**
* Template Name: PerfilCanino template
*
*/
?>

<?php get_header(); ?>
<section id="backgroundPerfilCanino">
    <div class="cabecera">
        <div class="container-md">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <h4 class="col-sm-5">
                            <img class="img-fluid" src="../wp-content/themes/woow/img/imgPC.png" alt="Imagen del perro">
                        </h4>
                        <div Class="LineaDecorativa col-sm-1"></div>
                        <div class="nombrePC col-sm-6">
                            <h2>¡Hola!</h2>
                            <h1>Soy Max</h1>
                            <p>Estoy perdido.</p>
                            <p class="pAyudame">Ayudame a volver a casa</p>
                            <button Class="ButtonAyudar">Ayudar Ahora</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="InformacionGeneral">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <h1 class="tituloIG">Información General</h1>
            </div>
            <div class="col-4">
                <img class="col-4" src="../wp-content/themes/woow/img/huellaCanina.svg" alt="icono huella">
                <h2>Especie: Canina</h2>
            </div>
            <div class="col-4">
                <img class="col-4" src="../wp-content/themes/woow/img/huellaCanina.svg" alt="icono huella">
                <h2>Raza: Golden</h2>
            </div>
            <div class="col-4">
                <img class="col-4" src="../wp-content/themes/woow/img/reloj.svg" alt="icono reloj">
                <h2>Edad: 5 años</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img class="col-6" src="../wp-content/themes/woow/img/sexo.svg" alt="icono sexo">
                <h2>Sexo: Macho</h2>
            </div>
            <div class="col-6">
                <img class="col-6" src="../wp-content/themes/woow/img/peso.svg" alt="icono peso">
                <h2>Peso Promedio: 32kg</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>¿Deseas más información sobre Max?</h2>
                <button Class="buttonSA">Solicitar Ahora</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="col-12">Datos de Contacto</h3>
            </div>
        </div>
    </div>
</section>
<section id="DatosContacto">
    <div class="container-md">
        <div class="row">
            <div Class="col-12">
                <div class="row">
                    <h4 class="col-sm-3">
                        <img class="img-fluid" src="../wp-content/themes/woow/img/iconoPropietario.svg"
                            alt="icono propietario">
                    </h4>
                    <div Class="marginTopP col-sm-3">
                        <h3><strong>Propietario:</strong></h3>
                    </div>
                    <div Class="marginTopP col-sm-6">
                        <h3> María Bermudez</h3>
                    </div>
                </div>
                <div class="row">
                    <h4 class="col-sm-3">
                        <img class="img-fluid" src="../wp-content/themes/woow/img/iconoTelefonos.svg"
                            alt="icono telefonos">
                    </h4>
                    <div Class="marginTopT col-sm-3">
                        <h3><strong>Telefono 1:</strong></h3>
                        <h3><strong>Telefono 2:</strong></h3>
                        <h3><strong>Telefono 3:</strong></h3>
                    </div>
                    <div Class="marginTopT col-sm-6">
                        <h3> 300 000 0000</h3>
                        <h3> 300 000 0000</h3>
                        <h3> 300 000 0000</h3>
                    </div>
                </div>
                <div class="row">
                    <h4 class="col-sm-3">
                        <img class="imgDireccion img-fluid" src="../wp-content/themes/woow/img/iconoDireccion.svg"
                            alt="icono direccion">
                    </h4>
                    <div Class="marginTopD col-sm-3">
                        <h3><strong>Dirección:</strong></h3>
                    </div>
                    <div Class="marginTopD col-sm-6">
                        <h3> Cra XX # XX-XX, Apto XXX. Bogotá, Colombia</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="DatosMedicos">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <h1>Datos Médicos</h1>
            </div>
        </div>
        <div class="row">
            <div class="datosM col-4">
                <img class="img-fluid" src="../wp-content/themes/woow/img/iconoVacunas.svg" alt="Icono Vacunas">
                <h2>Vacunas</h2>
            </div>
            <div class="datosM col-4">
                <img class="img-fluid" src="../wp-content/themes/woow/img/iconoAlergias.svg" alt="Icono Alergias">
                <h2>Alergías</h2>
            </div>
            <div class="datosM col-4">
                <img class="img-fluid" src="../wp-content/themes/woow/img/iconoEnfermedades.svg"
                    alt="Icono Enfermedades">
                <h2>Enfermedades</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>* Los datos en este sitio web son suministrados por el propietario de la mascota.
                    <strong><a href="#">WOOW COLOMBIA</strong></a>
                    se reserva toda responsabilidad con la información en esta página. Los permisos de
                    geolocalización solicitados al ingresar en esta página son utilizados para enviar la información
                    de la ubicación al propietario de la mascota, <strong><a href="#">WOOW COLOMBIA</strong></a> no
                    utiliza esta
                    información con
                    ningun fin personal y/o comercal.
                </p>
                <br />
                <p>Para mayor información visíta nuestos <strong><a href="#">Términos y
                            Condiciones</a></strong></p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>