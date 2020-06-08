<?php
/**
 * Template part for block2
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section class="block2">
	<h2>Under Construction</h2>
	<?php $sloganloop = new \WP_Query( array( 'post_type' => 'slogan', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $sloganloop->have_posts() ) : $sloganloop->the_post();
			$slogan			= get_field('slogan');
			?>
	<h4>
	<?php echo $slogan; ?>
	</h4>
	<?php endwhile; wp_reset_query(); ?>

</section> <!-- end .block2 -->
