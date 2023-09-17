<?php
    //Load Styleshets
    function load_css()
    {
        wp_register_style('bootstrap',get_template_directory_uri().'/css/BootStrap/bootstrap.min.css',
        array(),false,'all');
        wp_enqueue_style('bootstrap');
        wp_register_style('custom-style',get_template_directory_uri().'/css/custom-style.css',
        array(),false,'all');
        wp_enqueue_style('custom-style');
        wp_register_style('header-style',get_template_directory_uri().'/css/header-style.css',
        array(),false,'all');
        wp_enqueue_style('header-style');
        wp_register_style('footer-style',get_template_directory_uri().'/css/footer-style.css',
        array(),false,'all');
        wp_enqueue_style('footer-style');
        if(is_front_page()){
            wp_register_style('front-page-style',get_template_directory_uri().'/css/front-page-style.css',
            array(),false,'all');
            wp_enqueue_style('front-page-style');
        }

        if (is_page_template('template-contactus.php')) {
            wp_register_style('contact-us-style', get_template_directory_uri().'/css/contactUs.css', array(), false, 'all');
            wp_enqueue_style('contact-us-style');}




    }
    add_action('wp_enqueue_scripts','load_css');

    
    //Load javascript
    function load_js()
    {
        // enqueue jQuery
        wp_register_script('jqueryLoc', get_template_directory_uri() . '/js/jquery-3.6.4.js', array(),false,true);
        wp_enqueue_script('jqueryLoc');
        //enqueue Bootstrap js
        wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jqueryLoc',false,true);
        wp_enqueue_script('bootstrap');
        //enqueue Theme Javascript Files
        wp_register_script('app', get_template_directory_uri() . '/js/app.js', 'jqueryLoc',false,true);
        wp_enqueue_script('app');
    }
    add_action('wp_enqueue_scripts','load_js');

    //Theme Options
    add_theme_support('menus');

    //Menus
    // register_nav_menus(
    //     array(
    //         'top-menu' =>'Top Menu Location',
    //         'mobile-menu' =>'Mobile Menu Location',  
    //     )
    // );
    // register_nav_menus(
    //     array(
    //         'footer-support-menu'=>'Footer Support Location',
    //         'footer-company-menu'=>'Footer Company Location',   
    //     )
    // );
    

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Top Menu Location' ),
      'mobile-menu' => __( 'Mobile Menu Location' ),
      'footer-support-menu' => __( 'Footer Support Location' ),
      'footer-company-menu' => __( 'Footer Company Location' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );