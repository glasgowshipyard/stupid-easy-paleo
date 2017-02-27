<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Stupid Easy Paleo
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
    <div class='social'>
    <ul id='social'>
<li><a href="http://pinterest.com/stupideasypaleo"><span aria-hidden="true" class="fa fa-pinterest-square"></span><span class="screen-reader-text">Pinterest</span></a></li>
        <li><a href="http://instagram.com/stupideasypaleo"><span aria-hidden="true" class="fa fa-instagram"></span><span class="screen-reader-text">Instagram</span></a></li>
        <li><a href="https://www.youtube.com/user/StupidEasyPaleo"><span aria-hidden="true" class="fa fa-youtube-square"></span><span class="screen-reader-text">YouTube</span></a></li>
        <li><a href="http://facebook.com/stupideasypaleo"<span aria-hidden="true" class="fa fa-facebook-square"></span><span class="screen-reader-text">FaceBook</span></a></li>
        <li><a href="https://twitter.com/stupideasypaleo"><span aria-hidden="true" class="fa fa-twitter-square"></span><span class="screen-reader-text">Twitter</span></a></li>
	<li><a href="https://www.snapchat.com/add/steph.gaudreau"><span aria-hidden="true" class="fa fa-snapchat-square"></span><span class="screen-reader-text">Snapchat</span></a></li>                 
    </ul>
    </div><!--End Social-->
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->