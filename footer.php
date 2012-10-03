<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Publish
 * @since Publish 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'publish_credits' ); ?>
			<?php printf( __( 'Powered by %s', 'publish' ), '<a href="http://wordpress.org/" rel="generator">WordPress</a>' ); ?>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'publish' ), 'Publish', '<a href="http://kovshenin.com/" rel="designer">Konstantin Kovshenin</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>