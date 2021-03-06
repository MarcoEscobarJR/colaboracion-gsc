<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package auto-fuentes
 */

get_header();
?>

	  <!--MAIN-->
        <main>

            <?php 
                $carpet = 'index';
                include 'hero.php'; 
            ?>

            <!--INICIO OFERTAS-->
            <section class="destacados">

                <h2 class="open-sans azul">Ofertas Limitadas</h2>

                    <!--INICIO GRID PRODUCTOS-->

                   <?php 
                        while(have_posts()){
                            the_post();
                            the_content();
                        }
                   ?>

                    <!--FIN GRID PRODUCTOS-->

                <div class="boton-catalogo open-sans azul b-blanco text-center">
                    <a href="<?php bloginfo('url')?>/catalogo" class="inherit">Ver Catálogo Completo</a>
                </div>

            </section>
            <!-- FIN OFERTAS -->

            <!--INICIO SOBRE NOSOTROS-->
            <section id="sob-nos">
                <div class="sob-nos-text">
                    <div class="sob-nos-opacidad">
                        <h2 class="open-sans">Quiénes Somos</h2>
                        <p class="roboto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt tempora sapiente explicabo perferendis? Tenetur odio a repellendus itaque praesentium, nobis, provident odit delectus fugiat et illum illo! Quaerat, accusantium atque.</p>
                        <p class="roboto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p class="roboto">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>

                <div class="sob-nos-img no-display-mini"></div>

                <div class="sob-nos-video">
                    <iframe loading="lazy" src="https://www.youtube.com/embed/BUEGtR8ET6w" title="Título del video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </section>
            <!-- FIN SOBRE NOSOTROS-->

            <!--INICIO SECCIÓN DE CONTÁCTO-->
            <section id="contacto">
                <h2 class="open-sans azul">Contáctanos</h2>

                <!-- INICIO CONTENEDOR GRID -->
                <div class="grid-contacto roboto">

                        <!-- CARD 1 -->
                        <div class="card-contacto b-azul" itemscope itemtype = "https://schema.org/LocalBusiness" >
                            <!-- INICIO GRID TEXTO -->
                            <div class="grid-contact-text blanco roboto">
                                <?php  
                                    $carpet_contacto = 'index'; 
                                    require 'dato-contacto.php'; 
                                ?>
                                <div class="ubicacion" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                                    <div class="ubicacion-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/index/ubicacion.svg" alt="ubicacion ícono">
                                    </div>
                                    <span itemprop="streetAddress">Calle y número</span>,
                                    <span itemprop="addressLocality">Localidad</span>,
                                    <span itemprop="addressRegion">Región</span>.
                                </div>
                            </div>
                            <!-- FIN GRID TEXTO -->

                            <!-- INICIO MAPA -->
                            <div class="grid-contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3000.292765527695!2d-74.41898518494675!3d41.2371802792782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3203b15a71bd3%3A0xcaa51d5e9216183a!2sKingdom%20Hall%20of%20Jehovah&#39;s%20Witnesses!5e0!3m2!1ses!2scl!4v1645488689897!5m2!1ses!2scl" allowfullscreen="" loading="lazy"></iframe>
                            </div>       
                            <!-- FIN MAPA-->

                        </div>

                        <!-- CARD 2 -->
                        <div class="card-contacto b-azul" itemscope itemtype = "https://schema.org/LocalBusiness" >
                            <!-- INICIO GRID TEXTO -->
                            <div class="grid-contact-text blanco roboto">
                                <?php require 'dato-contacto.php';?>
                                <div class="ubicacion" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                                    <div class="ubicacion-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/index/ubicacion.svg" alt="ubicacion ícono">
                                    </div>
                                    <span itemprop="streetAddress">Calle y número</span>,
                                    <span itemprop="addressLocality">Localidad</span>,
                                    <span itemprop="addressRegion">Región</span>.
                                </div>
                            </div>
                            <!-- FIN GRID TEXTO -->

                            <!-- INICIO MAPA -->
                            <div class="grid-contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3000.292765527695!2d-74.41898518494675!3d41.2371802792782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3203b15a71bd3%3A0xcaa51d5e9216183a!2sKingdom%20Hall%20of%20Jehovah&#39;s%20Witnesses!5e0!3m2!1ses!2scl!4v1645488689897!5m2!1ses!2scl" allowfullscreen="" loading="lazy"></iframe>
                            </div>       
                            <!-- FIN MAPA-->

                        </div>
                </div>
                <!-- FIN CONTENEDOR GRID -->

            </section>
            <!--INICIO SECCIÓN DE CONTÁCTO-->


        </main>
        <!--FIN MAIN-->

<?php
get_footer();
