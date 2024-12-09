<?php
function fancy_lab_customizer( $wp_customize ){
    $wp_customize->add_section(
        'sec_copyright', array(
            'title'         =>  __('Copyright Settings','fancy-lab'),
            'description'   =>  __('Copyright Section','fancy-lab')
            )
    );
    // Field 1 - Copyright Text Box
    $wp_customize->add_setting(
        'set_copyright', array(
            'type'              =>  'theme_mod',
            'default'           =>  '',
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright', array(
            'label'         =>  __('Copyright','fancy-lab'),
            'description'   =>  __('please add your copyright information','fancy-lab'),
            'section'       =>  'sec_copyright',
            'type'          =>  'text'
        )
    );
    // ------------------------------------------------------------------
    
    // Slider Section
    $wp_customize->add_section(
        'sec_slider', array(
            'title'         =>  __('Slider Settings','fancy-lab'),
            'description'   =>  __('Slider Section','fancy-lab'),
            )
    );
    // Field 1 - Slider page number 1
    $wp_customize->add_setting(
        'set_slider_page1', array(
            'type'              =>  'theme_mod',
            'default'           =>  '',
            'sanitize_callback' =>  'absint'
        )
    );
    $wp_customize->add_control(
        'set_slider_page1', array(
            'label'         =>  'Set Slider page 1',
            'description'   =>  'description for Set Slider page 1',
            'section'       =>  'sec_slider',
            'type'          =>  'dropdown-pages'
        )
    );
    // Field 2 - Slider button text number 1
    $wp_customize->add_setting(
        'set_slider_button_text1', array(
            'type'              =>  'theme_mod',
            'default'           =>  '',
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_slider_button_text1', array(
            'label'         =>  'Button Text for page 1',
            'description'   =>  'description for Button Text for page 1',
            'section'       =>  'sec_slider',
            'type'          =>  'text'
        )
    );
    // Field 3 - Slider button URL number 1
    $wp_customize->add_setting(
        'set_slider_button_url1', array(
            'type'              =>  'theme_mod',
            'default'           =>  '',
            'sanitize_callback' =>  'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        'set_slider_button_url1', array(
            'label'         =>  'url Text for page 1',
            'description'   =>  'description for url Text for page 1',
            'section'       =>  'sec_slider',
            'type'          =>  'url'
        )
    );
}

add_action( 'customize_register', 'fancy_lab_customizer' );