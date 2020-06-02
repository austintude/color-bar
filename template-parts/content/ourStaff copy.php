<?php
/**
 * Template part for petOfTheWeek
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


?>


                    <div class="sectionCardsBlock">
					<div class="specials">
<?php $loop = new \WP_Query( array( 'post_type' => 'specials', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post();
				$special_title	= get_field('special_title');
				$special_img	= get_field('special_img');
				$special_link	= get_field('special_link');
				?>
				<div class="sectionCard" id="<?php echo $sectioncard_id; ?>">
						<amp-img lightbox src="<?php echo $special_img['url']; ?>" width="1000"
										height="800" layout="responsive" alt="<?php echo $special_img['alt']; ?>" class=""></amp-img>
										<h3 class="mb1"><?php echo $special_title; ?></h3>
                            <div class="ctaButton"><a
                                    class="ampstart-btn caps text-decoration-none inline-block"
                                    href="<?php echo $special_link; ?>">Learn More</a></div>
						</div>
				<?php endwhile; wp_reset_query(); ?>

</div>






                    </div>

	<div class="sectionHeader">
		<h2 class="">Our Staff</h2>
	</div>

                    <div class="sectionCardsBlock">
					<div class="specials">
					<?php $our_staff = new \WP_Query( array( 'post_type' => 'our_staff', 'orderby' => 'post_id', 'order' => 'DESC' ) ); ?>

<?php while( $our_staff->have_posts() ) : $our_staff->the_post();
			$staff_title			= get_field('staff_title');
			$staff_name			= get_field('staff_name');
			$staff_facts			= get_field('staff_facts');
			$staff_desc			= get_field('staff_desc');
			$staff_cta_text			= get_field('staff_cta_text');
			$staff_cta_link			= get_field('staff_cta_link');
			$staff_image			= get_field('staff_image');
			$staff_segment			= get_field('staff_segment');
			$staff_segment_title			= get_field('staff_segment_title');
			?>

				<div class="sectionCard" id="">
					<div class="petImg">
						<img src="<?php echo $staff_image['url']; ?>"
							alt="<?php echo $staff_image['alt']; ?>">
					</div><!-- petImg -->
					<div class="petInfo">
					<div class="petSegment">
						<h3>
						<?php echo $staff_segment_title; ?>
						</h3>
						<audio controls>
							<source src="<?php echo $staff_segment; ?>" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>

						</div><!-- petSegment -->
						<h2 class=""><?php echo $staff_name; ?></h2>
						<?php echo $staff_facts; ?>
						<?php echo $staff_desc; ?>

						<div class="petCTA">
						<button aria-label="<?php echo $staff_cta_text; ?>"><a href="<?php echo $staff_cta_link; ?>" rel="noopener" target="_blank">
							<?php echo $staff_cta_text; ?> <?php echo $staff_name; ?>
							</a>
</button>
						</div><!-- petCTA -->
					</div><!-- petInfo -->
				</div>
				<?php endwhile; wp_reset_query(); ?>

</div>






