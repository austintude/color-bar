<?php
/**
 * Template part for petOfTheWeek
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


?>
<div class="sectionHeader">
		<h2 class="">Our Stylists</h2>
	</div>
<section class="gridCardWrapper">
<?php $our_staff = new \WP_Query( array( 'post_type' => 'our_staff', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $our_staff->have_posts() ) : $our_staff->the_post();
			$staff_mobile			= get_field('staff_mobile');
			$staff_name			= get_field('staff_name');
			$staff_facts			= get_field('staff_facts');
			$staff_desc			= get_field('staff_desc');
			$staff_cta_text			= get_field('staff_cta_text');
			$staff_cta_link			= get_field('staff_cta_link');
			$staff_image			= get_field('staff_image');
			$staff_page			= get_field('staff_page');
			$staff_segment			= get_field('staff_segment');
			$staff_segment_title			= get_field('staff_segment_title');
			?>

			<div class="gridCardLoop" id="<?php echo $grid_card_item_id; ?>">

					<div class="gridCardImg">
						<img src="<?php echo $staff_image['url']; ?>" alt="<?php echo $staff_image['alt']; ?>" />
					</div><!-- gridCardImg -->
					<div class="gridContent">
						<div class="gridCardItem">
							<h2>
								<?php echo $staff_name; ?>
							</h2>
						</div> <!-- gridCardItem -->
						<div class="gridCardDesc">
								<?php echo $staff_facts; ?>
						</div> <!-- gridCardDesc -->
						<div class="gridCardItemLink">
							<a href="<?php the_permalink(); ?>">
								Get to Know <?php echo $staff_name; ?>
							</a>
						</div><!-- gridCardItemLink -->
					</div> <!-- gridContent -->

			</div><!-- gridCardLoop -->
			<?php endwhile; wp_reset_query(); ?>
	</section> <!-- end .gridCardWrapper -->








