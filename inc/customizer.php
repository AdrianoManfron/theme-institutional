<?php

function template_default_customizer( $wp_customize ){
    // 1 Top Bar
    $wp_customize->add_section(
        'sec_top_bar',
        array(
            'title' =>  esc_html__('Top Bar Settings', 'template-default'),
            'description'   =>  esc_html__('Add content top bar here', 'template-default')
        )
    );
    // Adress
    $wp_customize->add_setting(
        'set_top_bar_address',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Address Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_top_bar_address',
        array(
            'label' =>  esc_html__('Address', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your address here', 'template-default'),
            'section'   =>  'sec_top_bar',
            'type'  =>  'text'
        )
    );
    // Operation
    $wp_customize->add_setting(
        'set_top_bar_operation',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Operation Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_top_bar_operation',
        array(
            'label' =>  esc_html__('Operation', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your operation here', 'template-default'),
            'section'   =>  'sec_top_bar',
            'type'  =>  'text'
        )
    );
    // Phone
    $wp_customize->add_setting(
        'set_top_bar_phone',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Phone Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_top_bar_phone',
        array(
            'label' =>  esc_html__('Phone', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your phone here', 'template-default'),
            'section'   =>  'sec_top_bar',
            'type'  =>  'text'
        )
    );

    // 2 Hero
    $wp_customize->add_section(
        'sec_hero',
        array(
            'title' =>  esc_html__('Banner Settings', 'template-default'),
            'description'   =>  esc_html__('Add content your banner here', 'template-default')
        )
    );

    // Title
    $wp_customize->add_setting(
        'set_hero_title',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Banner','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_hero_title',
        array(
            'label' =>  esc_html__('Banner Title', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your banner title here', 'template-default'),
            'section'   =>  'sec_hero',
            'type'  =>  'text'
        )
    );

    // Subtitle
    $wp_customize->add_setting(
        'set_hero_subtitle',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text banner subtitle','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_hero_subtitle',
        array(
            'label' =>  esc_html__('Banner subtitle Area', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text banner subtitle here', 'template-default'),
            'section'   =>  'sec_hero',
            'type'  =>  'textarea'
        )
    );

    // Text Button
    $wp_customize->add_setting(
        'set_hero_text_button',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Banner Text Button','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_hero_text_button',
        array(
            'label' =>  esc_html__('Banner Text Button', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your banner text button here', 'template-default'),
            'section'   =>  'sec_hero',
            'type'  =>  'text'
        )
    );

    // Link Button
    $wp_customize->add_setting(
        'set_hero_link_button',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_hero_link_button',
        array(
            'label' => esc_html__( 'Link the banner button', 'template-default' ),
            'description' => esc_html__( 'Please, type your banner link button here', 'template-default' ),
            'section' => 'sec_hero',
            'type' => 'url'
        )
    );

    // Hero Height
    $wp_customize->add_setting(
        'set_hero_height',
        array(
            'type' => 'theme_mod',
            'default' => 800,
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_hero_height',
        array(
            'label' => esc_html__( 'Banner Image height', 'template-default' ),
            'description' => esc_html__( 'Please, type your banner image height here', 'template-default' ),
            'section' => 'sec_hero',
            'type' => 'number'
        )
    );

    // Image Hero
    $wp_customize->add_setting(
        'set_hero_image',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_hero_image',
        array(
            'label' => esc_html__( 'Banner Image', 'template-default' ),
            'section' => 'sec_hero',
            'mime_type' => 'image'
        )
    ));

    // 3 About Section
    $wp_customize->add_section(
        'sec_about',
        array(
            'title' =>  esc_html__('About Settings', 'template-default'),
            'description'   =>  esc_html__('Add content about us here', 'template-default')
        )
    );

    // Title
    $wp_customize->add_setting(
        'set_about_title',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('About us','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_about_title',
        array(
            'label' =>  esc_html__('About Title', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your about title here', 'template-default'),
            'section'   =>  'sec_about',
            'type'  =>  'text'
        )
    );

    // Text Area
    $wp_customize->add_setting(
        'set_about_text',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text about us','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_about_text',
        array(
            'label' =>  esc_html__('About Text Area', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text about us here', 'template-default'),
            'section'   =>  'sec_about',
            'type'  =>  'textarea'
        )
    );

    // About Height
    $wp_customize->add_setting(
        'set_about_height',
        array(
            'type' => 'theme_mod',
            'default' => 800,
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_about_height',
        array(
            'label' => esc_html__( 'About Image height', 'template-default' ),
            'description' => esc_html__( 'Please, type your about image height here', 'template-default' ),
            'section' => 'sec_about',
            'type' => 'number'
        )
    );

    // Image About Us
    $wp_customize->add_setting(
        'set_about_image',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_about_image',
        array(
            'label' => esc_html__( 'About Image', 'template-default' ),
            'section' => 'sec_about',
            'mime_type' => 'image'
        )
    ));

    // 4 Team Section
    $wp_customize->add_section(
        'sec_team',
        array(
            'title' =>  esc_html__('Team Settings', 'template-default'),
            'description'   =>  esc_html__('Add content team here', 'template-default')
        )
    );
    // Title
    $wp_customize->add_setting(
        'set_team_title',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Title Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_team_title',
        array(
            'label' =>  esc_html__('Title', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your title here', 'template-default'),
            'section'   =>  'sec_team',
            'type'  =>  'text'
        )
    );
    // Subtitle
    $wp_customize->add_setting(
        'set_team_subtitle',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text our team','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_team_subtitle',
        array(
            'label' =>  esc_html__('Team Text Area', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text our team here', 'template-default'),
            'section'   =>  'sec_team',
            'type'  =>  'textarea'
        )
    );
    // Image Team 1
    $wp_customize->add_setting(
        'set_team_image_1',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_team_image_1',
        array(
            'label' => esc_html__( 'Team 1 Image', 'template-default' ),
            'section' => 'sec_team',
            'mime_type' => 'image'
        )
    ));
    // Name Team 1
    $wp_customize->add_setting(
        'set_team_name_1',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Name 1 Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_team_name_1',
        array(
            'label' =>  esc_html__('Name 1', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your name 1 here', 'template-default'),
            'section'   =>  'sec_team',
            'type'  =>  'text'
        )
    );
    // About Team 1
    $wp_customize->add_setting(
        'set_team_about_1',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text about team 1','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_team_about_1',
        array(
            'label' =>  esc_html__('About Team 1', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text about team 1 here', 'template-default'),
            'section'   =>  'sec_team',
            'type'  =>  'textarea'
        )
    );
    // Image Team 2
    $wp_customize->add_setting(
        'set_team_image_2',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_team_image_2',
        array(
            'label' => esc_html__( 'Team 2 Image', 'template-default' ),
            'section' => 'sec_team',
            'mime_type' => 'image'
        )
    ));
    // Name Team 2
    $wp_customize->add_setting(
        'set_team_name_2',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Name 2 Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_team_name_2',
        array(
            'label' =>  esc_html__('Name 2', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your name 2 here', 'template-default'),
            'section'   =>  'sec_team',
            'type'  =>  'text'
        )
    );
    // About Team 2
    $wp_customize->add_setting(
        'set_team_about_2',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text about team 2','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_team_about_2',
        array(
            'label' =>  esc_html__('About Team 2', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text about team 2 here', 'template-default'),
            'section'   =>  'sec_team',
            'type'  =>  'textarea'
        )
    );
    // Image Team 3
    $wp_customize->add_setting(
        'set_team_image_3',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_team_image_3',
        array(
            'label' => esc_html__( 'Team 3 Image', 'template-default' ),
            'section' => 'sec_team',
            'mime_type' => 'image'
        )
    ));
    // Name Team 3
    $wp_customize->add_setting(
        'set_team_name_3',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Name 3 Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_team_name_3',
        array(
            'label' =>  esc_html__('Name 3', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your name 3 here', 'template-default'),
            'section'   =>  'sec_team',
            'type'  =>  'text'
        )
    );
    // About Team 3
    $wp_customize->add_setting(
        'set_team_about_3',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text about team 3','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_team_about_3',
        array(
            'label' =>  esc_html__('About Team 3', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text about team 3 here', 'template-default'),
            'section'   =>  'sec_team',
            'type'  =>  'textarea'
        )
    );
    // Image Team 4
    $wp_customize->add_setting(
        'set_team_image_4',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_team_image_4',
        array(
            'label' => esc_html__( 'Team 4 Image', 'template-default' ),
            'section' => 'sec_team',
            'mime_type' => 'image'
        )
    ));
    // Name Team 4
    $wp_customize->add_setting(
        'set_team_name_4',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Name 4 Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_team_name_4',
        array(
            'label' =>  esc_html__('Name 4', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your name 4 here', 'template-default'),
            'section'   =>  'sec_team',
            'type'  =>  'text'
        )
    );
    // About Team 4
    $wp_customize->add_setting(
        'set_team_about_4',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text about team 4','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_team_about_4',
        array(
            'label' =>  esc_html__('About Team 4', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text about team 4 here', 'template-default'),
            'section'   =>  'sec_team',
            'type'  =>  'textarea'
        )
    );
    // Image Team 5
    $wp_customize->add_setting(
        'set_team_image_5',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_team_image_5',
        array(
            'label' => esc_html__( 'Team 5 Image', 'template-default' ),
            'section' => 'sec_team',
            'mime_type' => 'image'
        )
    ));
    // Name Team 5
    $wp_customize->add_setting(
        'set_team_name_5',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Name 5 Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_team_name_5',
        array(
            'label' =>  esc_html__('Name 5', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your name 5 here', 'template-default'),
            'section'   =>  'sec_team',
            'type'  =>  'text'
        )
    );
    // About Team 5
    $wp_customize->add_setting(
        'set_team_about_5',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text about team 5','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_team_about_5',
        array(
            'label' =>  esc_html__('About Team 5', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text about team 5 here', 'template-default'),
            'section'   =>  'sec_team',
            'type'  =>  'textarea'
        )
    );
    // Image Team 6
    $wp_customize->add_setting(
        'set_team_image_6',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_team_image_6',
        array(
            'label' => esc_html__( 'Team 6 Image', 'template-default' ),
            'section' => 'sec_team',
            'mime_type' => 'image'
        )
    ));
    // Name Team 6
    $wp_customize->add_setting(
        'set_team_name_6',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Name 6 Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_team_name_6',
        array(
            'label' =>  esc_html__('Name 6', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your name 6 here', 'template-default'),
            'section'   =>  'sec_team',
            'type'  =>  'text'
        )
    );
    // About Team 6
    $wp_customize->add_setting(
        'set_team_about_6',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text about team 6','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_team_about_6',
        array(
            'label' =>  esc_html__('About Team 6', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text about team 6 here', 'template-default'),
            'section'   =>  'sec_team',
            'type'  =>  'textarea'
        )
    );

    // 5 Services Section
    $wp_customize->add_section(
        'sec_services',
        array(
            'title' =>  esc_html__('Services Settings', 'template-default'),
            'description'   =>  esc_html__('Add content services here', 'template-default')
        )
    );
    // Title
    $wp_customize->add_setting(
        'set_services_title',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Title Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_services_title',
        array(
            'label' =>  esc_html__('Title', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your title here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'text'
        )
    );
    // Subtitle
    $wp_customize->add_setting(
        'set_services_subtitle',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text your services','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_services_subtitle',
        array(
            'label' =>  esc_html__('Services Text Area', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text your services here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'textarea'
        )
    );
    // Image Service 1
    $wp_customize->add_setting(
        'set_service_image_1',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_service_image_1',
        array(
            'label' => esc_html__( 'Service 1 Image', 'template-default' ),
            'section' => 'sec_services',
            'mime_type' => 'image'
        )
    ));
    // Name Service 1
    $wp_customize->add_setting(
        'set_service_name_1',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Name service 1 Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_service_name_1',
        array(
            'label' =>  esc_html__('Name service 1', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your name service 1 here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'text'
        )
    );
    // About Service 1
    $wp_customize->add_setting(
        'set_service_about_1',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text about service 1','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_service_about_1',
        array(
            'label' =>  esc_html__('About Service 1', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text about service 1 here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'textarea'
        )
    );
    // Link Service 1
    $wp_customize->add_setting(
        'set_service_link_1',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_service_link_1',
        array(
            'label' => esc_html__( 'Link the service 1', 'template-default' ),
            'description' => esc_html__( 'Please, type your service 1 link here', 'template-default' ),
            'section' => 'sec_services',
            'type' => 'url'
        )
    );
    // Image Service 2
    $wp_customize->add_setting(
        'set_service_image_2',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_service_image_2',
        array(
            'label' => esc_html__( 'Service 2 Image', 'template-default' ),
            'section' => 'sec_services',
            'mime_type' => 'image'
        )
    ));
    // Name Service 2
    $wp_customize->add_setting(
        'set_service_name_2',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Name service 2 Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_service_name_2',
        array(
            'label' =>  esc_html__('Name service 2', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your name service 2 here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'text'
        )
    );
    // About Service 2
    $wp_customize->add_setting(
        'set_service_about_2',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text about service 2','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_service_about_2',
        array(
            'label' =>  esc_html__('About Service 2', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text about service 2 here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'textarea'
        )
    );
    // Link Service 2
    $wp_customize->add_setting(
        'set_service_link_2',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_service_link_2',
        array(
            'label' => esc_html__( 'Link the service 2', 'template-default' ),
            'description' => esc_html__( 'Please, type your service 2 link here', 'template-default' ),
            'section' => 'sec_services',
            'type' => 'url'
        )
    );
    // Image Service 3
    $wp_customize->add_setting(
        'set_service_image_3',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_service_image_3',
        array(
            'label' => esc_html__( 'Service 3 Image', 'template-default' ),
            'section' => 'sec_services',
            'mime_type' => 'image'
        )
    ));
    // Name Service 3
    $wp_customize->add_setting(
        'set_service_name_3',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Name service 3 Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_service_name_3',
        array(
            'label' =>  esc_html__('Name service 3', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your name service 3 here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'text'
        )
    );
    // About Service 3
    $wp_customize->add_setting(
        'set_service_about_3',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text about service 3','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_service_about_3',
        array(
            'label' =>  esc_html__(' About Service 3 ', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text about service 3 here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'textarea'
        )
    );
    // Link Service 3
    $wp_customize->add_setting(
        'set_service_link_3',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_service_link_3',
        array(
            'label' => esc_html__( 'Link the service 3', 'template-default' ),
            'description' => esc_html__( 'Please, type your service 3 link here', 'template-default' ),
            'section' => 'sec_services',
            'type' => 'url'
        )
    );
    // Image Service 4
    $wp_customize->add_setting(
        'set_service_image_4',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_service_image_4',
        array(
            'label' => esc_html__( 'Service 4 Image', 'template-default' ),
            'section' => 'sec_services',
            'mime_type' => 'image'
        )
    ));
    // Name Service 4
    $wp_customize->add_setting(
        'set_service_name_4',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Name service 4 Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_service_name_4',
        array(
            'label' =>  esc_html__('Name service 4', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your name service 4 here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'text'
        )
    );
    // About Service 4
    $wp_customize->add_setting(
        'set_service_about_4',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text about service 4','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_service_about_4',
        array(
            'label' =>  esc_html__('About Service 4', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text about service 4 here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'textarea'
        )
    );
    // Link Service 4
    $wp_customize->add_setting(
        'set_service_link_4',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_service_link_4',
        array(
            'label' => esc_html__( 'Link the service 4', 'template-default' ),
            'description' => esc_html__( 'Please, type your service 4 link here', 'template-default' ),
            'section' => 'sec_services',
            'type' => 'url'
        )
    );
    // Image Service 5
    $wp_customize->add_setting(
        'set_service_image_5',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_service_image_5',
        array(
            'label' => esc_html__( 'Service 5 Image', 'template-default' ),
            'section' => 'sec_services',
            'mime_type' => 'image'
        )
    ));
    // Name Service 5
    $wp_customize->add_setting(
        'set_service_name_5',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Name service 5 Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_service_name_5',
        array(
            'label' =>  esc_html__('Name service 5', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your name service 5 here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'text'
        )
    );
    // About Service 5
    $wp_customize->add_setting(
        'set_service_about_5',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text about service 5','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_service_about_5',
        array(
            'label' =>  esc_html__('About Service 5', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text about service 5 here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'textarea'
        )
    );
    // Link Service 5
    $wp_customize->add_setting(
        'set_service_link_5',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_service_link_5',
        array(
            'label' => esc_html__( 'Link the service 5', 'template-default' ),
            'description' => esc_html__( 'Please, type your service 5 link here', 'template-default' ),
            'section' => 'sec_services',
            'type' => 'url'
        )
    );
    // Image Service 6
    $wp_customize->add_setting(
        'set_service_image_6',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_service_image_6',
        array(
            'label' => esc_html__( 'Service 6 Image', 'template-default' ),
            'section' => 'sec_services',
            'mime_type' => 'image'
        )
    ));
    // Name Service 6
    $wp_customize->add_setting(
        'set_service_name_6',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Name service 6 Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_service_name_6',
        array(
            'label' =>  esc_html__('Name service 6', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your name service 6 here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'text'
        )
    );
    // About Service 6
    $wp_customize->add_setting(
        'set_service_about_6',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text about service 6','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_service_about_6',
        array(
            'label' =>  esc_html__('About Service 6', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text about service 6 here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'textarea'
        )
    );
    // Link Service 6
    $wp_customize->add_setting(
        'set_service_link_6',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_service_link_6',
        array(
            'label' => esc_html__( 'Link the service 6', 'template-default' ),
            'description' => esc_html__( 'Please, type your service 6 link here', 'template-default' ),
            'section' => 'sec_services',
            'type' => 'url'
        )
    );
    // Image Service 7
    $wp_customize->add_setting(
        'set_service_image_7',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_service_image_7',
        array(
            'label' => esc_html__( 'Service 7 Image', 'template-default' ),
            'section' => 'sec_services',
            'mime_type' => 'image'
        )
    ));
    // Name Service 7
    $wp_customize->add_setting(
        'set_service_name_7',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Name service 7 Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_service_name_7',
        array(
            'label' =>  esc_html__('Name service 7', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your name service 7 here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'text'
        )
    );
    // About Service 7
    $wp_customize->add_setting(
        'set_service_about_7',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text about service 7','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_service_about_7',
        array(
            'label' =>  esc_html__('About Service 7', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text about service 7 here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'textarea'
        )
    );
    // Link Service 7
    $wp_customize->add_setting(
        'set_service_link_7',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_service_link_7',
        array(
            'label' => esc_html__( 'Link the service 7', 'template-default' ),
            'description' => esc_html__( 'Please, type your service 7 link here', 'template-default' ),
            'section' => 'sec_services',
            'type' => 'url'
        )
    );
    // Image Service 8
    $wp_customize->add_setting(
        'set_service_image_8',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_service_image_8',
        array(
            'label' => esc_html__( 'Service 8 Image', 'template-default' ),
            'section' => 'sec_services',
            'mime_type' => 'image'
        )
    ));
    // Name Service 8
    $wp_customize->add_setting(
        'set_service_name_8',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Name service 8 Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_service_name_8',
        array(
            'label' =>  esc_html__('Name service 8', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your name service 8 here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'text'
        )
    );
    // About Service 8
    $wp_customize->add_setting(
        'set_service_about_8',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text about service 8','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_service_about_8',
        array(
            'label' =>  esc_html__('About Service 8', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text about service 8 here', 'template-default'),
            'section'   =>  'sec_services',
            'type'  =>  'textarea'
        )
    );
    // Link Service 8
    $wp_customize->add_setting(
        'set_service_link_8',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_service_link_8',
        array(
            'label' => esc_html__( 'Link the service 8', 'template-default' ),
            'description' => esc_html__( 'Please, type your service 8 link here', 'template-default' ),
            'section' => 'sec_services',
            'type' => 'url'
        )
    );

    // 6 Partners Section
    $wp_customize->add_section(
        'sec_partners',
        array(
            'title' =>  esc_html__('Partners Settings', 'template-default'),
            'description'   =>  esc_html__('Add content partners here', 'template-default')
        )
    );
    // Title
    $wp_customize->add_setting(
        'set_partners_title',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Partner title Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_partners_title',
        array(
            'label' =>  esc_html__('Title', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your partner title here', 'template-default'),
            'section'   =>  'sec_partners',
            'type'  =>  'text'
        )
    );
    // Subtitle
    $wp_customize->add_setting(
        'set_partners_subtitle',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text your partners','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_partners_subtitle',
        array(
            'label' =>  esc_html__('Partners Text Area', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text your partners here', 'template-default'),
            'section'   =>  'sec_partners',
            'type'  =>  'textarea'
        )
    );
    // Image Partner 1
    $wp_customize->add_setting(
        'set_partner_image_1',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_partner_image_1',
        array(
            'label' => esc_html__( 'Partner 1 Image', 'template-default' ),
            'section' => 'sec_partners',
            'mime_type' => 'image'
        )
    ));
    // Image Partner 2
    $wp_customize->add_setting(
        'set_partner_image_2',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_partner_image_2',
        array(
            'label' => esc_html__( 'Partner 2 Image', 'template-default' ),
            'section' => 'sec_partners',
            'mime_type' => 'image'
        )
    ));
    // Image Partner 3
    $wp_customize->add_setting(
        'set_partner_image_3',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_partner_image_3',
        array(
            'label' => esc_html__( 'Partner 3 Image', 'template-default' ),
            'section' => 'sec_partners',
            'mime_type' => 'image'
        )
    ));
    // Image Partner 4
    $wp_customize->add_setting(
        'set_partner_image_4',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize,
        'set_partner_image_4',
        array(
            'label' => esc_html__( 'Partner 4 Image', 'template-default' ),
            'section' => 'sec_partners',
            'mime_type' => 'image'
        )
    ));

    // 7 Blog Section
    $wp_customize->add_section(
        'sec_blog',
        array(
            'title' =>  esc_html__('Blog Settings', 'template-default'),
            'description'   =>  esc_html__('Add content blog here', 'template-default')
        )
    );
    // Title
    $wp_customize->add_setting(
        'set_blog_title',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Blog title Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_blog_title',
        array(
            'label' =>  esc_html__('Blog Title', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your blog title here', 'template-default'),
            'section'   =>  'sec_blog',
            'type'  =>  'text'
        )
    );
    // Subtitle
    $wp_customize->add_setting(
        'set_blog_subtitle',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text your blog','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_blog_subtitle',
        array(
            'label' =>  esc_html__('Blog Text Area', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text your blog here', 'template-default'),
            'section'   =>  'sec_blog',
            'type'  =>  'textarea'
        )
    );
    // Posts per page
    $wp_customize->add_setting( 
        'set_per_page', 
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
    ) );

    $wp_customize->add_control( 
        'set_per_page', 
        array(
            'label' => esc_html__( 'Posts per page', 'template-default' ),
            'description' => esc_html__( 'How many items to display in the post list?', 'template-default' ),			
            'section' => 'sec_blog',
            'type' => 'number'
    ) );

    // Post categories to include
    $wp_customize->add_setting( 
        'set_category_include', 
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 
        'set_category_include', 
        array(
            'label' => esc_html__( 'Post categories to include', 'template-default' ),
            'description' => esc_html__( 'Comma separated values or single category ID', 'template-default' ),
            'section' => 'sec_blog',
            'type' => 'text'
    ) );	

    // Post categories to exclude
    $wp_customize->add_setting( 
        'set_category_exclude', 
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field'
    ) );

    $wp_customize->add_control( 
        'set_category_exclude', 
        array(
            'label' => esc_html__( 'Post categories to exclude', 'template-default' ),
            'description' => esc_html__( 'Comma separated values or single category ID', 'template-default' ),			
            'section' => 'sec_blog',
            'type' => 'text'
    ) );

    // 8 Contact Section
    $wp_customize->add_section(
        'sec_contact',
        array(
            'title' =>  esc_html__('Contact Settings', 'template-default'),
            'description'   =>  esc_html__('Add content contact here', 'template-default')
        )
    );
    // Title
    $wp_customize->add_setting(
        'set_contact_title',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Contact title Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_contact_title',
        array(
            'label' =>  esc_html__('Contact Title', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your contact title here', 'template-default'),
            'section'   =>  'sec_contact',
            'type'  =>  'text'
        )
    );
    // Subtitle
    $wp_customize->add_setting(
        'set_contact_subtitle',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Description text your contact','template-default'),
            'sanitize_callback' =>  'sanitize_textarea_field'
        )
    );
    $wp_customize->add_control(
        'set_contact_subtitle',
        array(
            'label' =>  esc_html__('Contact Text Area', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your description text your contact here', 'template-default'),
            'section'   =>  'sec_contact',
            'type'  =>  'textarea'
        )
    );
    // Phone
    $wp_customize->add_setting(
        'set_phone',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Phone number Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_phone',
        array(
            'label' =>  esc_html__('Phone Number', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your number phone here', 'template-default'),
            'section'   =>  'sec_contact',
            'type'  =>  'text'
        )
    );
    // Cellphone
    $wp_customize->add_setting(
        'set_cellphone',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Cellphone number Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_cellphone',
        array(
            'label' =>  esc_html__('Cellphone Number', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your number cellphone here', 'template-default'),
            'section'   =>  'sec_contact',
            'type'  =>  'text'
        )
    );
    // Link Cellphone
    $wp_customize->add_setting(
        'set_cellphone_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_cellphone_link',
        array(
            'label' => esc_html__( 'Link the cellphone', 'template-default' ),
            'description' => esc_html__( 'Please, type your link the cellphone(Whatsapp, Telegran...) here', 'template-default' ),
            'section' => 'sec_contact',
            'type' => 'url'
        )
    );   
    // E-mail
    $wp_customize->add_setting( 
        'set_email', 
        array(
            'sanitize_callback' => 'sanitize_email' //removes all invalid characters
        )
    );
      
    $wp_customize->add_control( 
        'set_email', 
        array(
            'label' => esc_html__( 'Your Setting with email input', 'template-default' ),
            'section' => 'sec_contact',
            'type' => 'email'
        )
    );
    // Link E-mail
    $wp_customize->add_setting(
        'set_email_link',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_email_link',
        array(
            'label' => esc_html__( 'Link the e-mail', 'template-default' ),
            'description' => esc_html__( 'Please, type your link the e-mail here', 'template-default' ),
            'section' => 'sec_contact',
            'type' => 'url'
        )
    );
    // Contact Address
    $wp_customize->add_setting(
        'set_address_contact',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Address Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_address_contact',
        array(
            'label' =>  esc_html__('Address', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your address here', 'template-default'),
            'section'   =>  'sec_contact',
            'type'  =>  'text'
        )
    );

    // 9 Footer Bar Section
    $wp_customize->add_section(
        'sec_footer_bar',
        array(
            'title' =>  esc_html__('Footer Bar Settings', 'template-default'),
            'description'   =>  esc_html__('Add content footer bar here', 'template-default')
        )
    );
    // Title Footer
    $wp_customize->add_setting(
        'set_footer_institutional',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Institutional Title Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_footer_institutional',
        array(
            'label' =>  esc_html__('Institutional Title Footer', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your institutional title footer here', 'template-default'),
            'section'   =>  'sec_footer_bar',
            'type'  =>  'text'
        )
    );
    // About Footer
    $wp_customize->add_setting(
        'set_footer_about',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('About Footer Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_footer_about',
        array(
            'label' =>  esc_html__('About Footer', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your about footer here', 'template-default'),
            'section'   =>  'sec_footer_bar',
            'type'  =>  'text'
        )
    );
    // Link About
    $wp_customize->add_setting(
        'set_about_link_footer',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_about_link_footer',
        array(
            'label' => esc_html__( 'Link the about', 'template-default' ),
            'description' => esc_html__( 'Please, type your link the about here', 'template-default' ),
            'section' => 'sec_footer_bar',
            'type' => 'url'
        )
    );
    // Team Footer
    $wp_customize->add_setting(
        'set_footer_team',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Team Footer Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_footer_team',
        array(
            'label' =>  esc_html__('Team Footer', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your team footer here', 'template-default'),
            'section'   =>  'sec_footer_bar',
            'type'  =>  'text'
        )
    );
    // Link Team
    $wp_customize->add_setting(
        'set_team_link_footer',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_team_link_footer',
        array(
            'label' => esc_html__( 'Link the team', 'template-default' ),
            'description' => esc_html__( 'Please, type your link the team here', 'template-default' ),
            'section' => 'sec_footer_bar',
            'type' => 'url'
        )
    );
    // Services Footer
    $wp_customize->add_setting(
        'set_footer_services',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Services Footer Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_footer_services',
        array(
            'label' =>  esc_html__('Services Footer', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your services footer here', 'template-default'),
            'section'   =>  'sec_footer_bar',
            'type'  =>  'text'
        )
    );
    // Link Services
    $wp_customize->add_setting(
        'set_services_link_footer',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_services_link_footer',
        array(
            'label' => esc_html__( 'Link the services', 'template-default' ),
            'description' => esc_html__( 'Please, type your link the services here', 'template-default' ),
            'section' => 'sec_footer_bar',
            'type' => 'url'
        )
    );
    // Partners Footer
    $wp_customize->add_setting(
        'set_footer_partners',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Partners Footer Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_footer_partners',
        array(
            'label' =>  esc_html__('Partners Footer', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your partners footer here', 'template-default'),
            'section'   =>  'sec_footer_bar',
            'type'  =>  'text'
        )
    );
    // Link Partners
    $wp_customize->add_setting(
        'set_partners_link_footer',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_partners_link_footer',
        array(
            'label' => esc_html__( 'Link the partners', 'template-default' ),
            'description' => esc_html__( 'Please, type your link the partners here', 'template-default' ),
            'section' => 'sec_footer_bar',
            'type' => 'url'
        )
    );
    // Blog Footer
    $wp_customize->add_setting(
        'set_footer_blog',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Blog Footer Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_footer_blog',
        array(
            'label' =>  esc_html__('Blog Footer', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your blog footer here', 'template-default'),
            'section'   =>  'sec_footer_bar',
            'type'  =>  'text'
        )
    );
    // Link Blog
    $wp_customize->add_setting(
        'set_blog_link_footer',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_blog_link_footer',
        array(
            'label' => esc_html__( 'Link the blog', 'template-default' ),
            'description' => esc_html__( 'Please, type your link the blog here', 'template-default' ),
            'section' => 'sec_footer_bar',
            'type' => 'url'
        )
    );
    // Contact Footer
    $wp_customize->add_setting(
        'set_footer_contact',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Contact Footer Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_footer_contact',
        array(
            'label' =>  esc_html__('Contact Footer', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your contact footer here', 'template-default'),
            'section'   =>  'sec_footer_bar',
            'type'  =>  'text'
        )
    );
    // Link Contact
    $wp_customize->add_setting(
        'set_contact_link_footer',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_contact_link_footer',
        array(
            'label' => esc_html__( 'Link the contact', 'template-default' ),
            'description' => esc_html__( 'Please, type your link the contact here', 'template-default' ),
            'section' => 'sec_footer_bar',
            'type' => 'url'
        )
    );
    // Privacy Policy Footer
    $wp_customize->add_setting(
        'set_footer_privacy',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Privacy Policy Footer Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_footer_privacy',
        array(
            'label' =>  esc_html__('Privacy Policy Footer', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your privacy policy footer here', 'template-default'),
            'section'   =>  'sec_footer_bar',
            'type'  =>  'text'
        )
    );
    // Link Privacy Policy
    $wp_customize->add_setting(
        'set_privacy_link_footer',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_privacy_link_footer',
        array(
            'label' => esc_html__( 'Link the Privacy Policy', 'template-default' ),
            'description' => esc_html__( 'Please, type your link the privacy policy here', 'template-default' ),
            'section' => 'sec_footer_bar',
            'type' => 'url'
        )
    );
    // Services Title Footer
    $wp_customize->add_setting(
        'set_footer_services_title',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Services Title Footer Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_footer_services_title',
        array(
            'label' =>  esc_html__('Services Title Footer', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your services footer here', 'template-default'),
            'section'   =>  'sec_footer_bar',
            'type'  =>  'text'
        )
    );
    // Service 1 Footer
    $wp_customize->add_setting(
        'set_footer_service_1',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Service 1 Footer Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_footer_service_1',
        array(
            'label' =>  esc_html__('Service 1 Footer', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your service 1 footer here', 'template-default'),
            'section'   =>  'sec_footer_bar',
            'type'  =>  'text'
        )
    );
    // Link Service 1
    $wp_customize->add_setting(
        'set_service_1_link_footer',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_service_1_link_footer',
        array(
            'label' => esc_html__( 'Link the Service 1', 'template-default' ),
            'description' => esc_html__( 'Please, type your link the service 1 here', 'template-default' ),
            'section' => 'sec_footer_bar',
            'type' => 'url'
        )
    );
    // Service 2 Footer
    $wp_customize->add_setting(
        'set_footer_service_2',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Service 2 Footer Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_footer_service_2',
        array(
            'label' =>  esc_html__('Service 2 Footer', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your service 2 footer here', 'template-default'),
            'section'   =>  'sec_footer_bar',
            'type'  =>  'text'
        )
    );
    // Link Service 2
    $wp_customize->add_setting(
        'set_service_2_link_footer',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_service_2_link_footer',
        array(
            'label' => esc_html__( 'Link the Service 2', 'template-default' ),
            'description' => esc_html__( 'Please, type your link the service 2 here', 'template-default' ),
            'section' => 'sec_footer_bar',
            'type' => 'url'
        )
    );
    // Service 3 Footer
    $wp_customize->add_setting(
        'set_footer_service_3',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Service 3 Footer Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_footer_service_3',
        array(
            'label' =>  esc_html__('Service 3 Footer', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your service 3 footer here', 'template-default'),
            'section'   =>  'sec_footer_bar',
            'type'  =>  'text'
        )
    );
    // Link Service 3
    $wp_customize->add_setting(
        'set_service_3_link_footer',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_service_3_link_footer',
        array(
            'label' => esc_html__( 'Link the Service 3', 'template-default' ),
            'description' => esc_html__( 'Please, type your link the service 3 here', 'template-default' ),
            'section' => 'sec_footer_bar',
            'type' => 'url'
        )
    );
    // Service 4 Footer
    $wp_customize->add_setting(
        'set_footer_service_4',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Service 4 Footer Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_footer_service_4',
        array(
            'label' =>  esc_html__('Service 4 Footer', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your service 4 footer here', 'template-default'),
            'section'   =>  'sec_footer_bar',
            'type'  =>  'text'
        )
    );
    // Link Service 4
    $wp_customize->add_setting(
        'set_service_4_link_footer',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_service_4_link_footer',
        array(
            'label' => esc_html__( 'Link the Service 4', 'template-default' ),
            'description' => esc_html__( 'Please, type your link the service 4 here', 'template-default' ),
            'section' => 'sec_footer_bar',
            'type' => 'url'
        )
    );
    // Service 5 Footer
    $wp_customize->add_setting(
        'set_footer_service_5',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Service 5 Footer Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_footer_service_5',
        array(
            'label' =>  esc_html__('Service 5 Footer', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your service 5 footer here', 'template-default'),
            'section'   =>  'sec_footer_bar',
            'type'  =>  'text'
        )
    );
    // Link Service 5
    $wp_customize->add_setting(
        'set_service_5_link_footer',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_service_5_link_footer',
        array(
            'label' => esc_html__( 'Link the Service 5', 'template-default' ),
            'description' => esc_html__( 'Please, type your link the service 5 here', 'template-default' ),
            'section' => 'sec_footer_bar',
            'type' => 'url'
        )
    );
    // Service 6 Footer
    $wp_customize->add_setting(
        'set_footer_service_6',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  esc_html__('Service 6 Footer Here','template-default'),
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_footer_service_6',
        array(
            'label' =>  esc_html__('Service 6 Footer', 'template-default'),
            'description'   =>  esc_html__( 'Please, type your service 6 footer here', 'template-default'),
            'section'   =>  'sec_footer_bar',
            'type'  =>  'text'
        )
    );
    // Link Service 6
    $wp_customize->add_setting(
        'set_service_6_link_footer',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_service_6_link_footer',
        array(
            'label' => esc_html__( 'Link the Service 6', 'template-default' ),
            'description' => esc_html__( 'Please, type your link the service 6 here', 'template-default' ),
            'section' => 'sec_footer_bar',
            'type' => 'url'
        )
    );

}
add_action( 'customize_register', 'template_default_customizer' );