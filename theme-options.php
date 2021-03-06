<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.


function stock_theme_options( $options ){
    $options = array(); // remove default theme options

    $options[]    = array(
        'name'      => 'stock_mr_header_settings',
        'title'     => 'Header Settings',
        'icon'      => 'fa fa-heart',
        'fields'    => array(
            array(
                'id'              => 'header_icon_box',
                'type'            => 'group',
                'title'           => 'Header Icon Box',
                'button_title'    => 'Add New',
                'accordion_title' => 'Add New Box',
                'fields'          => array(
                    array(
                        'id'    => 'title',
                        'type'  => 'text',
                        'title' => 'Title',
                    ),
                    array(
                        'id'    => 'icon',
                        'type'  => 'icon',
                        'title' => 'Box Icon',
                    ),
                    array(
                        'id'    => 'big_title',
                        'type'  => 'text',
                        'title' => 'Big Title',
                    ),
                ),
            ),
        )
    );

    $options[]    = array(
        'name'      => 'stock_mr_logo_settings',
        'title'     => 'Logo Settings',
        'icon'      => 'fa fa-heart',
        'fields'    => array(
            array(
                'id'    => 'enable_logo_image',
                'type'  => 'switcher',
                'default'  => false,
                'title' => 'Enable Logo Image',
            ),
            array(
                'id'    => 'logo_image',
                'type'  => 'image',
                'title' => 'Upload Site Logo',
                'dependency' => array('enable_logo_image', '==', 'true'),
            ),
            array(
                'id'    => 'logo_text',
                'type'  => 'text',
                'title' => 'Logo Text',
                'default' => 'Stock',
                'dependency' => array('enable_logo_image', '==', 'false'),
            ),
        )
    );

    $options[]    = array(
        'name'      => 'stock_mr_typography_settings',
        'title'     => 'Typography Settings',
        'icon'      => 'fa fa-heart',
        'fields'    => array(
            array(
                'id'        => 'body_font',
                'type'      => 'typography',
                'title'     => 'Body Font',
                'default'   => array(
                    'family'  => 'Roboto',
                    'variant' => 'regular',
                    'font'    => 'google',
                ),
            ),
            array(
                'id'        => 'heading_font',
                'type'      => 'typography',
                'title'     => 'Heading Font',
                'default'   => array(
                    'family'  => 'Noto Serif',
                    'variant' => '700',
                    'font'    => 'google',
                ),
            ),
        )
    );

    $options[]    = array(
        'name'      => 'stock_mr_styling_settings',
        'title'     => 'Styling Settings',
        'icon'      => 'fa fa-heart',
        'fields'    => array(
            array(
                'id'        => 'enable_preloader',
                'type'      => 'switcher',
                'default'   => true,
                'title'     => 'Enable Preloader',
            ),
            array(
                'id'        => 'enable_boxed_layout',
                'type'      => 'switcher',
                'default'   => false,
                'title'     => 'Enable Boxed Layout',
            ),
            array(
                'id'        => 'body_bg',
                'type'      => 'image',
                'title'     => 'Body Background Image',
                'dependency'=> array('enable_boxed_layout', '==', 'true')
            ),
            array(
                'id'        => 'body_bg_repeat',
                'type'      => 'select',
                'title'     => 'Body Background Repeat',
                'default'     => 'repeat',
                'options'   => array(
                    'repeat'          => 'Repeat',
                    'no-repeat'     => 'No Repeat',
                    'cover'         => 'Cover',
                ),
                'dependency'=> array('enable_box_layout', '==', 'true')
            ),
            array(
                'id'        => 'body_bg_attachment',
                'type'      => 'select',
                'title'     => 'Body Background Attachment',
                'default'   => 'scroll',
                'options'   => array(
                    'scroll'  => 'Scroll',
                    'fixed'   => 'Fixed',
                ),
                'dependency'=> array('enable_boxed_layout', '==', 'true')
            ),
        )
    );

    $options[]    = array(
        'name'      => 'stock_mr_blog_settings',
        'title'     => 'Blog Settings',
        'icon'      => 'fa fa-heart',
        'fields'    => array(
            array(
                'id'        => 'display_post_by',
                'type'      => 'switcher',
                'default'   =>  true,
                'title'     => 'Display Post By?',
            ),
            array(
                'id'        => 'display_post_date',
                'type'      => 'switcher',
                'default'   =>  true,
                'title'     => 'Display Post Date?',
            ),
            array(
                'id'        => 'display_post_comment_count',
                'type'      => 'switcher',
                'default'   =>  true,
                'title'     => 'Display Comment Count?',
            ),
            array(
                'id'        => 'display_post_category',
                'type'      => 'switcher',
                'default'   =>  true,
                'title'     => 'Display Post Categories?',
            ),
            array(
                'id'        => 'display_post_tag',
                'type'      => 'switcher',
                'default'   =>  true,
                'title'     => 'Display Post Tags?',
            ),
            array(
                'id'        => 'display_post_nav',
                'type'      => 'switcher',
                'default'   =>  true,
                'title'     => 'Enable next previous link on single post?',
            ),
        )
    );

    $options[]    = array(
        'name'      => 'stock_mr_footer_settings',
        'title'     => 'Footer Settings',
        'icon'      => 'fa fa-heart',
        'fields'    => array(
            array(
                'id'        => 'footer_bg_color',
                'type'      => 'color_picker',
                'default'   =>  '#2a2d2f',
                'title'     => 'Footer Background Color',
            ),
            array(
                'id'        => 'footer_text_color',
                'type'      => 'color_picker',
                'default'   =>  '#afb9c0',
                'title'     => 'Footer Text Color',
            ),
            array(
                'id'        => 'footer_heading_color',
                'type'      => 'color_picker',
                'default'   =>  '#ffffff',
                'title'     => 'Footer Heading Color',
            ),
            array(
                'id'        => 'footer_copyright_text',
                'type'      => 'textarea',
                'default'   =>  'Copyright © 2017 FairDealLab - All Rights Reserved',
                'title'     => 'Footer Copyright Text',
            ),
        )
    );

    $options[]    = array(
        'name'      => 'stock_mr_script_settings',
        'title'     => 'Script Settings',
        'icon'      => 'fa fa-heart',
        'fields'    => array(
            array(
                'id'        => 'head_script',
                'type'      => 'textarea',
                'sanitize'   =>  false,
                'title'     => 'Head Script',
                'desc' => 'Scripts goes before closing < / head >',
            ),
            array(
                'id'        => 'body_start_script',
                'type'      => 'textarea',
                'sanitize'   =>  false,
                'title'     => 'Body Start Script',
                'desc' => 'Scripts goes just after < body > starts',
            ),
            array(
                'id'        => 'body_end_script',
                'type'      => 'textarea',
                'sanitize'   =>  false,
                'title'     => 'Body End Script',
                'desc' => 'Scripts goes just before closing < / body >',
            ),
        )
    );

    $options[]    = array(
        'name'      => 'stock_mr_social_links',
        'title'     => 'Social Links',
        'icon'      => 'fa fa-heart',
        'fields'    => array(
            array(
                'id'              => 'social_links',
                'type'            => 'group',
                'title'           => 'Social links',
                'button_title'    => 'Add New',
                'accordion_title' => 'Add New Social links',
                'fields'          => array(
                    array(
                        'id'    => 'icon',
                        'type'  => 'icon',
                        'title' => 'Box Icon',
                    ),
                    array(
                        'id'    => 'link',
                        'type'  => 'text',
                        'title' => 'Links',
                    ),
                ),
            ),
        )
    );

    return $options ;
}
add_filter('cs_framework_options','stock_theme_options');
