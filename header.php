<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Stupid Easy Paleo
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '818977648139844');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=818977648139844&ev=PageView&noscript=1"
/></noscript>
<?php 
	if(is_page( array( 30346, 20276, 1117, 33787, 11255, 33959, 34748, 34945, 7703, 2346, 36990, 36977, 37551, 37662, 38146 ) ) ) {
		//die if affiliate area or summit page
	}
	elseif (is_singular('product') ) {
		//die
	}
	elseif (is_single( array(32023, 2000, 33787, 37662) ) ) {
		//posts<script type='text/javascript' async='async' data-noptimize='1' data-cfasync='false' src='//scripts.mediavine.com/tags/stupid-easy-paleo.js'></script>
	}
	else {
		echo "<script type='text/javascript' async='async' data-noptimize='1' data-cfasync='false' src='//scripts.mediavine.com/tags/stupid-easy-paleo.js'></script>";
	}
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'stupid-easy-paleo' ); ?></a>
	
		<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
          <h1 class="site-title"><a class ="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2017/02/SEP-2017-white.png" alt="<?php bloginfo( 'description' ); ?>" /></a></h1>
			<span class="trolley"><?php global $woocommerce; ?><a class="fa fa-shopping-cart" aria-hidden="true" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></a></span>
		</div><!-- .site-branding -->
		         <nav id="site-navigation" class="main-navigation" role="navigation">
           			<button class="menu-toggle"><span class="toggle-banter">MENU</span><span class="icon-menu2"></span></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
	<div id="content" class="site-content">