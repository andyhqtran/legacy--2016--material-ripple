<?php

/**
* @package Custom_Search_Fields
* @version 0.0.1
*/
/*
* Plugin Name: Custom Search Fields
* Plugin URI: https://elegantthemes.com/
* Description: TODO
* Author: Andy Tran
* Version: 0.0.1
* Author URI: http://andy.design/
* License: GPL3
*/

function add_material_ripple_scripts() {
  wp_enqueue_style( 'material-ripple', plugin_dir_url( __FILE__ ) . 'css/style.css' );
  wp_enqueue_script( 'material-ripple', plugin_dir_url( __FILE__ ) . 'js/scripts.js', array( 'jquery' ), '0.0.1', true );
}
add_action( 'wp_enqueue_scripts', 'add_material_ripple_scripts' );
?>