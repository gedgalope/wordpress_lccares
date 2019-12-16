<?php
/**
 * Plugin Name: WordPress Vue
 * Description: Vue Frontend Mounting.
 */
//refister Script
function func_load_vuescripts() {
  wp_register_script( 'wpvue_vuejs', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js');
 }
 add_action('wp_enqueue_scripts', 'func_load_vuescripts');

//Add shortscode
function func_wp_vue(){
  return "Hello Shortcode";
 }
 add_shortcode( 'wpvue', 'func_wp_vue' );

 //Add Vue.js
 wp_enqueue_script('wpvue_vuejs');
?>