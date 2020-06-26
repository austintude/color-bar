<?php
/**
 * Template part for Portfolio
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<div class="galleryBlocks">
<?php $portfolioloop = new \WP_Query( array( 'post_type' => 'portfolio', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $portfolioloop->have_posts() ) : $portfolioloop->the_post();

// vars
$portfolio_category = get_field('portfolio_category');
$portfolio_category_id = get_field('portfolio_category_id');
$portfolio_category_title = get_field('portfolio_category_title');
$portfolio_category_image = get_field('portfolio_category_image');
$portfolio_category_image_caption = get_field('portfolio_category_image_caption');
$portfolio_category_content = get_field('portfolio_category_content');
$portfolio_category_child_link = get_field('portfolio_category_child_link');
?>

<a href="<?php echo $portfolio_category_child_link; ?>" rel="noreferrer noopener">
<div id="gallery-<?php echo $portfolio_category_id; ?>" class="galleryItem">
<img src="<?php echo $portfolio_category_image['url']; ?>" layout="responsive"
aria-describedby="<?php echo $portfolio_category_id; ?>">


<div class="categoryTitle" id="category-<?php echo $portfolio_category_id; ?>">
       <h3>
           <?php echo $portfolio_category_title; ?>
</h3>
</div>
</a>
</div> <!-- end -->
<?php endwhile; wp_reset_query(); ?>
</div>
