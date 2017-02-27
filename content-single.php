<?php
/**
 * @package Stupid Easy Paleo
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php stupid_easy_paleo_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'stupid-easy-paleo' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<!--BEGIN .author-bio-->
<div class="author-bio">
			<?php echo get_avatar( get_the_author_meta('email'), '200' ); ?>
			<div class="author-info">
			<p class="author-description"><?php the_author_meta('description'); ?></p>
			</div>
<!--END .author-bio-->
</div>

	<footer class="entry-footer">
		<?php stupid_easy_paleo_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
