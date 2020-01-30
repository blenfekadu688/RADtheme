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

<?php
$text = esc_html__( 'Read Content?', 'fashion_based' );
// $text = apply_filters( 'ocean_post_readmore_link_text', $text ); 

?>
	<div class="entry-content">
		<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( $text ); ?>"><?php echo esc_html( $text ); ?> <i class="fa fa-angle-right"></i></a>
	</div><!-- .entry-content -->
	<hr>
</article><!-- #post-<?php the_ID(); ?> -->
