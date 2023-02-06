<?php
/**
 * Plugin Name:         calcvue
 * Plugin URI:          https://dhosting.pl
 * Description:         kalkulator dla firmy garazowej
 * Version:             1.0.0
 * Author:              Jaroslaw Matusiak
 * Author URI:          http://jaroslawmatusiak.pl/
 * 
 * Pamiętaj, aby zmienić nazwę folderu, w którym znajduje się ten plik, i tego pliku, tak aby odpowiadała nazwie Twojej wtyczki. Nazwy muszą być takie same, aby WordPress wiedział, gdzie szukać.
 */


 function load_vuescripts() {
    wp_enqueue_style( 'vue_wp_styles', plugin_dir_url( __FILE__ ) . 'dist/assets/index.css' ); 
    wp_register_script( 'vue_wp_compiled', plugin_dir_url( __FILE__ ) . 'dist/assets/index.js', true );
    wp_register_script( 'vue_wp_media', plugin_dir_url( __FILE__ ) . 'dist/assets/[name].[ext]', true );
} 


 
add_action( 'wp_enqueue_scripts', 'load_vuescripts' );
 
function attach_vue() {
    wp_enqueue_script( 'vue_wp_compiled' );
    wp_enqueue_script( 'vue_wp_media' );
 
    return "<div id='apps'></div>";
}
 
add_shortcode( 'test', 'attach_vue' );


?>