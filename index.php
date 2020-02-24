<?php
/*
  Plugin Name: mes shortcodes
  Description: Plugin fournissant des shortcodes
  Author: sacha
  Version: 1.0.0
 */

 function shortcode_bienvenue(){
     return "<h2>Bienvenue chez blogBreakers !!!! </h2>";
 }

 add_shortcode('bienvenue', 'shortcode_bienvenue');