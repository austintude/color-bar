<?php
/**
 * Template part for Specials Block
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;



?>
<h2>
		Current Specials
	</h2>
<div class="specialsBlock">

<div class="specials">

	<?php $specialloops = new \WP_Query( array( 'post_type' => 'specials', 'orderby' => 'post_id', 'order' => 'DSC' ) );
?>
						<?php while( $specialloops->have_posts() ) : $specialloops->the_post();
$special_title	= get_field('special_title');
$special_img	= get_field('special_img');
$special_link	= get_field('special_link');
$special_cta_txt	= get_field('special_cta_txt');
?>
<?php if( $special_title ): ?>
				<div class="specialsCard" id="">
				<h3 class="mb1"><?php echo $special_title; ?></h3>
				<?php if( $special_img ): ?>
						<img lightbox src="<?php echo $special_img['url']; ?> "layout="intrinsic" alt="<?php echo $special_img['alt']; ?>" class="">
					<?php endif; ?>
					<?php if( $special_link ): ?>
                            <div class="ctaButton"><a
                                    class="ampstart-btn caps text-decoration-none inline-block"
									href="<?php echo $special_link; ?>"><?php echo $special_cta_txt; ?></a>
								</div>
									<?php endif; ?>
						</div>
						<?php endif; ?>
				<?php endwhile; wp_reset_query(); ?>

</div>
</div>
