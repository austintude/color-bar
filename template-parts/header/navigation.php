<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if ( ! wp_rig()->is_primary_nav_menu_active() ) {
	return;
}

?>

<nav id="site-navigation" class="main-navigation nav--toggle-sub nav--toggle-small" aria-label="<?php esc_attr_e( 'Main menu', 'wp-rig' ); ?>"
	<?php
	if ( wp_rig()->is_amp() ) {
		?>
		[class]=" siteNavigationMenu.expanded ? 'main-navigation nav--toggle-sub nav--toggle-small nav--toggled-on' : 'main-navigation nav--toggle-sub nav--toggle-small' "
		<?php
	}
	?>
>
	<?php
	if ( wp_rig()->is_amp() ) {
		?>
		<amp-state id="siteNavigationMenu">
			<script type="application/json">
				{
					"expanded": false
				}
			</script>
		</amp-state>
		<?php
	}
	?>

	<button class="menu-toggle" aria-label="<?php esc_attr_e( 'Open menu', 'wp-rig' ); ?>" aria-controls="primary-menu" aria-expanded="false"
		<?php
		if ( wp_rig()->is_amp() ) {
			?>
			on="tap:AMP.setState( { siteNavigationMenu: { expanded: ! siteNavigationMenu.expanded } } )"
			[aria-expanded]="siteNavigationMenu.expanded ? 'true' : 'false'"
			<?php
		}
		?>
	>
		<?php esc_html_e( 'Menu', 'wp-rig' ); ?>
	</button>

	<div class="primary-menu-container">
		<?php wp_rig()->display_primary_nav_menu( [ 'menu_id' => 'primary-menu' ] ); ?>
		<?php $listenliveloop = new \WP_Query( array( 'post_type' => 'contact_data', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $listenliveloop->have_posts() ) : $listenliveloop->the_post();
$contact_data_tx			= get_field('contact_data_tx');
$contact_data_link			= get_field('contact_data_link');

			?>

	<div class="liveLink">

		<a href="<?php echo $contact_data_link; ?>" target="_blank" rel="noreferrer">
		<span>
		<?php echo $contact_data_tx; ?>
		</span>
		<img src="<?php echo $contact_data_icon['url']; ?>" alt="<?php echo $contact_data_icon['alt']; ?>"/>
	</a>
	</div> <!-- liveLink -->
	<?php endwhile;  wp_reset_query(); ?>
	</div>


</nav><!-- #site-navigation -->
