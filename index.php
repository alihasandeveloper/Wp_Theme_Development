<?php 
/*
This template for displaying the header
*/
?>


<!DOCTYPE html>
<html lang="<?php language_attributes();?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();    ?>
</head>
<body <?php body_class()?>>
    <header id="header_area">
        <nav class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a href="">
                        <img src="<?php echo get_theme_mod( 'asif-logo');?>" alt="">
                    </a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu( array(
                        'theme_lacation' => 'main_menu',
                        'menu_id' => 'nav',
                    ));?>
                </div>
            </div>
        </nav>
    </header>
    <?php wp_footer();?>
</body>
</html>