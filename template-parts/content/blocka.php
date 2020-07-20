<?php
/**
 * Template part for blocka
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


?>
<?php $covid_updatesloop = new \WP_Query( array( 'post_type' => 'covid_updates', 'orderby' => 'post_id', 'order' => 'ASC' ) );?>

<?php while( $covid_updatesloop->have_posts() ) : $covid_updatesloop->the_post();


            // Layout 1 value.
			$block_img				= get_field('block_img');
			$block_title			= get_field('block_title');
			$block_subtitle			= get_field('block_subtitle');
			$block_content			= get_field('block_content');
			$block_cta_text			= get_field('block_cta_text');
			$block_cta_link			= get_field('block_cta_link');

?>
<?php if( $block_title ): ?>
<section class="blocka miscBlock covid19">
<div class="blockLeft">
<h2>
<?php echo $block_title; ?>
		</h2>
		<h3>
		<?php echo $block_subtitle; ?>
		</h3>
		<a href="<?php echo $block_cta_link; ?>" aria-label="<?php echo $block_cta_text; ?>">
		<button arial-label="<?php echo $block_cta_text; ?>"><?php echo $block_cta_text; ?></button>
		</a>
</div>
<!-- <a href="<?php echo $block_cta_link; ?>" aria-label="<?php echo $block_cta_text; ?>">
<img src="<?php echo $block_img['url']; ?>"
			alt="<?php echo $block_img['alt']; ?>">
</a> -->
<div class="blockRight">
<?php echo $block_content; ?>
</div>

</section> <!-- end .blocka -->
<?php endif; ?>
<?php endwhile; wp_reset_query(); ?>
