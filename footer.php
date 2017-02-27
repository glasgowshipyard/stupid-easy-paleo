<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Stupid Easy Paleo
 */
?>

	</div><!-- #content -->
		<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="left"><?php if ( dynamic_sidebar('left') ) : else : endif; ?></div>
		<div id="middle"><?php if ( dynamic_sidebar('middle') ) : else : endif; ?></div>
		<div id="right"><?php if ( dynamic_sidebar('right') ) : else : endif; ?></div>
		<div class="site-info">
          <div class="sharing">If you’d like to share my recipes or photos on your blog, you must get written permission first. Please use the contact form to send me a message before using any of my content on your blog / website.</div>
          <div class="disclosure">PAID ENDORSEMENT DISCLOSURE: In order for me to support my blogging activities, I may receive monetary compensation or other types of remuneration for my endorsement, recommendation, testimonial and/or link to any products or services from this blog. Stupid Easy Paleo, Inc. is a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for sites to earn advertising fees by advertising and linking to amazon.com.</div>
          <hr>
          <span class="copyright">Copyright &copy; Stephanie Gaudreau<span class="sep"> | </span>Stupid Easy Paleo&reg; 2011 - <?php echo date('Y'); ?></span><span class="terms"><a href="/legal"> Legal</a></span>
			<div class="props">
			<span class="colophon">Logo design by <a href="http://yesdesignshop.com">Yes Design Shop</a><span class="sep"> | </span>Hosted by <a href="http://share.getf.ly/n86u2s">Flywheel</a></span>
			<div>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'stupid-easy-paleo' ) ); ?>"><?php printf( __( 'Hand forged on %s', 'stupid-easy-paleo' ), 'WordPress' ); ?></a>
			<?php printf( __( 'by %2$s.', 'stupid-easy-paleo' ), 'Stupid Easy Paleo', '<a href="http://glasgowshipyard.com" rel="designer">Glasgow Shipyard</a>' ); ?>
			</div></div><!-- #props -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>