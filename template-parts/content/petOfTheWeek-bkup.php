<?php
/**
 * Template part for petOfTheWeek
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


?>

	<div class="sectionHeader">
	<h2 class="">KWVH's Pet of the Week</h2></div>

                    <div class="sectionCardsBlock">

					<?php $pet_of_the_week = new \WP_Query( array( 'post_type' => 'pet_of_the_week', 'orderby' => 'post_id', 'order' => 'DESC' ) ); ?>

<?php while( $pet_of_the_week->have_posts() ) : $pet_of_the_week->the_post();
			$pow_title			= get_field('pow_title');
			$pets_name			= get_field('pets_name');
			$pet_facts			= get_field('pet_facts');
			$pet_desc			= get_field('pet_desc');
			$pet_cta_text			= get_field('pet_cta_text');
			$pet_cta_link			= get_field('pet_cta_link');
			$pet_image			= get_field('pet_image');
			$pet_segment			= get_field('pet_segment');
			$pet_segment_title			= get_field('pet_segment_title');
			?>

				<div class="sectionCard" id="">
					<div class="petImg">
						<img src="<?php echo $pet_image['url']; ?>"
							alt="<?php echo $pet_image['alt']; ?>">
					</div><!-- petImg -->
					<div class="petInfo">
					<div class="petSegment">
						<h3>
						<?php echo $pet_segment_title; ?>
						</h3>
						<audio controls>
							<source src="<?php echo $pet_segment; ?>" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>

						</div><!-- petSegment -->
						<h2 class=""><?php echo $pets_name; ?></h2>
						<?php echo $pet_facts; ?>
						<?php echo $pet_desc; ?>

						<div class="petCTA">
						<button aria-label="<?php echo $pet_cta_text; ?>"><a href="<?php echo $pet_cta_link; ?>" rel="noopener" target="_blank">
							<?php echo $pet_cta_text; ?> <?php echo $pets_name; ?>
							</a>
</button>
						</div><!-- petCTA -->
					</div><!-- petInfo -->
				</div>
				<?php endwhile; wp_reset_query(); ?>

</div>






