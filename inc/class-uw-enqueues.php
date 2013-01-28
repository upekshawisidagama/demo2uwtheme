<?php

class UW_Enqueues{
    
    function __construct(){
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
    }
    
    function enqueue_scripts(){
        wp_enqueue_style( 'uwtheme-style', 
                get_template_directory_uri() . '/stylesheets/app.css');       

        wp_dequeue_script('jquery');
        
        wp_enqueue_script( 'jquery-script', 
                get_template_directory_uri() . '/javascripts/jquery.js',
                array(),
                '1.0',
                true);             
        
        wp_enqueue_script( 'uwtheme-script', 
                get_template_directory_uri() . '/javascripts/foundation/uwtheme.js',
                array('jquery-script'),
                '1.0',
                true);      
        wp_enqueue_script( 'uwtheme-app-script', 
                get_template_directory_uri() . '/javascripts/app.js',
                array('uwtheme-script'),
                '1.0',
                true);         
    }      
}
?>