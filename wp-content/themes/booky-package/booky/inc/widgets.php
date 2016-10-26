<?php
/**
 * Custom Widgets
 *
 * @package booky
 * @since booky 1.0
 */

/**
 * Social Links
 *
 * @since booky 1.0
 */
class social_booky extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	function social_booky() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget-social', 'description' => 'Show Icons of your Social Links.', 'booky' );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'social_booky' );

		/* Create the widget. */
		$this->WP_Widget( 'social_booky', 'Social Links (booky)', $widget_ops, $control_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* User-selected settings. */
		$title = apply_filters( 'widget_title', $instance['title'] );
		$feed = $instance['feed'];
		$linkedin = $instance['linkedin'];
		$twitter = $instance['twitter'];
		$facebook = $instance['facebook'];
		$googleplus = $instance['googleplus'];
		$pinterest = $instance['pinterest'];
		$instagram = $instance['instagram'];
		$flickr = $instance['flickr'];
		$youtube = $instance['youtube'];
		$vimeo = $instance['vimeo'];
		$dribbble = $instance['dribbble'];
		$behance = $instance['behance'];
		$github = $instance['github'];
		$skype = $instance['skype'];
		$tumblr = $instance['tumblr'];
		$wordpress = $instance['wordpress'];


		/* Before widget (defined by themes). */
		echo $before_widget;

		if ( $title )
			echo $before_title . $title . $after_title;

		if ( $feed )
			echo '<span><a href="' . $feed . '" title="' . __( 'Feed', 'booky' ) . '" class="' . __( 'social social-feed', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>';

		if ( $linkedin )
			echo '<span><a href="' . $linkedin . '" title="' . __( 'Linkedin', 'booky' ) . '" class="' . __( 'social social-linkedin', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>';

		if ( $twitter )
			echo '<span><a href="' . $twitter . '" title="' . __( 'Twitter', 'booky' ) . '" class="' . __( 'social social-twitter', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>';

		if ( $facebook )
			echo '<span><a href="' . $facebook . '" title="' . __( 'Facebook', 'booky' ) . '" class="' . __( 'social social-facebook', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>';

		if ( $googleplus )
			echo '<span><a href="' . $googleplus . '" title="' . __( 'Googleplus', 'booky' ) . '" class="' . __( 'social social-googleplus', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>';

		if ( $pinterest )
			echo '<span><a href="' . $pinterest . '" title="' . __( 'Pinterest', 'booky' ) . '" class="' . __( 'social social-pinterest', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>';

		if ( $instagram )
			echo '<span><a href="' . $instagram . '" title="' . __( 'Instagram', 'booky' ) . '" class="' . __( 'social social-instagram', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>';

		if ( $flickr )
			echo '<span><a href="' . $flickr . '" title="' . __( 'Flickr', 'booky' ) . '" class="' . __( 'social social-flickr', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>';

		if ( $youtube )
			echo '<span><a href="' . $youtube . '" title="' . __( 'Youtube', 'booky' ) . '" class="' . __( 'social social-youtube', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>';

		if ( $vimeo )
			echo '<span><a href="' . $vimeo . '" title="' . __( 'Vimeo', 'booky' ) . '" class="' . __( 'social social-vimeo', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>';

		if ( $dribbble )
			echo '<span><a href="' . $dribbble . '" title="' . __( 'Dribbble', 'booky' ) . '" class="' . __( 'social social-dribbble', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>';

		if ( $behance )
			echo '<span><a href="' . $behance . '" title="' . __( 'Behance', 'booky' ) . '" class="' . __( 'social-fontello social-behance', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>';

		if ( $github )
			echo '<span><a href="' . $github . '" title="' . __( 'Github', 'booky' ) . '" class="' . __( 'social social-github', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>';

		if ( $skype )
			echo '<span><a href="' . $skype . '" title="' . __( 'Skype', 'booky' ) . '" class="' . __( 'social social-skype', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>';

		if ( $tumblr )
			echo '<span><a href="' . $tumblr . '" title="' . __( 'Tumblr', 'booky' ) . '" class="' . __( 'social social-tumblr', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>';

		if ( $wordpress )
			echo '<span><a href="' . $wordpress . '" title="' . __( 'Wordpress', 'booky' ) . '" class="' . __( 'social social-wordpress', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>';
		
		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['feed'] = $new_instance['feed'];
		$instance['linkedin'] = $new_instance['linkedin'];
		$instance['twitter'] = $new_instance['twitter'];
		$instance['facebook'] = $new_instance['facebook'];
		$instance['googleplus'] = $new_instance['googleplus'];
		$instance['pinterest'] = $new_instance['pinterest'];
		$instance['instagram'] = $new_instance['instagram'];
		$instance['flickr'] = $new_instance['flickr'];
		$instance['youtube'] = $new_instance['youtube'];
		$instance['vimeo'] = $new_instance['vimeo'];
		$instance['dribbble'] = $new_instance['dribbble'];
		$instance['behance'] = $new_instance['behance'];
		$instance['github'] = $new_instance['github'];
		$instance['skype'] = $new_instance['skype'];
		$instance['tumblr'] = $new_instance['tumblr'];
		$instance['wordpress'] = $new_instance['wordpress'];

		return $instance;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 
						'title' => 'Social Links', 
						'feed' => 'http://www.website.com/feed/', 
						'linkedin' => '',
						'twitter' => '',
						'facebook' => '',
						'googleplus' => '',
						'pinterest' => '',
						'instagram' => '',
						'flickr' => '',
						'youtube' => '',
						'vimeo' => '',
						'dribbble' => '',
						'behance' => '',
						'github' => '',
						'skype' => '',
						'tumblr' => '',
						'tumblr' => ''
					);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'feed' ); ?>"><?php _e('Feed:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'feed' ); ?>" name="<?php echo $this->get_field_name( 'feed' ); ?>" value="<?php echo $instance['feed']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e('Linkedin:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" value="<?php echo $instance['linkedin']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e('Twitter:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" value="<?php echo $instance['twitter']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e('Facebook:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php echo $instance['facebook']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'googleplus' ); ?>"><?php _e('Googleplus:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'googleplus' ); ?>" name="<?php echo $this->get_field_name( 'googleplus' ); ?>" value="<?php echo $instance['googleplus']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php _e('Pinterest:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" value="<?php echo $instance['pinterest']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e('Instagram:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" value="<?php echo $instance['instagram']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'flickr' ); ?>"><?php _e('Flickr:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'flickr' ); ?>" name="<?php echo $this->get_field_name( 'flickr' ); ?>" value="<?php echo $instance['flickr']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e('Youtube:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" value="<?php echo $instance['youtube']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'vimeo' ); ?>"><?php _e('Vimeo:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'vimeo' ); ?>" name="<?php echo $this->get_field_name( 'vimeo' ); ?>" value="<?php echo $instance['vimeo']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'dribbble' ); ?>"><?php _e('Dribbble:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'dribbble' ); ?>" name="<?php echo $this->get_field_name( 'dribbble' ); ?>" value="<?php echo $instance['dribbble']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'behance' ); ?>"><?php _e('Behance:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'behance' ); ?>" name="<?php echo $this->get_field_name( 'behance' ); ?>" value="<?php echo $instance['behance']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'github' ); ?>"><?php _e('Github:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'github' ); ?>" name="<?php echo $this->get_field_name( 'github' ); ?>" value="<?php echo $instance['github']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'skype' ); ?>"><?php _e('Skype:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'skype' ); ?>" name="<?php echo $this->get_field_name( 'skype' ); ?>" value="<?php echo $instance['skype']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'tumblr' ); ?>"><?php _e('Tumblr:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'tumblr' ); ?>" name="<?php echo $this->get_field_name( 'tumblr' ); ?>" value="<?php echo $instance['tumblr']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'wordpress' ); ?>"><?php _e('Wordpress:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'wordpress' ); ?>" name="<?php echo $this->get_field_name( 'wordpress' ); ?>" value="<?php echo $instance['wordpress']; ?>" style="width:100%;" />
		</p>

		<?php
	}

}

function register_social_booky() {
    register_widget( 'social_booky' );
}
add_action( 'widgets_init', 'register_social_booky' );

/**
 * About Widget
 *
 * @since booky 1.0
 */
class about_booky extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	function about_booky() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget-about', 'description' => 'About Widget with your image and description.', 'booky' );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'about_booky' );

		/* Create the widget. */
		$this->WP_Widget( 'about_booky', 'About (booky)', $widget_ops, $control_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* User-selected settings. */
		$title = apply_filters( 'widget_title', $instance['title'] );
		$imageurl = $instance['imageurl'];
		$imagealt = $instance['imagealt'];
		$imagewidth = $instance['imagewidth'];
		$imageheight = $instance['imageheight'];
		$aboutdescription = $instance['aboutdescription'];
		$feed = $instance['feed'];
		$linkedin = $instance['linkedin'];
		$twitter = $instance['twitter'];
		$facebook = $instance['facebook'];
		$googleplus = $instance['googleplus'];
		$pinterest = $instance['pinterest'];
		$instagram = $instance['instagram'];
		$flickr = $instance['flickr'];
		$youtube = $instance['youtube'];
		$vimeo = $instance['vimeo'];
		$dribbble = $instance['dribbble'];
		$behance = $instance['behance'];
		$github = $instance['github'];
		$skype = $instance['skype'];
		$tumblr = $instance['tumblr'];
		$wordpress = $instance['wordpress'];

		echo $before_widget; 
		?>

			<div class="about">
				<?php if($title != '') echo '<h4 class="widget-title">'.$title.'</h4>'; ?>

				<div class="about-image">
					<img src="<?php echo $imageurl; ?>" width="<?php echo $imagewidth; ?>" height="<?php echo $imageheight; ?>" class="about-img" alt="<?php echo $imagealt; ?>">
				</div>
				<div class="about-description">
					<p><?php echo $aboutdescription; ?></p>
					<p class="about-social">
						<?php if($feed != '') echo '<span><a href="' . $feed . '" title="' . __( 'Feed', 'booky' ) . '" class="' . __( 'social social-feed', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>'; ?>
						<?php if($linkedin != '') echo '<span><a href="' . $linkedin . '" title="' . __( 'Linkedin', 'booky' ) . '" class="' . __( 'social social-linkedin', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>'; ?>
						<?php if($twitter != '') echo '<span><a href="' . $twitter . '" title="' . __( 'Twitter', 'booky' ) . '" class="' . __( 'social social-twitter', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>'; ?>
						<?php if($facebook != '') echo '<span><a href="' . $facebook . '" title="' . __( 'Facebook', 'booky' ) . '" class="' . __( 'social social-facebook', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>'; ?>
						<?php if($googleplus != '') echo '<span><a href="' . $googleplus . '" title="' . __( 'Googleplus', 'booky' ) . '" class="' . __( 'social social-googleplus', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>'; ?>
						<?php if($pinterest != '') echo '<span><a href="' . $pinterest . '" title="' . __( 'Pinterest', 'booky' ) . '" class="' . __( 'social social-pinterest', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>'; ?>
						<?php if($instagram != '') echo '<span><a href="' . $instagram . '" title="' . __( 'Instagram', 'booky' ) . '" class="' . __( 'social social-instagram', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>'; ?>
						<?php if($flickr != '') echo '<span><a href="' . $flickr . '" title="' . __( 'Flickr', 'booky' ) . '" class="' . __( 'social social-flickr', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>'; ?>
						<?php if($youtube != '') echo '<span><a href="' . $youtube . '" title="' . __( 'Youtube', 'booky' ) . '" class="' . __( 'social social-youtube', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>'; ?>
						<?php if($vimeo != '') echo '<span><a href="' . $vimeo . '" title="' . __( 'Vimeo', 'booky' ) . '" class="' . __( 'social social-vimeo', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>'; ?>
						<?php if($dribbble != '') echo '<span><a href="' . $dribbble . '" title="' . __( 'Dribbble', 'booky' ) . '" class="' . __( 'social social-dribbble', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>'; ?>
						<?php if($behance != '') echo '<span><a href="' . $behance . '" title="' . __( 'Behance', 'booky' ) . '" class="' . __( 'social-fontello social-behance', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>'; ?>
						<?php if($github != '') echo '<span><a href="' . $github . '" title="' . __( 'Github', 'booky' ) . '" class="' . __( 'social social-github', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>'; ?>
						<?php if($skype != '') echo '<span><a href="' . $skype . '" title="' . __( 'Skype', 'booky' ) . '" class="' . __( 'social social-skype', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>'; ?>
						<?php if($tumblr != '') echo '<span><a href="' . $tumblr . '" title="' . __( 'Tumblr', 'booky' ) . '" class="' . __( 'social social-tumblr', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>'; ?>
						<?php if($wordpress != '') echo '<span><a href="' . $wordpress . '" title="' . __( 'Wordpress', 'booky' ) . '" class="' . __( 'social social-wordpress', 'booky' ) . '" target="' . __( '_blank', 'booky' ) . '"></a></span>'; ?>
					</p>
				</div>
			</div>

		<?php
		echo $after_widget;
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['imageurl'] = $new_instance['imageurl'];
		$instance['imagealt'] = $new_instance['imagealt'];
		$instance['imagewidth'] = $new_instance['imagewidth'];
		$instance['imageheight'] = $new_instance['imageheight'];
		$instance['aboutdescription'] = $new_instance['aboutdescription'];
		$instance['feed'] = $new_instance['feed'];
		$instance['linkedin'] = $new_instance['linkedin'];
		$instance['twitter'] = $new_instance['twitter'];
		$instance['facebook'] = $new_instance['facebook'];
		$instance['googleplus'] = $new_instance['googleplus'];
		$instance['pinterest'] = $new_instance['pinterest'];
		$instance['instagram'] = $new_instance['instagram'];
		$instance['flickr'] = $new_instance['flickr'];
		$instance['youtube'] = $new_instance['youtube'];
		$instance['vimeo'] = $new_instance['vimeo'];
		$instance['dribbble'] = $new_instance['dribbble'];
		$instance['behance'] = $new_instance['behance'];
		$instance['github'] = $new_instance['github'];
		$instance['skype'] = $new_instance['skype'];
		$instance['tumblr'] = $new_instance['tumblr'];
		$instance['wordpress'] = $new_instance['wordpress'];

		return $instance;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 
						'title' => 'About Me', 
						'imageurl' => 'http://...', 
						'imagealt' => '',  
						'imagewidth' => '230', 
						'imageheight' => '230',
						'aboutdescription' => '',
						'feed' => 'http://www.website.com/feed/', 
						'linkedin' => '',
						'twitter' => '',
						'facebook' => '',
						'googleplus' => '',
						'pinterest' => '',
						'instagram' => '',
						'flickr' => '',
						'youtube' => '',
						'vimeo' => '',
						'dribbble' => '',
						'behance' => '',
						'github' => '',
						'skype' => '',
						'tumblr' => '',
						'tumblr' => ''
					);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'imageurl' ); ?>"><?php _e('Image URL:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'imageurl' ); ?>" name="<?php echo $this->get_field_name( 'imageurl' ); ?>" value="<?php echo $instance['imageurl']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'imagealt' ); ?>"><?php _e('Image ALT:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'imagealt' ); ?>" name="<?php echo $this->get_field_name( 'imagealt' ); ?>" value="<?php echo $instance['imagealt']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'imagewidth' ); ?>"><?php _e('Image Width:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'imagewidth' ); ?>" name="<?php echo $this->get_field_name( 'imagewidth' ); ?>" value="<?php echo $instance['imagewidth']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'imageheight' ); ?>"><?php _e('Image Height:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'imageheight' ); ?>" name="<?php echo $this->get_field_name( 'imageheight' ); ?>" value="<?php echo $instance['imageheight']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'aboutdescription' ); ?>"><?php _e('About Description:','booky'); ?></label>
			<textarea id="<?php echo $this->get_field_id( 'aboutdescription' ); ?>" name="<?php echo $this->get_field_name( 'aboutdescription' ); ?>" rows="12" cols="20" style="width:100%;"><?php echo $instance['aboutdescription']; ?></textarea>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'feed' ); ?>"><?php _e('Feed:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'feed' ); ?>" name="<?php echo $this->get_field_name( 'feed' ); ?>" value="<?php echo $instance['feed']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e('Linkedin:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" value="<?php echo $instance['linkedin']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e('Twitter:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" value="<?php echo $instance['twitter']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e('Facebook:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php echo $instance['facebook']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'googleplus' ); ?>"><?php _e('Googleplus:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'googleplus' ); ?>" name="<?php echo $this->get_field_name( 'googleplus' ); ?>" value="<?php echo $instance['googleplus']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php _e('Pinterest:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" value="<?php echo $instance['pinterest']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e('Instagram:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" value="<?php echo $instance['instagram']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'flickr' ); ?>"><?php _e('Flickr:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'flickr' ); ?>" name="<?php echo $this->get_field_name( 'flickr' ); ?>" value="<?php echo $instance['flickr']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e('Youtube:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" value="<?php echo $instance['youtube']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'vimeo' ); ?>"><?php _e('Vimeo:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'vimeo' ); ?>" name="<?php echo $this->get_field_name( 'vimeo' ); ?>" value="<?php echo $instance['vimeo']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'dribbble' ); ?>"><?php _e('Dribbble:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'dribbble' ); ?>" name="<?php echo $this->get_field_name( 'dribbble' ); ?>" value="<?php echo $instance['dribbble']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'behance' ); ?>"><?php _e('Behance:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'behance' ); ?>" name="<?php echo $this->get_field_name( 'behance' ); ?>" value="<?php echo $instance['behance']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'github' ); ?>"><?php _e('Github:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'github' ); ?>" name="<?php echo $this->get_field_name( 'github' ); ?>" value="<?php echo $instance['github']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'skype' ); ?>"><?php _e('Skype:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'skype' ); ?>" name="<?php echo $this->get_field_name( 'skype' ); ?>" value="<?php echo $instance['skype']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'tumblr' ); ?>"><?php _e('Tumblr:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'tumblr' ); ?>" name="<?php echo $this->get_field_name( 'tumblr' ); ?>" value="<?php echo $instance['tumblr']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'wordpress' ); ?>"><?php _e('Wordpress:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'wordpress' ); ?>" name="<?php echo $this->get_field_name( 'wordpress' ); ?>" value="<?php echo $instance['wordpress']; ?>" style="width:100%;" />
		</p>

		<?php
	}

}

function register_about_booky() {
    register_widget( 'about_booky' );
}
add_action( 'widgets_init', 'register_about_booky' );

/**
 * Instagram Widget
 *
 * @since booky 1.0
 */
class instagram_booky extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	function instagram_booky() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'widget-instagram', 'description' => 'Instagram Widget with images from your instagram feed.', 'booky' );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'instagram_booky' );

		/* Create the widget. */
		$this->WP_Widget( 'instagram_booky', 'Instagram (booky)', $widget_ops, $control_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* User-selected settings. */
		$title = apply_filters( 'widget_title', $instance['title'] );
		$username = $instance['username'];
		$number = $instance['number'];
		$customsize = $instance['customsize'];

		echo $before_widget; 
		?>

			<div class="instagram-wrap">
				<?php if($title != '') echo '<h4 class="widget-title">'.$title.'</h4>'; ?>
				<?php if($username != '') {
					$images_array = $this->scrape_instagram($username, $number);

					if ( is_wp_error($images_array) ) {
					   echo $images_array->get_error_message();
					} else {
						?><ul class="instagram-pics"><?php
						foreach ($images_array as $image) {
							echo '<li><a href="'.$image['link'].'" target="_blank"><img src="'.$image['large']['url'].'"  alt="'.$image['description'].'" title="'.$image['description'].'" width="'.$customsize.'" height="'.$customsize.'"/></a></li>';
						}
						?></ul><?php
					}
				}?>
			</div>

		<?php
		echo $after_widget;
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['username'] = trim(strip_tags($new_instance['username']));
		$instance['number'] = !absint($new_instance['number']) ? 6 : $new_instance['number'];
		$instance['customsize'] = $new_instance['customsize'];

		return $instance;
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	function form( $instance ) {

		$instance = wp_parse_args( (array) $instance, 
			array( 
				'title' => __('Instagram','booky'), 
				'username' => '', 
				'number' => 6, 
				'customsize' => '120'
				) 
			);
		$title = esc_attr($instance['title']);
		$username = esc_attr($instance['username']);
		$number = absint($instance['number']);
		$customsize = esc_attr($instance['customsize']);
		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'username' ); ?>"><?php _e('Username:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'username' ); ?>" name="<?php echo $this->get_field_name( 'username' ); ?>" type="text" value="<?php echo $instance['username']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e('Number of photos:','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $instance['number']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'customsize' ); ?>"><?php _e('Custom Size (suggested 110):','booky'); ?></label>
			<input id="<?php echo $this->get_field_id( 'customsize' ); ?>" name="<?php echo $this->get_field_name( 'customsize' ); ?>" value="<?php echo $instance['customsize']; ?>" style="width:100%;" />
		</p>

		<?php
	}

	// based on https://gist.github.com/cosmocatalano/4544576
	function scrape_instagram($username, $slice = 9) {

		if (false === ($instagram = get_transient('instagram-photos-'.sanitize_title_with_dashes($username)))) {
			
			$remote = wp_remote_get('http://instagram.com/'.trim($username));

			if (is_wp_error($remote)) 
	  			return new WP_Error('site_down', __('Unable to communicate with Instagram.','booky'));

  			if ( 200 != wp_remote_retrieve_response_code( $remote ) ) 
  				return new WP_Error('invalid_response', __('Instagram did not return a 200.','booky'));

			$shards = explode('window._sharedData = ', $remote['body']);
			$insta_json = explode(';</script>', $shards[1]);
			$insta_array = json_decode($insta_json[0], TRUE);

			if (!$insta_array)
	  			return new WP_Error('bad_json', __('Instagram has returned invalid data.','booky'));

			$images = $insta_array['entry_data']['UserProfile'][0]['userMedia'];

			$instagram = array();
			foreach ($images as $image) {

				if ($image['type'] == 'image' && $image['user']['username'] == $username) {

					$instagram[] = array(
						'description' 	=> $image['caption']['text'],
						'link' 			=> $image['link'],
						'time'			=> $image['created_time'],
						'comments' 		=> $image['comments']['count'],
						'likes' 		=> $image['likes']['count'],
						'large' 		=> $image['images']['standard_resolution']
					);
				}
			}

			$instagram = base64_encode( serialize( $instagram ) );
			set_transient('instagram-photos-'.sanitize_title_with_dashes($username), $instagram, apply_filters('null_instagram_cache_time', HOUR_IN_SECONDS*2));
		}

		$instagram = unserialize( base64_decode( $instagram ) );

		return array_slice($instagram, 0, $slice);
	}

}

function register_instagram_booky() {
    register_widget( 'instagram_booky' );
}
add_action( 'widgets_init', 'register_instagram_booky' );