<?php

class UW_Theme{
    
    protected $enqueues;
    
    protected $widgets;
    
    public $features;
    
    public $menus;    

    function init() {
        
        require 'inc/class-uw-enqueues.php';
        $this->enqueues = new UW_Enqueues();
        
        require 'inc/class-uw-widgets.php';
        $this->enqueues = new UW_Widgets();
        
        require 'inc/class-uw-features.php';
        $this->features = new UW_Features();    
        
        require 'inc/class-uw-menus.php';
        $this->menus = new UW_Menus();         
    }
    
    function __construct() { }
}

$uwtheme = new UW_Theme();

add_action('after_setup_theme', array( $uwtheme, 'init'))
?>
