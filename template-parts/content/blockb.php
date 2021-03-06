<?php
/**
 * Template part for blockb
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


?>
<section class="blockb miscBlock">
<?php $miscblockloop = new \WP_Query( array( 'post_type' => 'miscblockloop', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $miscblockloop->have_posts() ) : $miscblockloop->the_post();
			$blockb			= get_field('blockb');
if( have_rows('blockb') ):
    while( have_rows('blockb') ): the_row();
	$misc_block_2			= get_field('misc_block_2');
        // Layout 1.
        if( get_row_layout() == 'misc_block_2' ):

            // Layout 1 value.
			$block_img				= get_sub_field('block_img');
			$block_title			= get_sub_field('block_title');
			$block_subtitle			= get_sub_field('block_subtitle');
			$block_content			= get_sub_field('block_content');
			$block_cta_text			= get_sub_field('block_cta_text');
			$block_cta_link			= get_sub_field('block_cta_link');
			$block_lighthouse			= get_sub_field('block_lighthouse');

?>
<h2>
<?php echo $block_title; ?>
		</h2>
		<h3>
		<?php echo $block_subtitle; ?>
		</h3>

<a href="<?php echo $block_lighthouse; ?>" aria-label="<?php echo $block_cta_text; ?>">
		<button aria-label="<?php echo $block_cta_text; ?>" role="button" tabindex="0"><?php echo $block_cta_text; ?></button>
</a>
<a href="<?php echo $block_lighthouse; ?>" role="button" aria-label="<?php echo $block_cta_text; ?>" tabindex="0">
<img src="<?php echo $block_img['url']; ?>"
			alt="<?php echo $block_img['alt']; ?>">
</a>

<!-- <amp-lightbox id="<?php echo $block_cta_link; ?>" layout="nodisplay">
    <div class="lightbox" on="tap:<?php echo $block_cta_link; ?>.close" role="button" tabindex="0">

      <iframe width="600" height="600"
              sandbox="allow-scripts allow-same-origin allow-popups" scrolling="auto"
              src="<?php echo $block_lighthouse; ?>">
  </iframe>
    </div>
  </amp-lightbox> -->
<?php
        endif;
    endwhile;
endif;
endwhile; ?>

</section> <!-- end .blockb -->
