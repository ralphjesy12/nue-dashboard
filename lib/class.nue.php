<?php if(!defined('ABSPATH')) exit('404 Not Found');

if(!class_exists('Nue')){

    Class Nue{

        function __CONSTRUCT(){
            $this->init();
        }

        function init(){
            add_action('admin_init',[&$this,'styles']);
        }

        function styles(){
            wp_enqueue_style('nue-dash-style-main', NUE_DASH_PLUGIN_URL . 'assets/main.css');
        }

        public function activation(){

        }
        public function deactivation(){

        }
    }

    $Nue = new Nue();
}
