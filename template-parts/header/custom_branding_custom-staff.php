<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-branding">
	<div id="mobileTopBar">
	&nbsp;
</div>
<?php the_custom_logo(); ?>

<!-- <div class="titleTagWrapper">
	<h1 class="site-title">
		<?php the_title(); ?>
	</h1>
	<h2 class="tagline">
	</h2>
</div> -->

<div class="titleTagWrapper">
<div class="emptyDiv">
</div><!-- /emptyDiv -->
	<div class="heroText">
	<p class="site-title"><?php bloginfo( 'name' ); ?></p>
	<h1 class="site-desc staffName">
		<?php the_title(); ?>
	</h1>
</div><!-- heroText -->




</div><!-- .site-branding -->
