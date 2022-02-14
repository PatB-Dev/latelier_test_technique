<?php

function montheme_supports (){
   add_theme_support('menus');
   register_nav_menu('header', 'En tête');
}

add_action('after_setup_theme', 'montheme_supports');
