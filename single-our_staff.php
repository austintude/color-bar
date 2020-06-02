<?php
/**
 * The main template file ofr Custom Post Types
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header('custom-staff');

wp_rig()->print_styles( 'wp-rig-content' );

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
	<article id="primary" class="site-main ourStaff">
	<div class="ourStaffBlock" id="">
					<div class="staffImg">
						<img src="<?php echo $staff_image['url']; ?>"
							alt="<?php echo $staff_image['alt']; ?>">
					</div><!-- staffImg -->
					<div class="staffInfo">
					<div class="staffSegment">

						<audio controls>
							<source src="<?php echo $staff_segment; ?>" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>

						</div><!-- staffSegment -->
						<h1 class=""><?php echo $staff_name; ?></h1>
						<?php echo $staff_facts; ?>
						<?php echo $staff_desc; ?>

						<div class="staffCTA">
						<h3>
						<?php echo $staff_segment_title; ?>
						</h3>
						<button aria-label="<?php echo $staff_cta_text; ?>"><a href="<?php echo $staff_cta_link; ?>" rel="noopener" target="_blank">
							<?php echo $staff_cta_text; ?> <?php echo $staff_name; ?>
							</a>
</button>
						</div><!-- staffCTA -->
					</div><!-- staffInfo -->
				</div>

	</article><!-- #primary -->
<?php
get_footer();
