<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;



?>



<div class="site-info">


<div class="baseBlock">

<div id="themeLogo" aria-label="custom logo link">
<?php the_custom_logo(); ?>
</div>

<div class="builtBy">

	<a href="<?php echo esc_url( __( 'https://austintatiousdesign.co/', 'wp-rig' ) ); ?>" rel="noopener" aria-label="Link to Austintatious design">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( 'Proudly built and maintained by %s', 'wp-rig' ), 'Austintatious Design' );
		?>
	</a>
</div>
</div>

</div><!-- .site-info -->

