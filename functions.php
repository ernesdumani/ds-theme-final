<?php
<<<<<<< HEAD
function ds_theme_load_scripts (): void{
    wp_enqueue_style( 'dstheme-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );
=======

function ds_theme_load_scripts (){
    wp_enqueue_style( 'dstheme-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' ); 
    wp_enqueue_style('google-fonts', ' https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null); 
    wp_enqueue_script('dropdown', get_template_directory_uri().'js/dropdown.js', array(), '1.0', true);
>>>>>>> e64e17dd496c32832795032fd220e3da081e2b38
}

add_action('wp_enqueue_scripts', 'ds_theme_load_scripts');

register_nav_menus(
    array(
<<<<<<< HEAD
        'ds_theme_main_menu' => "Main Menu", 
        'ds_theme_footer_menu' => "footer Menu"
    )
    );



=======
        'wp_devs_main_menu' => 'Main Menu',
        'wp_devs_footer_menu' => 'Footer Menu'
    )
    );

>>>>>>> e64e17dd496c32832795032fd220e3da081e2b38
?>