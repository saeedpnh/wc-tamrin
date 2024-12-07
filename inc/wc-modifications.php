<?php
function fancy_lab_wc_modify(){
    add_action( 'after_setup_theme', 'fancy_lab_config', 0 );
    
    if(is_shop()){
        add_action( 'woocommerce_before_main_content', 'fancy_lab_open_container_row', 5 );
        function fancy_lab_open_container_row(){
            echo '<div class="container shop-content"><div class="row">';
        }
        add_action( 'woocommerce_after_main_content', 'fancy_lab_close_container_row', 5 );
        function fancy_lab_close_container_row(){
            echo '</div></div>';
        }
        add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1 );
    }
    
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );
    // add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );
    
    // Remove Page title

    add_filter( 'woocommerce_show_page_title', 'fancy_lab_remove_shop_title' );
    function fancy_lab_remove_shop_title( $val ){
        $val = false;
        return $val;
    }
   
}
add_action( 'wp', 'fancy_lab_wc_modify' );