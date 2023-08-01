<?php
/**
 * Single Blog Options Customizer Customizer
 *
 * @package Newscrunch Theme
*/

function newscrunch_single_blog_customizer($wp_customize) {

    $wp_customize->add_section('newscrunch_single_blog_section',
        array(
            'title'     => esc_html__('Single Post', 'newscrunch' ),
            'priority'  => 27
        )
    );


     $wp_customize->add_setting('newscrunch_enable_single_post_categories',
        array(
            'default'           => true,
            'sanitize_callback' => 'newscrunch_sanitize_checkbox'
        )
    );
    $wp_customize->add_control(new Newscrunch_Toggle_Control($wp_customize, 'newscrunch_enable_single_post_categories',
        array(
            'label'     => esc_html__('Hide/Show Categories', 'newscrunch' ),
            'type'      => 'toggle',
            'section'   => 'newscrunch_single_blog_section',
            'priority'  => 1
        )
    ));

    $wp_customize->add_setting('newscrunch_enable_single_post_tag',
        array(
            'default'           => true,
            'sanitize_callback' => 'newscrunch_sanitize_checkbox'
        )
    );
    $wp_customize->add_control(new Newscrunch_Toggle_Control($wp_customize, 'newscrunch_enable_single_post_tag',
        array(
            'label'     => esc_html__('Hide/Show Tag', 'newscrunch' ),
            'type'      => 'toggle',
            'section'   => 'newscrunch_single_blog_section',
            'priority'  => 2
        )
    ));

    $wp_customize->add_setting('newscrunch_enable_single_post_author',
        array(
            'default'           => true,
            'sanitize_callback' => 'newscrunch_sanitize_checkbox'
        )
    );
    $wp_customize->add_control(new Newscrunch_Toggle_Control($wp_customize, 'newscrunch_enable_single_post_author',
        array(
            'label'     => esc_html__('Hide/Show Author', 'newscrunch' ),
            'type'      => 'toggle',
            'section'   => 'newscrunch_single_blog_section',
            'priority'  => 3
        )
    ));

   $wp_customize->add_setting('newscrunch_enable_single_post_date',
        array(
            'default'           => true,
            'sanitize_callback' => 'newscrunch_sanitize_checkbox'
        )
    );
    $wp_customize->add_control(new Newscrunch_Toggle_Control($wp_customize, 'newscrunch_enable_single_post_date',
        array(
            'label'     => esc_html__('Hide/Show Date', 'newscrunch' ),
            'type'      => 'toggle',
            'section'   => 'newscrunch_single_blog_section',
            'priority'  => 4
        )
    ));
   
}

add_action('customize_register', 'newscrunch_single_blog_customizer');