<?php

    $telefono = "+".verificar_datos_contacto(get_theme_mod('campo_texto'),99999999);
    $mail = verificar_datos_contacto(get_theme_mod('campo_numero'),'mailito@mail.com');


?>

<div class="tel">
    <div class="tel-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $carpet_contacto;?>/tel.svg" alt="teléfono ícono">
   </div>
    <a href="tel:<?php echo $telefono; ?>" class="inherit tel-text"><span itemprop = "telephone" > <?php echo $telefono; ?></span></a>
 </div>
<div class="mail">
    <div class="mail-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $carpet_contacto;?>/mail.svg" alt="mail ícono">
    </div>
    <a href="mailto:<?php echo $mail;?>" class="inherit mail-text"><span itemprop="email"><?php echo $mail; ?></span></a>
</div>