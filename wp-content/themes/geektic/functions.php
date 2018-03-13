<?php
    // agregar todos los srcipts, plugins al wordpress
    function geektic_scripts(){
      wp_register_style( 'normalize', get_template_directory_uri().'/css/normalize.css', array(), '7.0.0');
      wp_register_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700,900|Raleway:400,700,900', array(), '1.0.0');
      wp_register_style( 'style', get_template_directory_uri().'/style.css', array('normalize'), '1.0.0' );
      wp_register_style( 'fontawesome', get_template_directory_uri().'/css/fontawesome-all.css',array('normalize'), '5.0.6');



      wp_enqueue_style('normalize');
      wp_enqueue_style('google_fonts');
      wp_enqueue_style('style');
      wp_enqueue_style('fontawesome');
    }
    add_action('wp_enqueue_scripts','geektic_scripts');

    //agregar el logo dinamicamente al tema
    function  geektic_custom_logo(){
       $logo= array(
                     'width' =>150,
                     'height'=>45
                   );
      add_theme_support( 'custom-logo', $logo);
     }
      add_action( 'after_setup_theme', 'geektic_custom_logo' );

      //Agregar menus a mi tema


      function geektic_menus(){
  register_nav_menus(array(
    'menu_principal' => __('Menu Principal','geektic'),
    'social_menu' => __('Social Menu', 'geektic')
  ));
}
  add_action('init','geektic_menus');

 ?>
