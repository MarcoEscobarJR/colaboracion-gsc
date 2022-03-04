<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package auto-fuentes
 */

?>

	<!--INICIO FOOTER-->
        <footer class="b-azul blanco open-sans">

            <nav class="nav-2">

                <ul>
                   <li><a href="<?php bloginfo('url');?>" class="nav-a">Inicio</a></li>
                    <li><a href="<?php bloginfo('url');?>/catalogo" class="nav-a">Catálogo</a></li>
                    <li><a href="<?php bloginfo('url');?>#sob-nos" class="nav-a">Quiénes Somos</a></li>
                    <li><a href="<?php bloginfo('url');?>#contacto" class="nav-a">Contáctanos</a></li>
                </ul>

            </nav>

            <picture class="logo">
                <?php
                    if(has_custom_logo()){
                        the_custom_logo();
                    }else{
                        ?>   <img loading="lazy"  itemprop="logo" src="<?php echo get_template_directory_uri();?>/img/header/logo.svg" alt="Logo de empresa Automotríz fuentes: Click aquí para ir a inicio">  <?php
                    }
                ?>
            </picture>

            <p class="in-ad-footer text-center"><?php bloginfo('title'); ?> &copy; Todos los derechos reservados.</p>

        </footer>
        <!--FIN FOOTER-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
