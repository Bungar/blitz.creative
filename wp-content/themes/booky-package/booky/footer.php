<?php
/**
 * The template for displaying the footer.
 *
 * @package booky
 * @since booky 1.0
 */
?>

		</div><!-- #content -->

	</div><!-- .container -->

	<div class="container">

		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="site-info">

				<?php if ( get_theme_mod( 'booky_footer' ) ) : ?>
					
					<?php echo get_theme_mod( 'booky_footer' ); ?>
				
				<?php else : ?>
					
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'booky' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'booky' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<a href="<?php echo esc_url( __( 'http://pankogut.com/', 'booky' ) ); ?>" rel="designer"><?php printf( __( 'Theme: %1$s by %2$s.', 'booky' ), 'booky', 'pankogut' ); ?></a>
				
				<?php endif; ?>

			</div><!-- .site-info -->
			
		</footer><!-- #colophon -->

	</div><!-- .container -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
