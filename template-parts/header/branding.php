<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
// $hero_images	= get_field('hero_images');

?>

<div class="site-branding">
	<div id="mobileTopBar">
	&nbsp;
</div>


<?php the_custom_logo(); ?>

<div class="titleTagWrapper">
	<div class="emptyDiv">
</div><!-- /emptyDiv -->
	<div class="heroText">
		<p class="site-title"><?php bloginfo( 'name' ); ?></p>
		<h1 class="site-desc"><?php bloginfo( 'description' ); ?></h1>
</div>
</div>



</div><!-- .site-branding -->
