<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <? wp_body_open();?> 

    <div class="navigation">
        
        <div class="navigation__logo-box">
            <a href="<?php echo esc_html(home_url( '/' )); ?>">
                <img class= "navigation__logo-img" 
                src="/wp-content/uploads/2022/11/Untitled-design-11.jpg"></a>
        </div>
                  
        <div class="navigation__nav">
            <?php wp_nav_menu(array('theme_location' => 'playtheme_main_menu', 'depth'=> 2)); ?>
        </div>
        
    </div>


