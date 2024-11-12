<?php

class E_Com 
{
    public function __construct()
    {
        add_action( 'after_setup_theme', [$this, 'theme_supports'] );
        add_action( 'wp_enqueue_scripts', [$this, 'enqueue_scripts'] );
        
    }

    public function theme_supports()
    {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'woocommerce' );

        load_theme_textdomain( 'ecop', get_template_directory().'/lang' );
    }

    public function enqueue_scripts()
    {
        //Style Sheets
        wp_enqueue_style( 'bootstrap',    get_template_directory_uri().'/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'boxicons',     get_template_directory_uri().'/assets/css/boxicons.min.css' );
        wp_enqueue_style( 'layers',       get_template_directory_uri().'/assets/css/layers.css' );
        wp_enqueue_style( 'meanmenu',     get_template_directory_uri().'/assets/css/meanmenu.css' );
        wp_enqueue_style( 'movdal-video', get_template_directory_uri().'/assets/css/modal-video.min.css' );
        wp_enqueue_style( 'navigation',   get_template_directory_uri().'/assets/css/navigation.css' );
        wp_enqueue_style( 'nice-select',  get_template_directory_uri().'/assets/css/nice-select.min.css' );
        wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css' );
        wp_enqueue_style( 'owl-default',  get_template_directory_uri().'/assets/css/owl.theme.default.min.css' );
        wp_enqueue_style( 'responsive',   get_template_directory_uri().'/assets/css/responsive.css' );
        wp_enqueue_style( 'settings',     get_template_directory_uri().'/assets/css/settings.css' );
        wp_enqueue_style( 'main',         get_template_directory_uri().'/assets/css/core.min.css' );
        wp_enqueue_style( 'style',        get_template_directory_uri().'/style.css');

        //Javascripts
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'bootstrap',               get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', ['jquery'], '', true );
        wp_enqueue_script( 'contact',                 get_template_directory_uri().'/assets/js/contact-form-script.js', ['jquery'], '', true );
        wp_enqueue_script( 'form-validator',          get_template_directory_uri().'/assets/js/form-validator.min.js', ['jquery'], '', true );
        wp_enqueue_script( 'jq-modal-video',          get_template_directory_uri().'/assets/js/jquery-modal-video.min.js', ['jquery'], '', true );
        wp_enqueue_script( 'jq-ajaxchimp',            get_template_directory_uri().'/assets/js/jquery.ajaxchimp.min.js', ['jquery'], '', true );
        wp_enqueue_script( 'jq-meanmenu',             get_template_directory_uri().'/assets/js/jquery.meanmenu.js', ['jquery'], '', true );
        wp_enqueue_script( 'jq-mixitup',              get_template_directory_uri().'/assets/js/jquery.mixitup.min.js' );
        wp_enqueue_script( 'jq-nice-select',          get_template_directory_uri().'/assets/js/jquery.nice-select.min.js', ['jquery'], '', true );
        wp_enqueue_script( 'jq-themepuch-revolution', get_template_directory_uri().'/assets/js/jquery.themepunch.revolution.min.js', ['jquery'], '', true );
        wp_enqueue_script( 'jq-themepuch-tools',      get_template_directory_uri().'/assets/js/jquery.themepunch.tools.min.js', ['jquery'], '', true );
        wp_enqueue_script( 'owl-carousel',            get_template_directory_uri().'/assets/js/owl.carousel.min.js', ['jquery'], '', true );
        wp_enqueue_script( 'thumb-slide',             get_template_directory_uri().'/assets/js/thumb-slide.js', ['jquery'], '', true );
        wp_enqueue_script( 'custom',                  get_template_directory_uri().'/assets/js/custom.js', ['jquery'], '', true );
    }

}

new E_Com;