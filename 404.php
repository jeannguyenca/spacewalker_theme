<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package spacewalker
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<!-- <h1 class="page-title"><?php esc_html_e( '404', 'spacewalker' ); ?></h1> -->
					<img src="<?php bloginfo('template_url')?>/images/404-banner.png" alt="404 error" class="404-banner">
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like you enter an unknown galaxy. Don&rsquo;t worry though, we will bring you home.', 'spacewalker' ); ?></p>
					<div class="button-nav">
						<a href="<?php echo get_home_url() ?>" class="button">Back home</a>
					</div>

					<!-- <?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'spacewalker' ); ?></h2>
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
					</div> -->

					<!-- <?php
					$spacewalker_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'spacewalker' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$spacewalker_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?> -->

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
