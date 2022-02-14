<?php

function montheme_supports (){
   add_theme_support('menus');
   register_nav_menu('header', 'En tête');
//   register_nav_menus(array(
//       'main'=> 'Accueil',
//   ));
}

add_action('after_setup_theme', 'montheme_supports');
