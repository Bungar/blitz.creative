<?php
/**
 * booky Theme Customizer
 *
 * @package booky
 * @since booky 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function booky_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'booky_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function booky_customize_preview_js() {
	wp_enqueue_script( 'booky_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'booky_customize_preview_js' );

/**
 * Customizer
 *
 * @since booky 1.0
 */
function booky_theme_customizer( $wp_customize ) {

	/*--------------------------------------------------------------
		Layout
	--------------------------------------------------------------*/
	$wp_customize->add_section( 'booky_layout_section' , array(
	    'title' => __( 'Layout', 'booky' ),
	    'priority' => 20,
	    'description' => 'Layout Customization',
	) );

	$wp_customize->add_setting('booky_sidebar_position', array(
		'default' => 'left',
	));

	$wp_customize->add_control('booky_sidebar_position', array(
		'label' => __('Blog Sidebar Position', 'pankogut'),
		'section' => 'booky_layout_section',
		'settings' => 'booky_sidebar_position',
		'type' => 'select',
		'choices' => array(
			'right' => 'left',
			'left' => 'right'
		),
	));

	/*--------------------------------------------------------------
		Share
	--------------------------------------------------------------*/
	$wp_customize->add_setting('booky_share', array(
        'default' => 'inherit',
    ) );

	$wp_customize->add_control(
	    'booky_share',
	    array(
	        'label' => 'Social Share',
	        'section' => 'booky_layout_section',
	        'type' => 'select',
			'choices' => array(
				'inherit' => 'Displayed',
				'none' => 'Not Displayed'
			),
	));

/*--------------------------------------------------------------
		Google Fonts and Font Size
	--------------------------------------------------------------*/
	$wp_customize->add_section( 'booky_fonts_section' , array(
		'title' => __( 'Fonts', 'booky' ),
		'priority' => 20,
		'description' => __( 'Choose the Google Fonts, insert the link like http://fonts.googleapis.com/css?family=Raleway, then insert the Font Name (ex: Raleway) in the text area of the elements like Body.', 'booky' ),
	) );

	class booky_Customize_Fonts_Control extends WP_Customize_Control {
	    public $type = 'text';
	 
	    public function render_content() {
	        ?>
	            <label>
	                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	                <input type="text" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></input>
	            </label>
	        <?php
	    }
	}

	$wp_customize->add_setting( 'booky_body_font_link' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_body_font_link',
	        array(
	            'label' => 'Insert the Link Code',
	            'priority' => 1,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_body_font_link'
	        )
	    )
	);

	/* Body Font Name */
	$wp_customize->add_setting( 'booky_body_font_name' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_body_font_name',
	        array(
	            'label' => 'Body Font Name',
	            'priority' => 2,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_body_font_name'
	        )
	    )
	);

	/* Body Font Size */
	$wp_customize->add_setting( 'booky_body_font_size' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_body_font_size',
	        array(
	            'label' => 'Body Font Size (ex: 14px)',
	            'priority' => 3,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_body_font_size'
	        )
	    )
	);

	/* Site Title Font Name */
	$wp_customize->add_setting( 'booky_site_title_font_name' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_site_title_font_name',
	        array(
	            'label' => 'Site Title Font Name',
	            'priority' => 4,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_site_title_font_name'
	        )
	    )
	);

	/* Site Title Font Size */
	$wp_customize->add_setting( 'booky_site_title_font_size' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_site_title_font_size',
	        array(
	            'label' => 'Site Title Font Size (ex: 14px)',
	            'priority' => 5,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_site_title_font_size'
	        )
	    )
	);

	/* Headings Font Name */
	$wp_customize->add_setting( 'booky_heading_font_name' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_heading_font_name',
	        array(
	            'label' => 'Headings Font Name',
	            'priority' => 6,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_heading_font_name'
	        )
	    )
	);

	/* Headings H1 Font Size */
	$wp_customize->add_setting( 'booky_heading_h1_font_size' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_heading_h1_font_size',
	        array(
	            'label' => 'H1 Font Size (ex: 34px)',
	            'priority' => 7,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_heading_h1_font_size'
	        )
	    )
	);

	/* Headings H2 Font Size */
	$wp_customize->add_setting( 'booky_heading_h2_font_size' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_heading_h2_font_size',
	        array(
	            'label' => 'H2 Font Size (ex: 28px)',
	            'priority' => 8,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_heading_h2_font_size'
	        )
	    )
	);

	/* Headings H3 Font Size */
	$wp_customize->add_setting( 'booky_heading_h3_font_size' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_heading_h3_font_size',
	        array(
	            'label' => 'H3 Font Size (ex: 22px)',
	            'priority' => 9,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_heading_h3_font_size'
	        )
	    )
	);

	/* Headings H4 Font Size */
	$wp_customize->add_setting( 'booky_heading_h4_font_size' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_heading_h4_font_size',
	        array(
	            'label' => 'H4 Font Size (ex: 16px)',
	            'priority' => 10,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_heading_h4_font_size'
	        )
	    )
	);

	/* Headings H5 Font Size */
	$wp_customize->add_setting( 'booky_heading_h5_font_size' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_heading_h5_font_size',
	        array(
	            'label' => 'H5 Font Size (ex: 14px)',
	            'priority' => 11,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_heading_h5_font_size'
	        )
	    )
	);

	/* Headings H6 Font Size */
	$wp_customize->add_setting( 'booky_heading_h6_font_size' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_heading_h6_font_size',
	        array(
	            'label' => 'H6 Font Size (ex: 12px)',
	            'priority' => 12,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_heading_h6_font_size'
	        )
	    )
	);

	/* Post and Page Title Font Name */
	$wp_customize->add_setting( 'booky_post_font_name' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_post_font_name',
	        array(
	            'label' => 'Post and Page Title Font Name',
	            'priority' => 13,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_post_font_name'
	        )
	    )
	);

	/* Post and Page Title Font Size */
	$wp_customize->add_setting( 'booky_post_font_size' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_post_font_size',
	        array(
	            'label' => 'Post and Page Title Font Size (ex: 20px)',
	            'priority' => 14,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_post_font_size'
	        )
	    )
	);

	/* Navigation Font Name */
	$wp_customize->add_setting( 'booky_nav_font_name' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_nav_font_name',
	        array(
	            'label' => 'Navigation Font Name',
	            'priority' => 15,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_nav_font_name'
	        )
	    )
	);

	/* Navigation Font Size */
	$wp_customize->add_setting( 'booky_nav_font_size' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_nav_font_size',
	        array(
	            'label' => 'Navigation Font Size (ex: 20px)',
	            'priority' => 16,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_nav_font_size'
	        )
	    )
	);

	/* Widget Title Font Name */
	$wp_customize->add_setting( 'booky_widget_title_font_name' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_widget_title_font_name',
	        array(
	            'label' => 'Widget Title Font Name',
	            'priority' => 17,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_widget_title_font_name'
	        )
	    )
	);

	/* Widget Title Font Size */
	$wp_customize->add_setting( 'booky_widget_title_font_size' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Fonts_Control(
	        $wp_customize,
	        'booky_widget_title_font_size',
	        array(
	            'label' => 'Widget Title Font Size (ex: 14px)',
	            'priority' => 18,
	            'section' => 'booky_fonts_section',
	            'settings' => 'booky_widget_title_font_size'
	        )
	    )
	);

	/*--------------------------------------------------------------
		Colors
	--------------------------------------------------------------*/
	/* Body Font Color */
    $wp_customize->add_setting( 'booky_body_color', array(
        'default' => '#404040',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'booky_body_color', array(
		'label' => __( 'Body Font Color', 'booky' ),
		'section' => 'colors',
		'priority' => 1,
		'settings' => 'booky_body_color',
	) ) );

	/* Link Color */
    $wp_customize->add_setting( 'booky_link_color', array(
        'default' => '#404040',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'booky_link_color', array(
		'label' => __( 'Link Color', 'booky' ),
		'section' => 'colors',
		'priority' => 2,
		'settings' => 'booky_link_color',
	) ) );

	/* Link Hover Color */
    $wp_customize->add_setting( 'booky_hover_color', array(
        'default' => '#cccccc',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'booky_hover_color', array(
		'label' => __( 'Link Hover Color', 'booky' ),
		'section' => 'colors',
		'priority' => 3,
		'settings' => 'booky_hover_color',
	) ) );

	/* Site Title Font Color */
    $wp_customize->add_setting( 'booky_site_title_color', array(
        'default' => '#404040',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'booky_site_title_color', array(
		'label' => __( 'Site Title Font Color', 'booky' ),
		'priority' => 4,
		'section' => 'colors',
		'settings' => 'booky_site_title_color',
	) ) );

	/* Headings Font Color */
    $wp_customize->add_setting( 'booky_heading_color', array(
        'default' => '#404040',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'booky_heading_color', array(
		'label' => __( 'Headings Font Color', 'booky' ),
		'priority' => 5,
		'section' => 'colors',
		'settings' => 'booky_heading_color',
	) ) );

	/* Main Menu Text Color */
    $wp_customize->add_setting( 'booky_nav_text_color', array(
        'default' => '#404040',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'booky_nav_text_color', array(
		'label' => __( 'Main Menu Text Color', 'booky' ),
		'priority' => 6,
		'section' => 'colors',
		'settings' => 'booky_nav_text_color',
	) ) );

	/* Post Title Link Color */
    $wp_customize->add_setting( 'booky_post_color', array(
        'default' => '#404040',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'booky_post_color', array(
		'label' => __( 'Post Title Color', 'booky' ),
		'section' => 'colors',
		'priority' => 8,
		'settings' => 'booky_post_color',
	) ) );

	/* Post Title Link Hover Color */
    $wp_customize->add_setting( 'booky_post_hover_color', array(
        'default' => '#cccccc',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'booky_post_hover_color', array(
		'label' => __( 'Post Title Hover Color', 'booky' ),
		'priority' => 9,
		'section' => 'colors',
		'settings' => 'booky_post_hover_color',
	) ) );

	/* Widget Title Color */
    $wp_customize->add_setting( 'booky_widget_title_color', array(
        'default' => '#999999',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'booky_widget_title_color', array(
		'label' => __( 'Widget Title Color', 'booky' ),
		'section' => 'colors',
		'priority' => 11,
		'settings' => 'booky_widget_title_color',
	) ) );
	
	/* Widget Text Color */
    $wp_customize->add_setting( 'booky_widget_text_color', array(
        'default' => '#404040',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'booky_widget_text_color', array(
		'label' => __( 'Widget Text Color', 'booky' ),
		'section' => 'colors',
		'settings' => 'booky_widget_text_color',
	) ) );

	/* Icons Color */
    $wp_customize->add_setting( 'booky_icons_color', array(
        'default' => '#cccccc',
    ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'booky_icons_color', array(
		'label' => __( 'Icons Color', 'booky' ),
		'section' => 'colors',
		'priority' => 12,
		'settings' => 'booky_icons_color',
	) ) );

	/*--------------------------------------------------------------
		Footer Credits
	--------------------------------------------------------------*/
	$wp_customize->add_section( 'booky_footer_section' , array(
	    'title'       => __( 'Footer Credits', 'booky' ),
	    'priority'    => 80,
	    'description' => 'Custom Footer Credits',
	) );

	$wp_customize->add_setting('booky_footer');

	$wp_customize->add_control(
	    'booky_footer',
	    array(
	        'label' => 'Footer Credits',
	        'section' => 'booky_footer_section',
	        'type' => 'text',
	    )
	);

	/*--------------------------------------------------------------
		Custom CSS
	--------------------------------------------------------------*/
	class booky_Customize_Textarea_Control extends WP_Customize_Control {
	    public $type = 'textarea';
	 
	    public function render_content() {
	        ?>
	            <label>
	                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	            </label>
	        <?php
	    }
	}

	$wp_customize->add_section( 'booky_css_section' , array(
	    'title'       => __( 'Custom CSS', 'booky' ),
	    'priority'    => 90,
	    'description' => 'You can add your custom CSS',
	) );

	$wp_customize->add_setting( 'booky_css' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Textarea_Control(
	        $wp_customize,
	        'booky_css',
	        array(
	            'label' => 'Custom CSS',
	            'section' => 'booky_css_section',
	            'settings' => 'booky_css'
	        )
	    )
	);

	/*--------------------------------------------------------------
		Footer Scripts
	--------------------------------------------------------------*/
	$wp_customize->add_section( 'booky_scripts_section' , array(
	    'title'       => __( 'Custom Footer Scripts', 'booky' ),
	    'priority'    => 100,
	    'description' => 'You can add your custom Scripts in the footer without the tag "script". For example: google analytics.',
	) );

	$wp_customize->add_setting( 'booky_scripts' );
	 
	$wp_customize->add_control(
	    new booky_Customize_Textarea_Control(
	        $wp_customize,
	        'booky_scripts',
	        array(
	            'label' => 'Custom Scripts',
	            'section' => 'booky_scripts_section',
	            'settings' => 'booky_scripts'
	        )
	    )
	);
}
add_action('customize_register', 'booky_theme_customizer');

/**
 * Customizer Apply Style
 *
 * @since booky 1.0
 */
if ( ! function_exists( 'booky_apply_style' ) ) :
  	
  	function booky_apply_style() {	
		if ( get_theme_mod('booky_sidebar_position') || 
			 get_theme_mod('booky_share') || 
			 get_theme_mod('booky_body_font_link') || 
			 get_theme_mod('booky_body_font_name') || 
			 get_theme_mod('booky_body_font_size') || 
			 get_theme_mod('booky_site_title_font_name') || 
			 get_theme_mod('booky_site_title_font_size') || 
			 get_theme_mod('booky_heading_font_name') || 
		     get_theme_mod('booky_heading_h1_font_size') || 
		     get_theme_mod('booky_heading_h2_font_size') || 
		     get_theme_mod('booky_heading_h3_font_size') || 
		     get_theme_mod('booky_heading_h4_font_size') || 
		     get_theme_mod('booky_heading_h5_font_size') || 
		     get_theme_mod('booky_heading_h6_font_size') || 
			 get_theme_mod('booky_post_font_name') || 
			 get_theme_mod('booky_post_font_size') || 
			 get_theme_mod('booky_nav_font_name') || 
			 get_theme_mod('booky_nav_font_size') || 
			 get_theme_mod('booky_widget_title_font_name') || 
			 get_theme_mod('booky_widget_title_font_size') ||  
			 get_theme_mod('booky_body_color') || 
			 get_theme_mod('booky_link_color') || 
			 get_theme_mod('booky_hover_color') || 
			 get_theme_mod('booky_site_title_color') || 
			 get_theme_mod('booky_heading_color') || 
			 get_theme_mod('booky_nav_text_color') || 
			 get_theme_mod('booky_nav_bg_color') || 
			 get_theme_mod('booky_post_color') || 
			 get_theme_mod('booky_post_hover_color') || 
			 get_theme_mod('booky_widget_title_color') || 
			 get_theme_mod('booky_widget_text_color') || 
			 get_theme_mod('booky_icons_color') || 
			 get_theme_mod('booky_css')
		) { 
		?>
			<?php if ( get_theme_mod('booky_body_font_link') ) : ?>
				<link href='<?php echo get_theme_mod('booky_body_font_link');  ?>' rel='stylesheet' type='text/css'>
			<?php endif; ?>
			<style id="booky-layout-settings">
				<?php if ( get_theme_mod('booky_sidebar_position') ) : ?>
					@media (min-width: 1024px) {
						.blog .column,
						.single .column {
							float: <?php echo get_theme_mod('booky_sidebar_position'); ?>;
						}
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_share') ) : ?>
					.single-box {
						display: <?php echo get_theme_mod('booky_share');  ?>;
					}
				<?php endif; ?>
			</style>
			<style id="booky-style-settings">
				<?php if ( get_theme_mod('booky_body_font_name') ) : ?>
					body,
					button,
					input,
					select,
					textarea {
						font-family: '<?php echo get_theme_mod('booky_body_font_name');  ?>';
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_body_font_size') ) : ?>
					body,
					button,
					input,
					select,
					textarea {
						font-size: <?php echo get_theme_mod('booky_body_font_size');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_body_color') ) : ?>
					body,
					button,
					input,
					select,
					textarea {
						color: <?php echo get_theme_mod('booky_body_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_site_title_font_name') ) : ?>
					.site-title {
						font-family: '<?php echo get_theme_mod('booky_site_title_font_name');  ?>';
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_site_title_font_size') ) : ?>
					.site-title {
						font-size: <?php echo get_theme_mod('booky_site_title_font_size');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_site_title_color') ) : ?>
					.site-title a {
						color: <?php echo get_theme_mod('booky_site_title_color');  ?>;
					}
					.site-description {
						color: <?php echo get_theme_mod('booky_site_title_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_heading_font_name') ) : ?>
					h1, h2, h3, h4, h5, h6 {
						font-family: '<?php echo get_theme_mod('booky_heading_font_name');  ?>';
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_heading_h1_font_size') || 
						   get_theme_mod('booky_heading_h2_font_size') || 
						   get_theme_mod('booky_heading_h3_font_size') || 
						   get_theme_mod('booky_heading_h4_font_size') || 
						   get_theme_mod('booky_heading_h5_font_size') || 
						   get_theme_mod('booky_heading_h6_font_size')
						 ) : ?>
					h1 { font-size: <?php echo get_theme_mod('booky_heading_h1_font_size');  ?>; }
					h2 { font-size: <?php echo get_theme_mod('booky_heading_h2_font_size');  ?>; }
					h3 { font-size: <?php echo get_theme_mod('booky_heading_h3_font_size');  ?>; }
					h4 { font-size: <?php echo get_theme_mod('booky_heading_h4_font_size');  ?>; }
					h5 { font-size: <?php echo get_theme_mod('booky_heading_h5_font_size');  ?>; }
					h6 { font-size: <?php echo get_theme_mod('booky_heading_h6_font_size');  ?>; }
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_heading_color') ) : ?>
					h1, h2, h3, h4, h5, h6 {
						color: <?php echo get_theme_mod('booky_heading_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_link_color') ) : ?>
					a,
					a:visited {
						color: <?php echo get_theme_mod('booky_link_color');  ?>;
					}
				<?php endif; ?>
			
				<?php if ( get_theme_mod('booky_hover_color') ) : ?>
					a:hover,
					a:focus,
					a:active {
						color: <?php echo get_theme_mod('booky_hover_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_post_font_name') ) : ?>
					.entry-title,
					.entry-title a {
						font-family: '<?php echo get_theme_mod('booky_post_font_name');  ?>';
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_post_font_size') ) : ?>
					.entry-title,
					.entry-title a {
						font-size: <?php echo get_theme_mod('booky_post_font_size');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_post_color') ) : ?>
					.entry-title,
					.entry-title a {
						color: <?php echo get_theme_mod('booky_post_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_post_hover_color') ) : ?>
					.entry-title a:hover {
						color: <?php echo get_theme_mod('booky_post_hover_color');  ?> !important;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_nav_font_name') ) : ?>
					.main-navigation {
						font-family: '<?php echo get_theme_mod('booky_nav_font_name');  ?>';
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_nav_font_size') ) : ?>
					.main-navigation {
						font-size: <?php echo get_theme_mod('booky_nav_font_size');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_nav_text_color') ) : ?>
					.main-navigation a {
						color: <?php echo get_theme_mod('booky_nav_text_color');  ?> !important;
					}
					@media screen and (max-width: 1023px) {
						button.menu-toggle {
							color: <?php echo get_theme_mod('booky_nav_text_color');  ?>;
						}
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_nav_bg_color') ) : ?>
					.main-navigation {
						background-color: <?php echo get_theme_mod('booky_nav_bg_color');  ?>;
					}

					.main-navigation ul ul {
						background-color: <?php echo get_theme_mod('booky_nav_bg_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_widget_title_font_name') ) : ?>
					.widget-title {
						font-family: '<?php echo get_theme_mod('booky_widget_title_font_name');  ?>';
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_widget_title_font_size') ) : ?>
					.widget-title {
						font-size: <?php echo get_theme_mod('booky_widget_title_font_size');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_widget_title_color') ) : ?>
					.widget-title {
						color: <?php echo get_theme_mod('booky_widget_title_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_widget_text_color') ) : ?>
					.widget,
					.widget a {
						color: <?php echo get_theme_mod('booky_widget_text_color');  ?>;
					}
				<?php endif; ?>

				<?php if ( get_theme_mod('booky_icons_color') ) : ?>
					.social {
						background-color: <?php echo get_theme_mod('booky_icons_color');  ?>;
					}
				<?php endif; ?>
			</style>
			<style id="booky-custom-css">
				<?php if ( get_theme_mod('booky_css') ) : ?>
					<?php echo get_theme_mod('booky_css');  ?>;
				<?php endif; ?>
			</style>
		<?php
    }
}
endif;
add_action( 'wp_head', 'booky_apply_style' );

/**
 * Customizer Footer
 *
 * @since booky 1.0
 */
if ( ! function_exists( 'booky_apply_footer' ) ) :
  	
  	function booky_apply_footer() {	
		if ( get_theme_mod('booky_scripts') ) { 
		?>

		<script id="booky-custom-scriptss">
			<?php if ( get_theme_mod('booky_scripts') ) : ?>
				<?php echo get_theme_mod('booky_scripts');  ?>;
			<?php endif; ?>
		</script>
		<?php
    }
}
endif;
add_action('wp_footer', 'booky_apply_footer');