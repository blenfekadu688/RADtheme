<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP-BLEN
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div id="footer-sidebar" class="row secondary">
	        <div class="col-md-3" id="footer-sidebar1">
		        <?php
		        if(is_active_sidebar('footer-sidebar-1')){
		        dynamic_sidebar('footer-sidebar-1');
		        }
		        ?>
	        </div>
	    </div>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fashion-based' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'fashion-based' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'fashion-based' ), 'fashion-based', '<a href="http://underscores.me/">Blen Fekadu</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
