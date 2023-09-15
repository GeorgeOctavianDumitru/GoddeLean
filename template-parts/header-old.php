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
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,900&display=swap"
      rel="stylesheet"
    />
    <?php wp_head(); ?>
</head>

<body>
    <header class="menu-wrapper">
        <nav class="navbar">
            <div class="logo">
                <img src="/wp-content/uploads/2023/07/LogoSingle.png" />
                <a id=companyName href="#">Godde Lean</a>
            </div>
            <?php
            wp_nav_menu(
                array(
                    'theme-location' => 'top-menu',
                    'menu_class' => 'top-bar'
                )
            );
            ?>
            <div class="burger-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </nav>
    </header>