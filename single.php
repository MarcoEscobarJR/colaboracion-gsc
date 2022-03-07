<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package auto-fuentes
 */

get_header();
?>
	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) : the_post(); ?>
			<picture class="single-image">
				<?php
				if(has_post_thumbnail()){
					the_post_thumbnail();
				}else{
					$url = get_template_directory_uri()."/img/item/slider.jpg";
					echo "<img src='$url'>";
				}
				?>
			</picture>
			<section class="texto-articulo azul">	
                <div itemscope itemtype = "https://schema.org/Product" > 
                    <h2 class="open-sans"><span itemprop = "name" ><?php the_title(); ?></span></h2>

                    <p class="open-sans">Precio</p>
					<?php the_content(); ?>
                </div>

                <?php
					$carpet_contacto = 'item'; 
					require_once "dato-contacto.php"; 
				?>

            </section>
			<section class="texto-articulo">
				<?php
					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'auto-fuentes' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'auto-fuentes' ) . '</span> <span class="nav-title">%title</span>',
						)
					);
				?>
			</section>
		<?php 
			endwhile; // End of the loop. ?>

	</main><!-- #main -->

<?php
get_footer();
