<?php
/**
 * Template part for displaying the custom header media
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if ( ! has_header_image() ) {
	return;
}

?>
<figure class="header-image">
	<?php the_post_thumbnail(); ?>
</figure><!-- .header-image -->
