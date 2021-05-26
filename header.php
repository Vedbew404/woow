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
	<link rel="apple-touch-icon" sizes="57x57" href="./wp-content/plugins/um_vdbw404/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./wp-content/plugins/um_vdbw404/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./wp-content/plugins/um_vdbw404/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./wp-content/plugins/um_vdbw404/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./wp-content/plugins/um_vdbw404/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./wp-content/plugins/um_vdbw404/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./wp-content/plugins/um_vdbw404/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./wp-content/plugins/um_vdbw404/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./wp-content/plugins/um_vdbw404/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./wp-content/plugins/um_vdbw404/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./wp-content/plugins/um_vdbw404/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./wp-content/plugins/um_vdbw404/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./wp-content/plugins/um_vdbw404/img/favicon-16x16.png">
	<title>WOOW | Bienvenidos
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">	 -->
	<link rel="stylesheet" href="./wp-content/themes/woow/css/style.css">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'woow' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$woow_description = get_bloginfo( 'description', 'display' );
			if ( $woow_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $woow_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'woow' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
