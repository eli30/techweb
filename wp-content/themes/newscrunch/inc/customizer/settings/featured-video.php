<?php
/**
 * Video Customizer
 *
 * @package Newscrunch
*/

function newscrunch_featured_video_panel_customizer ( $wp_customize ) {

	/* ====== FEATURED VIDEO SECTION ====== */
	$wp_customize->add_section('newscrunch_featured_video_section', 
		array(
			'title' 	=> esc_html__('Featured Video' , 'newscrunch' ),
			'priority' 	=> 24
		)
	);

    // enable/disable featured video
    $wp_customize->add_setting('hide_show_featured_video',
        array(
            'default'           => false,
            'sanitize_callback' => 'newscrunch_sanitize_checkbox'
        )
    );
    $wp_customize->add_control(new Newscrunch_Toggle_Control( $wp_customize, 'hide_show_featured_video',
        array(
            'label'     =>  esc_html__( 'Enable/Disable Featured Video', 'newscrunch'),
            'section'   =>  'newscrunch_featured_video_section',
            'settings'  =>  'hide_show_featured_video',
            'type'      =>  'toggle',
            'priority'  =>  1
        )
    ));

    // featured video section title
    $wp_customize->add_setting('featured_video_title',
        array(
            'default'           =>  esc_html__('Featured Video', 'newscrunch'),
            'transport'         => 'postMessage',
            'sanitize_callback' =>  'newscrunch_sanitize_text'
        )
    );
    $wp_customize->add_control('featured_video_title',
        array(
            'label'             =>  esc_html__('Title', 'newscrunch'),
            'section'           =>  'newscrunch_featured_video_section',
            'setting'           =>  'featured_video_title',
            'active_callback'   =>  'newscrunch_featured_video_callback',
            'priority'          =>  2,
            'type'              =>  'text'
        )
    );

    // select the featured video category
    $wp_customize->add_setting( 'featured_video_dropdown_category',
        array(
            'default'           =>  0,
            'sanitize_callback' =>  'absint'
        )
    );
    $wp_customize->add_control( new newscrunch_Dropdown_Category_Control( $wp_customize, 'featured_video_dropdown_category',
        array(
            'label'             =>  esc_html__( 'Select Category', 'newscrunch' ),
            'section'           =>  'newscrunch_featured_video_section',
            'settings'          =>  'featured_video_dropdown_category',
            'active_callback'   =>  'newscrunch_featured_video_callback',
            'priority'          =>  3
        )
    ) );

    // enable/disable featured video meta
    $wp_customize->add_setting('hide_show_featured_video_meta',
        array(
            'default'           => true,
            'sanitize_callback' => 'newscrunch_sanitize_checkbox'
        )
    );
    $wp_customize->add_control(new Newscrunch_Toggle_Control( $wp_customize, 'hide_show_featured_video_meta',
        array(
            'label'             =>  esc_html__( 'Enable/Disable Meta', 'newscrunch'),
            'section'           =>  'newscrunch_featured_video_section',
            'settings'          =>  'hide_show_featured_video_meta',
            'active_callback'   =>  'newscrunch_featured_video_callback',
            'type'              =>  'toggle',
            'priority'          =>  4
        )
    ));

    // featured video URL
    for ( $i = 1; $i <= 5; $i++ ) :
    $wp_customize->add_setting('featured_video_url_'.$i, 
        array(
            'default'           => '',
            'sanitize_callback' => 'newscrunch_sanitize_text',
        )
    );
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'featured_video_url_'.$i, 
        array(
            'label'             =>  esc_html__('Video URL','newscrunch' ) . ' ' . $i,
            'section'           =>  'newscrunch_featured_video_section',
            'settings'          =>  'featured_video_url_'.$i,
            'active_callback'   =>  'newscrunch_featured_video_callback',
            'type'              =>  'text',
            'priority'          =>  5
        )
    ));
    endfor;



     /* ====== BLOG SECTION SETTING ====== */
    
    $wp_customize->add_section('newscrunch_blog_post_section', 
        array(
            'title'     => esc_html__('Blog Posts' , 'newscrunch' ),
            'priority'  => 24
        )
    );

    // enable/disable blog section
    $wp_customize->add_setting('hide_show_blog_post',
        array(
            'default'           => true,
            'sanitize_callback' => 'newscrunch_sanitize_checkbox'
        )
    );
    $wp_customize->add_control(new Newscrunch_Toggle_Control( $wp_customize, 'hide_show_blog_post',
        array(
            'label'     =>  esc_html__( 'Enable/Disable Blog Section', 'newscrunch'),
            'description' =>  esc_html__( 'Enable/Disable blog section on front page', 'newscrunch'),
            'section'   =>  'newscrunch_blog_post_section',
            'settings'   =>  'hide_show_blog_post',
            'type'      =>  'toggle',
            'priority'  =>  1
        )
    ));

}
add_action( 'customize_register', 'newscrunch_featured_video_panel_customizer' );