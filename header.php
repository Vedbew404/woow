<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woow
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="profile" href="https://gmpg.org/xfn/11"> -->
    <meta name="description" content="WOOW">
    <meta name="keywords" content="Cuidado de tus mascotas, Rescate animal, Busqueda por GPS">
    <meta name="author" content="Francisco González">
    <title>WOOW | Bienvenidos
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">	 -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'woow' ); ?></a>
        <?php
			 //the_custom_logo();
			if ( is_front_page() ) :
				?>
        <header>
            <div class="container-sm">
                <div class="row">
                    <div class="col-sm-8">
                        <p class="brand" href="#"><b>&nbsp;Todo lo que tu mascota necesita en un solo lugar</b></p>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="Lupa col-4">
                                <div class="iconos">
                                    <a href="#">
                                        <img class="lupa" src="http://woowcolombia.test/wp-content/uploads/2021/06/lupa.svg" alt="Buscar">
                                    </a>
                                </div>
                            </div>
                            <div class="Carrito col-4">
                                <div class="iconos">
                                    <a href="#">
                                        <img class="iconCar" src="http://woowcolombia.test/wp-content/uploads/2021/06/carrito.svg"
                                            alt="Carrito">
                                    </a>
                                </div>
                                <a href="">Carrito</a>
                            </div>
                            <div class="MiCuenta col-4">
                                <div class="iconos">
                                    <a href="#">
                                        <img class="iconCue" src="http://woowcolombia.test/wp-content/uploads/2021/06/cuenta.svg"
                                            alt="Cuenta">
                                    </a>
                                </div>
                                <a href="">Mi Cuenta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .site-branding -->
        </header><!-- #masthead -->
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
                        <nav id="site-navigation" class="nav2 navbar navbar-expand-lg navbar-dark main-navigation">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarTogglerWOOW" aria-controls="navbarTogglerWOOW"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'menu-principal',
                                        'menu_id'        => 'primary-menu',
                                    )
                                );
                            ?>
                        </nav><!-- navigation -->
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
        <?php
			else :
				?>
        <header>
            <div class="container-sm">
                <div class="row">
                    <div class="col-sm-8">
                        <p class="brand" href="#"><b>&nbsp;Todo lo que tu mascota necesita en un solo lugar</b></p>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="Lupa col-4">
                                <div class="iconos">
                                    <a href="#">
                                        <img class="lupa" src="http://woowcolombia.test/wp-content/uploads/2021/06/lupa.svg" alt="Buscar">
                                    </a>
                                </div>
                            </div>
                            <div class="Carrito col-4">
                                <div class="iconos">
                                    <a href="#">
                                        <img class="iconCar" src="http://woowcolombia.test/wp-content/uploads/2021/06/carrito.svg"
                                            alt="Carrito">
                                    </a>
                                </div>
                                <a href="http://woowcolombia.test/carrito/">Carrito</a>
                            </div>
                            <div class="MiCuenta col-4">
                                <div class="iconos">
                                    <a href="#">
                                        <img class="iconCue" src="http://woowcolombia.test/wp-content/uploads/2021/06/cuenta.svg"
                                            alt="Cuenta">
                                    </a>
                                </div>
                                <a href="">Mi Cuenta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .site-branding -->
        </header><!-- #masthead -->
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
                        <nav id="site-navigation" class="nav2 navbar navbar-expand-lg navbar-dark main-navigation">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarTogglerWOOW" aria-controls="navbarTogglerWOOW"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'menu-principal',
                                        'menu_id'        => 'primary-menu',
                                    )
                                );
                            ?>
                        </nav><!-- navigation -->
                    </div>
                        </div><!-- navbar-default -->
                    </div>
                </div>
            </div>
        </section>
        <?php
		endif; ?>