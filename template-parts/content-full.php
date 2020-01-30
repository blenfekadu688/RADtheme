<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP-BLEN
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<i class="fa fa-user"></i><?php fashion_based_posted_by(); ?>							
						</div>
						<div class="col-md-3">
							<i class="fa fa-folder"></i> <?php the_category( ' / ', get_the_ID() ); ?>
						</div>
						<div class="col-md-3">
							<i class="fa fa-clock"></i> <?php echo get_the_date(); ?>
						</div>
						<div class="col-md-3">
							<i class="fa fa-wechat"></i> <?php comments_popup_link( esc_html__( '0 Comments', 'fashion_based' ), esc_html__( '1 Comment',  'fashion_based' ), esc_html__( '% Comments', 'fashion_based' ), 'comments-link' ); ?>
						</div>
					</div>
				</div>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php fashion_based_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fashion-based' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fashion-based' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php fashion_based_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<hr>
</article><!-- #post-<?php the_ID(); ?> -->
