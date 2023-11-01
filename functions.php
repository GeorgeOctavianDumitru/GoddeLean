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
        if(is_single()){
            wp_register_style('single-style',get_template_directory_uri().'/css/single.css',
            array(),false,'all');
            wp_enqueue_style('single-style');
        }

        if(is_page_template('template-archive.php')){
            wp_register_style('archive-page-style',get_template_directory_uri().'/css/archive.css',
            array(),false,'all');
            wp_enqueue_style('archive-page-style');
        }
        if (is_page_template('template-contactus.php')) {
            wp_register_style('contact-us-style', get_template_directory_uri().'/css/contactUs.css', array(), false, 'all');
            wp_enqueue_style('contact-us-style');}
        
        if (is_page_template('template-aboutus.php')) {
            wp_register_style('about-us-style', get_template_directory_uri().'/css/aboutUs.css', array(), false, 'all');
            wp_enqueue_style('about-us-style');}
        if (is_page_template('template-services.php')) {
             wp_register_style('services-style',get_template_directory_uri().'/css/services.css',
            array(),false,'all');
            wp_enqueue_style('services-style');
        }    




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
        if(is_single()){
            wp_register_script('single', get_template_directory_uri() . '/js/single.js', 'jqueryLoc',false,true);
            wp_enqueue_script('single');
        }
        if(is_page_template('template-contactus.php')){
            wp_register_script('contactForm',get_template_directory_uri().'/js/ContactForm.js', 'jqueryLoc',false,true);
            wp_enqueue_script('contactForm');
        }
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

function get_first_image_in_post_content() {
    global $post;

    // Get the post content
    $content = $post->post_content;

    // Find the first image in the post content
    preg_match('/<img.+?src=["\'](.+?)["\'].*?>/i', $content, $matches);

    // Return the first image URL if found, or false if not found
    if (isset($matches[1])) {
        return $matches[1];
    } else {
        return false;
    }
}
function theme_setup() {
    // Enable featured image support
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'theme_setup');

function generateBreadcrumbs() {
    $breadcrumbs = array();

    // Add a link to the home page
    $breadcrumbs[] = array(
        'label' => 'Home',
        'url' => home_url('/'),
    );

    // Check if the current page is the Services page
    if (is_page('services')) {
        // Add the current page's title as the final breadcrumb
        $breadcrumbs[] = array(
            'label' => 'Services',
            'url' => get_permalink(),
        );
    }

    // Output the breadcrumbs as HTML
    if (!empty($breadcrumbs)) {
        echo '<div class="breadcrumbs">';
        $count = count($breadcrumbs);
        foreach ($breadcrumbs as $key => $breadcrumb) {
            echo '<a href="' . $breadcrumb['url'] . '">' . $breadcrumb['label'] . '</a>';
            if ($key < $count - 1) {
                echo '<span> > </span>';
            }
        }
        echo '</div>';
    }
}
