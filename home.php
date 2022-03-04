<?php get_header(); ?>
<div itemscope itemtype = "https://schema.org/AutoDealer" >  
        <!--MAIN-->
        <main>

            <?php 
                $carpet = 'catalogo';
                include 'hero.php'; 
            ?>

            <!-- INICIO FILTRO DE CATEGORÍAS -->
                <!-- FILTRO -->
                
                    <input type="radio" name="categorias" id="todo" value="todos">
                    <input type="radio" name="categorias" id="tipo-1" value="tipo-1">
                    <input type="radio" name="categorias" id="tipo-2" value="tipo-2">
                    <input type="radio" name="categorias" id="tipo-3" value="tipo-3">
                    <input type="radio" name="categorias" id="tipo-4" value="tipo-4">                 
                

                <div class="container-category open-sans azul text-center">
                    <label for="todo">TODO</label>
                    <label for="tipo-1">TIPO 1</label>
                    <label for="tipo-2">TIPO 2</label>
                    <label for="tipo-3">TIPO 3</label>
                    <label for="tipo-4">TIPO 4</label>
                </div>

                <!-- PRODUCTOS -->
                <div class="grid-productos">
                <?php   while ( have_posts() ) : the_post(); ?>
                    <!-- INICIO CARD -->
                    <article class="producto-card b-azul blanco" data-category="tipo-1">
                    <div itemscope itemtype = "https://schema.org/Product" >  

                        <figure class="m-0 contenedor-img">
                            <!-- <img src="<?php echo get_template_directory_uri() ;?>/img/catalogo/tipo-1.jpg" alt="" itemprop = "image"> -->
                            <?php if(has_post_thumbnail()){
                                the_post_thumbnail('medium');
                            } ?>
                        </figure>

                        <h2 class="open-sans p5"><span itemprop = "name" ><?php the_title(); ?></span></h2>

                        <p class="card-precio roboto p5">Cargando precio...</p>

                        <div class="descripcion-corta roboto p5">
                     
                            <?php the_excerpt(); ?>
                            
                            <span style="display:none;">
                                <?php the_content(); ?>
                                <span class="descripcion-categoria">
                                    <?php the_category("-"); ?>
                                </span>
                            </span>
                        </div>

                        <div class="boton-card">
                            <p class="text-center azul m-0 open-sans b-blanco"><a href="<?php the_permalink(); ?>" class="inherit">Ver más</a></p>
                        </div>

                    </div>
                    </article>
                    <!-- FIN CARD -->

                <?php endwhile; // End of the loop. ?>


                </div>
            <!-- FIN FILTRO DE CATEGORÍAS -->

        </main>
        <!--FIN MAIN-->    
    </div>
<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri();?>/js/home/article.js"></script>