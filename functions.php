<?php 


 
function bootstrap_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
       
        wp_enqueue_style( 'bootstrap_style', get_bloginfo( 'template_directory' ).'/assets/css/main.css' );
        wp_enqueue_style( 'bootstrap_style', get_bloginfo( 'template_directory' ).'/assets/css/fontawesome-all.min.css' );

        wp_enqueue_script( 'jquery_script', get_bloginfo( 'template_directory' ).'/assets/js/jquery.min.js' );
        wp_enqueue_script( 'bootstrap_script', get_bloginfo( 'template_directory' ).'/assets/js/jquery.scrollex.min.js' );
        wp_enqueue_script( 'jquery_script', get_bloginfo( 'template_directory' ).'/assets/js/jquery.scrolly.min.js' );
        wp_enqueue_script( 'bootstrap_script', get_bloginfo( 'template_directory' ).'/assets/js/browser.min.js' );
        wp_enqueue_script( 'jquery_script', get_bloginfo( 'template_directory' ).'/assets/js/breakpoints.min.js' );
        wp_enqueue_script( 'bootstrap_script', get_bloginfo( 'template_directory' ).'/assets/js/util.js' );
		wp_enqueue_script( 'bootstrap_script', get_bloginfo( 'template_directory' ).'/assets/js/main.js' );
		wp_enqueue_script( 'bootstrap_script', get_bloginfo( 'template_directory' ).'/assets/main.sass' );
}


 
add_action( 'wp_enqueue_scripts', 'bootstrap_theme_assets');




if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'      => false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
                'parent_slug'	=> 'theme-general-settings',
                'redirect'      => false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
                'parent_slug'	=> 'theme-general-settings',
                'redirect'      => false
	));
	
}


function wpb_custom_new_menu() {
	register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );



  function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
   
}


add_action( 'widgets_init', 'my_register_sidebars' );


function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
?>