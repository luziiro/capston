<?php 

require_once( get_template_directory() . '/inc/walkermenu.php');

function register_my_menu() {
  register_nav_menu('navegation',__( 'Menú de navegación' ));
}
add_action( 'init', 'register_my_menu' );

function mis_widgets(){
  register_sidebar(
    array(
      'name'          => __( 'Sidebar' ),
      'id'            => 'sidebar',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
    )
  );

}
add_action('init','mis_widgets');

//style.css
function carga_estilos_theme()
{
  wp_register_style( 'estilos', get_template_directory_uri() . '/css/style.css', array(), '1.9', 'all' );
  wp_enqueue_style( 'estilos' );

}
add_action('wp_print_styles', 'carga_estilos_theme');


add_action( 'wp_enqueue_scripts', 'cyb_theme_scripts' );
function cyb_theme_scripts() {
        wp_enqueue_script(
        'mi-theme-script',
        get_theme_file_uri( 'js/codigo.js' ),
        array( 'jquery', 'bootstrap' ),
        '1.0',
        true // el script se cargará en el footer
    );

}


//fuente

add_action("wp_enqueue_scripts", "dcms_insertar_google_fonts");

function dcms_insertar_google_fonts(){
    $url = "https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Ubuntu:300,400,500,700&display=swap";
    wp_enqueue_style('google_fonts', $url);
 }


