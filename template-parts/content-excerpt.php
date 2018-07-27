<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package spacewalker
 */

?>

	<article>

	<header class="entry-header">

		<?php spacewalker_post_thumbnail(); ?>

		<?php
    the_title( '<h1 class="entry-title">', '</h1>' );

		// if ( is_home() ) :
		// 	the_title( '<h1 class="entry-title">', '</h1>' );
    //                                        elseif (is_front_page() ) :
		// else :
		// 	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		// endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
        //                            if(is_front_page()):
        //
        //                             else:
        //                                 spacewalker_posted_on();
				// spacewalker_posted_by();
        //                             endif;
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_excerpt( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'spacewalker' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'spacewalker' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
          spacewalker_entry_footer();
                ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
