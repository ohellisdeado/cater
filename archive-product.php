<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>

<?php

// verify that this is a product category page
if ( is_product_category() ){
    global $wp_query;

    // get the query object
    $cat = $wp_query->get_queried_object();

    // get the thumbnail id using the queried category term_id
    $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );

    // get the image URL
    $image = wp_get_attachment_url( $thumbnail_id );

    // print the IMG HTML

}

?>
<?php // echo $image ?>

<!--
<div class="single_secondary_header products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
							<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
								    <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
							<?php endif; ?>

            </div>
        </div>
    </div>

</div>
-->


<?php $slug = get_post_field( 'post_name', get_post() ); ?>

<div class="the_breadcrumbs <?php echo $slug ?>" id="the_breadcrumbs">
		<div class="container">
				<div class="row">
						<div class="col-md-12">

								<?php if ( is_page_template( 'template_contact_product.php' ) ) : ?>
										Home > Services > <strong><?php the_field('contact_product_title'); ?></strong>
								<?php else: ?>

										<?php if( get_field('breadcrumb') ): ?>
												<?php the_field('breadcrumb'); ?>
										<?php else: ?>
												<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}?>
										<?php endif; ?>

								<?php endif; ?>

						</div>
				</div>
		</div>
</div>






<div class="page_content on_archive">
<div class="container">
<div class="row">
<div class="col-md-12">




<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' ); ?>
      <div class="col-md-12">

        <div class="wide_card">

          <div class="prod_tags">
            <?php if( get_field('express') == 'Yes' ) { ?>
              <div class="tag_express"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fast.png"> Express</div>
<br>
            <?php } ?>

              <?php if( get_field('sale') == 'Yes' ) { ?>
                <div class="tag_sale"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sales.png">Sale</div>

              <?php } ?>

          </div>


          <a href="<?= esc_url( get_permalink() ); ?>" class="wide_card_link_block">

          </a>
          <div class="wide_card_tr">
            <div class="wide_card_td image_side">
              <a href="<?= esc_url( get_permalink() ); ?>">
                <div class="product_thumb" style="background-image: url('');">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>">
                </div>
              </a>
            </div>
            <div class="wide_card_td info_side">

                <?php $terms = get_the_terms( get_the_ID(), 'brand' );

                    if( ! empty( $terms ) ) : ?>
                    <?php foreach( $terms as $term ) : ?>
                    <div class="<?php echo $term->slug; ?> mini_brand_logo">
                    <img src="<?php the_field('brand_logo', $term); ?>" />
                    </div>
                    <?php endforeach; ?>

                <?php endif; ?>

                <h4><?php the_title(); ?></h4>
                <h5><?php   global $product; echo 'SKU: ' . $product->get_sku(); ?></h5>

                <div class="prod_info_desktop">
                <?php the_field('product_front_card_info'); ?>
                </div>
                <?php if ( ! $product->is_in_stock() ) { ?>
                    <div class="out_stock">Ask about this product</div>
                <?php } ?>


            </div>
            <div class="wide_card_td cta_side">





			<?php if( get_field('master_data_sheet') ): ?>
				<a class="data_sheet" href="<?php the_field('master_data_sheet'); ?>" target="_blank">
					Product data sheet
				</a>
			<?php endif; ?>



<!--
                <?php
                    $product = wc_get_product();
                    echo $product->get_price_html();
                ?>
-->


<?php $product = wc_get_product(); ?>
<div class="price_red">
  <?php echo $product->get_price_html(); ?><br>
</div>
<!--
<div class="incl_vat_price">
  <?php
        $price_excl_tax = wc_get_price_excluding_tax( $product );
        echo $price_excl_tax > 0 || ! empty( $price_excl_tax ) ? wc_price( $price_excl_tax*1.15 ) . __(' Incl. VAT') : '';
  ?>
</div>
-->


              <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

              <?php if (is_user_logged_in()) : ?>

              <?php else: ?>
              <div class="open_quote_modal">Add to quote</div>
              <?php endif; ?>

            </div>
          </div>
        </div>





      </div>
			<?php //wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' ); ?>


</div>
</div>
</div>
</div>

<?php get_footer( 'shop' );
