<?php
/**
 * booky Shortcodes
 *
 * @package booky
 * @since booky 1.0
 */

/**
 * TABLE OF CONTENTS:
 ***********************
 * 1.0 - Dropcap
 * 2.0 - Slider
 * 3.0 - Columns
 * 4.0 - Buttons
 * 5.0 - Alerts
 * 6.0 - Icons
 * 7.0 - Highlights
 * 8.0 - Dividers
 * 9.0 - Archive
 ***********************
 */

/**
 * Remove <p></p> before and after the shortcode
 *
 * @since booky 1.0
 */
function shortcode_empty_paragraph_fix($content){   
    $array = array (
        '<p>[' => '[', 
        ']</p>' => ']', 
        ']<br />' => ']'
    );

    $content = strtr($content, $array);

    return $content;
}
add_filter('the_content', 'shortcode_empty_paragraph_fix');

/**
 * 1.0 Dropcap
 *
 * @since booky 1.0
 */
function booky_dropcap_shortcode( $atts, $content = null ) {
	return '<span class="dropcap">' . $content . '</span>';
}
add_shortcode( 'dropcap', 'booky_dropcap_shortcode' );

/**
 * 2.0 Slider
 *
 * @since booky 1.0
 */
function booky_responsive_slider($atts) {

	$slides = new WP_Query(
		array( 
			'orderby' => 'menu_order', 
			'order' => 'ASC' , 
			'post_type' => 'slides'
		)
	);

	$slider = '<div class="responsive-slider flexslider"><ul class="slides">';
	
	if($slides->have_posts()) : while($slides->have_posts()) : $slides->the_post();
				   
	$slider .= '<li><div id="slide-' . get_the_ID() . '" class="slide">';
						
	global $post;

		if ( has_post_thumbnail() ) {

			if ( get_post_meta( $post->ID, "_slide_link_url", true ) ) 
				$slider .= '<a href="' . get_post_meta( $post->ID, "_slide_link_url", true ) . '" title="' .  the_title_attribute ( array( 'echo' => 0 ) ) . '" >';

				$slider .= get_the_post_thumbnail( $post->ID, 'slide-thumbnail', array( 'class' => 'slide-thumbnail' ) );

			if ( get_post_meta( $post->ID, "_slide_link_url", true ) ) 
				$slider .= '</a>';

		}

	$slider .= '<h5 class="slide-title"><a href="' . get_post_meta( $post->ID, "_slide_link_url", true ) . '" title="' . the_title_attribute ( array( 'echo' => 0 ) ) . '" >' . get_the_title() . '</a></h5>';

	$slider .= '</div></li>';

	endwhile;

	wp_reset_query();

	return $slider . '</ul></div>';

	endif;
}
add_shortcode( 'slider', 'booky_responsive_slider' );

/**
 * 3.0 Columns
 *
 * @since booky 1.0
 */
function booky_columns() {
	add_shortcode('row-start', 'booky_row_start');
	add_shortcode('row-end', 'booky_row_end');
	add_shortcode('half', 'booky_half');
	add_shortcode('one-third', 'booky_one_third');
	add_shortcode('two-thirds', 'booky_two_thirds');
	add_shortcode('one-fourth', 'booky_one_fourth');
	add_shortcode('three-fourths', 'booky_three_fourths');
	add_shortcode('one-fifth', 'booky_one_fifth');
	add_shortcode('four-fifths', 'booky_four_fifths');
	add_shortcode('one-sixth', 'booky_one_sixth');
	add_shortcode('five-sixths', 'booky_five_sixths');
}
add_action( 'wp_head', 'booky_columns' );

function booky_row_start( $atts ) {
	return '<div class="row-shortcode clear">';
}

function booky_row_end( $atts ) {
	return '</div>';
}

function booky_half( $atts, $content = null ) {
	return '<div class="column half">' . do_shortcode($content) . '</div>';
}

function booky_one_third( $atts, $content = null ) {
	return '<div class="column third">' . do_shortcode($content) . '</div>';
}

function booky_two_thirds( $atts, $content = null ) {
	return '<div class="column two-thirds">' . do_shortcode($content) . '</div>';
}

function booky_one_fourth( $atts, $content = null ) {
	return '<div class="column fourth">' . do_shortcode($content) . '</div>';
}

function booky_three_fourths( $atts, $content = null ) {
	return '<div class="column three-fourths">' . do_shortcode($content) . '</div>';
}

function booky_one_fifth( $atts, $content = null ) {
	return '<div class="column fifth">' . do_shortcode($content) . '</div>';
}

function booky_four_fifths( $atts, $content = null ) {
	return '<div class="column four-fifths">' . do_shortcode($content) . '</div>';
}

function booky_one_sixth( $atts, $content = null ) {
	return '<div class="column sixth">' . do_shortcode($content) . '</div>';
}

function booky_five_sixths( $atts, $content = null ) {
	return '<div class="column five-sixths">' . do_shortcode($content) . '</div>';
}

/**
 * 4.0 Buttons
 *
 * @since booky 1.0
 */
function booky_button( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'url' => '#',
		'target' => '_self',
		'color' => 'grey',
		'size' => 'small',
		'type' => 'square',
		'display' => '',
		'title' => '',
		'class' => '',
		'rel' => ''
    ), $atts));
	
   return '<a target="'.$target.'" class="button '.$size.' '.$color.' '. $type .' '. $class .' '. $display .'" href="'.$url.'" title="' . $title . '" rel="' . $rel . '">' . do_shortcode($content) . '</a>';
}
add_shortcode('button', 'booky_button');

/**
 * 5.0 Alerts
 *
 * @since booky 1.0
 */
function booky_alert( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'color' => 'grey',
		'type' => 'square',
		'text_align' => 'center',
		'width' => '100%'
    ), $atts));
	
   return '<div class="alert '.$color.' '. $type .' '. $text_align .'" style="width:'.$width.';">' . do_shortcode($content) . '</div>';
}
add_shortcode('alert', 'booky_alert');

/**
 * 6.0 Icons
 *
 * @since booky 1.0
 */
function booky_icon( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'type' => '',
		'size' => '32px'
    ), $atts));
	
   return '<span class="genericon genericon-'.$type.'" style="font-size:'.$size.'; width:'.$size.'; height:'.$size.';">' . do_shortcode($content) . '</span>';
}
add_shortcode('icon', 'booky_icon');

/**
 * 7.0 Highlights
 *
 * @since booky 1.0
 */
function booky_highlight( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'color'	=> 'grey',
		'class'	=> ''
	  ), $atts ));
	  return '<span class="highlight ' . $color . ' ' . $class . '">' . do_shortcode($content) . '</span>';

}
add_shortcode('highlight', 'booky_highlight');

/**
 * 8.0 Dividers
 *
 * @since booky 1.0
 */
function booky_divider( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'color'	=> 'grey',
		'type'	=> 'solid',
		'width'	=> '100%',
		'class'	=> ''
	  ), $atts ));
	  return '<hr class="divider ' . $color . ' ' . $type . ' ' . $class . '" style="width:'.$width.';">' . do_shortcode($content) . '</span>';

}
add_shortcode('divider', 'booky_divider');

/**
 * 9.0 Archive
 *
 * @since booky 1.0
 */
function booky_archive_shortcode($atts, $content = null){
   	
   	extract(shortcode_atts(
   		array(
			'posts' => '',
			'cat' => '',
			'orderby' => '',
			'order' => ''
		), 
	$atts));

	$loop = new WP_Query(
		array( 
			'order' => $order, 
			'showposts' => $posts, 
			'cat' => $cat,
			'orderby' => $orderby
		)
	);

	$list = '<h3 class="shortcode-content">' . $content . '</h3><ul class="shortcode-archive">';

	if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post();

	$list .= '<li><span class="shortcode-archive-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></span><span class="shortcode-date">' . get_the_date() . '</span></li>';

	endwhile;
	
	wp_reset_query();
	
	return $list . '</ul>';

	endif;

}
add_shortcode('archive', 'booky_archive_shortcode');