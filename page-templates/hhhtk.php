<?php
/**
 * Template Name: HHHTK *
 * @package Stupid Easy Paleo
*/

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="hhhtk-main" role="main">
			<div id="hero"><?php if ( dynamic_sidebar('hero') ) : else : endif; ?></div>
			<div class="HHHTK">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'htk' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>