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
                    <li><a href="<?php echo get_template_directory_uri();?>/index.html" class="nav-a">Inicio</a></li>
                    <li><a href="<?php echo get_template_directory_uri();?>/catalogo.html" class="nav-a">Catálogo</a></li>
                    <li><a href="<?php echo get_template_directory_uri();?>/index.html#sob-nos" class="nav-a">Quiénes Somos</a></li>
                    <li><a href="<?php echo get_template_directory_uri();?>/index.html#contacto" class="nav-a">Contáctanos</a></li>
                </ul>

            </nav>

            <figure class="logo-2">
                <img src="<?php echo get_template_directory_uri();?>/img/footer/logo.svg" alt="Logo">
            </figure>

            <p class="in-ad-footer text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

        </footer>
        <!--FIN FOOTER-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
