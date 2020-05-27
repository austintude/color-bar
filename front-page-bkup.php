<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.
if ( is_home() ) {
	wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );
} else {
	wp_rig()->print_styles( 'wp-rig-content' );
}

?>


	<main id="primary" class="site-main">
	<?php $miscblockloop = new \WP_Query( array( 'post_type' => 'miscblockloop', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>


		<?php
			get_template_part( 'template-parts/content/block1' );
		?>
<section class="covid19">
			<?php while( $miscblockloop->have_posts() ) : $miscblockloop->the_post();
			$blocka			= get_field('blocka');
			?>
		<?php if ($blocka != null) {
			get_template_part( 'template-parts/content/blocka' );
		} ?>
			<?php endwhile;  wp_reset_query(); ?>
			<?php while( $miscblockloop->have_posts() ) : $miscblockloop->the_post();
			$blockb			= get_field('blockb');
			?>
		<?php if ($blockb != null) {
			get_template_part( 'template-parts/content/blockb' );
		} ?>
			<?php endwhile;  wp_reset_query(); ?>
			</section> <!-- covid19 -->
		<?php
			get_template_part( 'template-parts/content/block2' );
		?>
		<?php while( $miscblockloop->have_posts() ) : $miscblockloop->the_post();
			$blockc			= get_field('blockc');
			?>
		<?php if ($blockc != null) {
			get_template_part( 'template-parts/content/blockc' );
		} ?>
			<?php endwhile;  wp_reset_query(); ?>
			<?php
			get_template_part( 'template-parts/content/block3a' );
		?>
		<?php
			get_template_part( 'template-parts/content/block3b' );
		?>
		<?php while( $miscblockloop->have_posts() ) : $miscblockloop->the_post();
			$blockd			= get_field('blockd');
			?>
		<?php if ($blockd != null) {
			get_template_part( 'template-parts/content/blockd' );
		} ?>
			<?php endwhile;  wp_reset_query(); ?>
		<?php
			get_template_part( 'template-parts/content/block4' );
		?>
		<?php while( $miscblockloop->have_posts() ) : $miscblockloop->the_post();
			$blocke			= get_field('blocke');
			?>
		<?php if ($blocke != null) {
			get_template_part( 'template-parts/content/blocke' );
		} ?>
			<?php endwhile;  wp_reset_query(); ?>


	</main><!-- #primary -->


<?php
get_footer();

