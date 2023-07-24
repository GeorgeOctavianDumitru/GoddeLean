<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Godde Lean</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head();?>
    </head>
    <body>
        <header>
            <div class="menu-wrapper">
                <img src="http://goddelean.test:17325/wp-content/uploads/2023/07/LogoSingle.png"/>
                <?php
                    wp_nav_menu(
                        array(
                            'theme-location'=>'top-menu',
                            'menu_class'=>'top-bar'
                        )
                    );
                    ?>
                <div class="social-container"></div>
            </div>
        </header>
        