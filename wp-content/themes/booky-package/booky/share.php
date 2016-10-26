<?php
/**
 * The Template for Social Sharing
 *
 * @package booky
 * @since booky 1.0
 */
?>

<div id="social-box" class="single-box clear">
    <ul>
        <li>
            <span><?php _e( 'Share on:', 'booky' ); ?></span>
        </li>
        <li>
            <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="blank"><?php _e( 'Facebook', 'booky' ); ?></a>
        </li>
        <li>
            <a href="https://twitter.com/intent/tweet?original_referer=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>&tw_p=tweetbutton&url=<?php the_permalink(); ?>&via=<?php bloginfo( 'name' ); ?>" target="_blank"><?php _e( 'Twitter', 'booky' ); ?></a>
        </li>
        <li>
            <?php $pinimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
            <a href="//pinterest.com/pin/create/button/?url=<?php the_permalink();?>&amp;media=<?php echo $pinimage[0]; ?>&amp;description=<?php the_title(); ?>" target="_blank"><?php _e( 'Pinterest', 'booky' ); ?></a>
        </li>
        <li>
            <a href="https://plusone.google.com/_/+1/confirm?hl=en-US&amp;url=<?php the_permalink() ?>" target="_blank"><?php _e( 'Google +', 'booky' ); ?></a>
        </li>
    </ul>
</div><!-- social-box -->