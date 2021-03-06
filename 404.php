<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP-BLEN
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-md-3">
						<?php
							get_search_form();
							the_widget( 'WP_Widget_Recent_Posts' );
						?>
						<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'fashion-based' ); ?></h2>
							<ul>
								<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
								?>
							</ul>
						</div><!-- .widget -->
					</div>
					<div class="col-sm-6 col-md-6">
						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fashion-based' ); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'fashion-based' ); ?></p>

							</div><!-- .page-content -->
						</section><!-- .error-404 -->
					</div>
					<div class="col-sm-3 col-md-3">
						<?php
						$fashion_based_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'fashion-based' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$fashion_based_archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
						?>						
					</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
