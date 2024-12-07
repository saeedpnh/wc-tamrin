<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require_once get_template_directory() . '/inc/customize.php';

function fancy_lab_scripts(){
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/inc/jquery.min.js', array(), '3.7.1', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.bundle.min.js', array(), '5.3.3', true );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '5.3.3' );
    wp_enqueue_style( 'fancy-lab_style', get_stylesheet_uri(), array(), '1.0', 'all');
    // Google Fonts
    // wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap' );
    
    // flexslider javascript and css files
    wp_enqueue_script( 'flexslider-min-js', get_template_directory_uri().'/inc/flexslider/jquery.flexslider-min.js', array('jquery'),'', true );
    wp_enqueue_style( 'flexslider-css', get_template_directory_uri().'/inc/flexslider/flexslider.css', array(), '', 'all' );
    wp_enqueue_script( 'flexslider-js', get_template_directory_uri().'/inc/flexslider/flexslider.js', array(),'', true );


}
add_action( 'wp_enqueue_scripts', 'fancy_lab_scripts' );

function fancy_lab_config(){
    register_nav_menus( 
        array(
            'fancy_lab_main_menu'   =>  'Fancy Lab Main Menu',
        )
    );

    // add_theme_support( 'woocommerce', array(
    //     'thumbnail_image_width'     => 255,
    //     'single_image_width'        => 255,
    //     'product_grid'              => array(
    //         'default_rows'       =>  10,
    //         'min_rows'           =>  5,
    //         'max_rows'           =>  10,
    //         'default_columns'    =>  5,
    //         'min_columns'        =>  5,
    //         'max_columns'        =>  5
    //         )
    //     )
    // );

    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    add_theme_support( 'custom-logo', array(
        'height'        =>  150,
        'width'         =>  150,
        'flex_height'   =>  true,
        'flex_width'    =>  true
    ) );
    
    add_theme_support( 'post_thumbnails' );
    add_image_size( 'fancy-lab-slider', 1920, 800, array('center','center') );
    add_image_size( 'fancy-lab-blog', 960, 800, array('center','center') );

    if(! isset($content_width)){
        $content_width = 600;
    }

}
add_action( 'after_setup_theme', 'fancy_lab_config', 0 );

if(class_exists('WooCommerce')){
    require get_template_directory() . '/inc/wc-modifications.php';
}

// Use in conjunction with https://gist.github.com/woogists/c0a86397015b88f4ca722782a724ff6c

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'fancy_lab_woocommerce_header_add_to_cart_fragment' );

function fancy_lab_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}