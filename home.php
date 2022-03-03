<?php get_header(); ?>
<div itemscope itemtype = "https://schema.org/AutoDealer" >  
        <!--MAIN-->
        <main>

            <!--INICIO SLIDER -->
            <section class="slider-auto">
                <ul class="ul-slider">
                    <li><img src="<?php echo get_template_directory_uri() ;?>/img/catalogo/slider.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri() ;?>/img/catalogo/slider2.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri() ;?>/img/catalogo/slider3.jpg" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri() ;?>/img/catalogo/slider4.jpg" alt=""></li>
                </ul>
            </section>
            <!-- FIN SLIDER -->

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

                    <!-- INICIO CARD -->
                    <article class="producto-card b-azul blanco" data-category="tipo-1">
                    <div itemscope itemtype = "https://schema.org/Product" >  

                        <figure class="m-0 contenedor-img">
                            <img src="<?php echo get_template_directory_uri() ;?>/img/catalogo/tipo-1.jpg" alt="" itemprop = "image">
                        </figure>

                        <h2 class="open-sans p5"><span itemprop = "name" >Nombre del producto</span></h2>

                        <p class="card-precio roboto p5">Precio</p>

                        <p class="descripcion-corta roboto p5">
                            <span itemprop="description">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, dicta repudiandae. Voluptatum tenetur neque sunt quos libero quod numquam consequatur aut, asperiores dolorum cum eaque accusamus harum? Magni, dicta assumenda.
                            </span>
                        </p>

                        <div class="boton-card">
                            <p class="text-center azul m-0 open-sans b-blanco"><a src="<?php echo get_template_directory_uri() ;?>/item.html" class="inherit">Ver más</a></p>
                        </div>

                    </div>
                    </article>
                    <!-- FIN CARD -->

                    <!-- INICIO CARD -->
                    <article class="producto-card b-azul blanco" data-category="tipo-2">
                        <div itemscope itemtype = "https://schema.org/Product" >  
    
                            <figure class="m-0 contenedor-img">
                                <img src="<?php echo get_template_directory_uri() ;?>/img/catalogo/tipo-2.jpg" alt="" itemprop = "image">
                            </figure>
    
                            <h2 class="open-sans p5"><span itemprop = "name" >Nombre del producto</span></h2>
    
                            <p class="card-precio roboto p5">Precio</p>
    
                            <p class="descripcion-corta roboto p5">
                                <span itemprop="description">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, dicta repudiandae. Voluptatum tenetur neque sunt quos libero quod numquam consequatur aut, asperiores dolorum cum eaque accusamus harum? Magni, dicta assumenda.
                                </span>
                            </p>
    
                            <div class="boton-card">
                                <p class="text-center azul m-0 open-sans b-blanco"><a src="<?php echo get_template_directory_uri() ;?>/item.html" class="inherit">Ver más</a></p>
                            </div>
    
                        </div>
                    </article>
                    <!-- FIN CARD -->

                    <!-- INICIO CARD -->
                    <article class="producto-card b-azul blanco" data-category="tipo-3">
                        <div itemscope itemtype = "https://schema.org/Product" >  
    
                            <figure class="m-0 contenedor-img">
                                <img src="<?php echo get_template_directory_uri() ;?>/img/catalogo/tipo-3.jpg" alt="" itemprop = "image">
                            </figure>
    
                            <h2 class="open-sans p5"><span itemprop = "name" >Nombre del producto</span></h2>
    
                            <p class="card-precio roboto p5">Precio</p>
    
                            <p class="descripcion-corta roboto p5">
                                <span itemprop="description">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, dicta repudiandae. Voluptatum tenetur neque sunt quos libero quod numquam consequatur aut, asperiores dolorum cum eaque accusamus harum? Magni, dicta assumenda.
                                </span>
                            </p>
    
                            <div class="boton-card">
                                <p class="text-center azul m-0 open-sans b-blanco"><a src="<?php echo get_template_directory_uri() ;?>/item.html" class="inherit">Ver más</a></p>
                            </div>
    
                        </div>
                    </article>
                    <!-- FIN CARD -->

                    <!-- INICIO CARD -->
                    <article class="producto-card b-azul blanco" data-category="tipo-4">
                        <div itemscope itemtype = "https://schema.org/Product" >  
    
                            <figure class="m-0 contenedor-img">
                                <img src="<?php echo get_template_directory_uri() ;?>/img/catalogo/tipo-4.jpg" alt="" itemprop = "image">
                            </figure>
    
                            <h2 class="open-sans p5"><span itemprop = "name" >Nombre del producto</span></h2>
    
                            <p class="card-precio roboto p5">Precio</p>
    
                            <p class="descripcion-corta roboto p5">
                                <span itemprop="description">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, dicta repudiandae. Voluptatum tenetur neque sunt quos libero quod numquam consequatur aut, asperiores dolorum cum eaque accusamus harum? Magni, dicta assumenda.
                                </span>
                            </p>
    
                            <div class="boton-card">
                                <p class="text-center azul m-0 open-sans b-blanco"><a src="<?php echo get_template_directory_uri() ;?>/item.html" class="inherit">Ver más</a></p>
                            </div>
    
                        </div>
                    </article>
                    <!-- FIN CARD -->


                </div>
            <!-- FIN FILTRO DE CATEGORÍAS -->

        </main>
        <!--FIN MAIN-->    
    </div>
<?php get_footer(); ?>