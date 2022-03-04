<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package auto-fuentes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'auto-fuentes' ); ?></a>
	 <!--INICIO HEADER-->
        <header class="open-sans">

            <!--LOGO-->
            <div class="logo">
                <a href="<?php echo get_template_directory_uri();?>/index.html">
                    <picture class="logo">
                        <img loading="lazy"  itemprop="logo" src="<?php echo get_template_directory_uri();?>/img/header/logo.svg" alt="Logo de empresa Automotríz fuentes: Click aquí para ir a inicio">
                    </picture>
                </a>
            </div>

            <!--NAV-->
            <nav id="nav-1" class="no-display-medium no-display-mini">

                <ul>
                    <li><a href="<?php bloginfo('url');?>" class="nav-a">Inicio</a></li>
                    <li><a href="<?php bloginfo('url');?>/catalogo" class="nav-a">Catálogo</a></li>
                    <li><a href="<?php bloginfo('url');?>#sob-nos" class="nav-a">Quiénes Somos</a></li>
                    <li><a href="<?php bloginfo('url');?>#contacto" class="nav-a">Contáctanos</a></li>
                    <li class="no-display-great li-cerrar">Cerrar Menú</li>
                </ul>

            </nav>

            <!--BOTÓN MENÚ-->
            <picture class="no-display-great picture-menu img-menu">
                    <img src="<?php echo get_template_directory_uri();?>/img/header/menu.svg" alt="Abrir menú" loading="lazy">
            </picture>

        </header>
        <!--FIN HEADER-->
