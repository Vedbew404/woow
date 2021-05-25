<?php
/**
* El archivo de plantilla principal
 *
 * Este es el archivo de plantilla más genérico en un tema de WordPress
 * y uno de los dos archivos necesarios para un tema (el otro es style.css).
 * Se utiliza para mostrar una página cuando nada más específico coincide con una consulta.
 * Por ejemplo, reúne la página de inicio cuando no existe un archivo home.php.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package woow
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Iniciar el bucle */
			while ( have_posts() ) :
				the_post();

				/*
				*Incluya la plantilla específica del tipo de publicación para el contenido.
				*Si desea anular esto en un tema hijo, incluya un archivo
				*llamado contenido -___. php (donde ___ es el nombre del tipo de publicación) y se usará en su lugar.
				*/
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
