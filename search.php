<?php
/**
 * Template name: About
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

</div>
</div>
</div>


<?php $blog=1; if ( have_posts() ) : ?>


<!--
<div class="single_secondary_header" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/pexels-francesco-paggiaro-731160.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

								<h1><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

            </div>
        </div>
    </div>
    <div class="thumb_overlay"></div>
</div>
-->


<div class="the_breadcrumbs <?php echo $slug ?>" id="the_breadcrumbs">
		<div class="container">
				<div class="row">
						<div class="col-md-12">

                            <?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>

						</div>
				</div>
		</div>
</div>







<div class="page_content blog_landing">
    <div class="container">
        <div class="row">

          <?php while ( have_posts() ) : the_post(); ?>

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
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
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

                <?php the_field('product_front_card_info'); ?>

                <?php if ( ! $product->is_in_stock() ) { ?>
                    <!-- <div class="out_stock">Ask about this product</div> -->
                <?php } ?>


            </div>
            <div class="wide_card_td cta_side">


			    	<?php if( get_field('master_data_sheet') ): ?>
							<a class="data_sheet" href="<?php the_field('master_data_sheet'); ?>" target="_blank">
								Product data sheet
							</a>
						<?php endif; ?>






                <?php
                    $product = wc_get_product();
                    echo $product->get_price_html();
                ?>

              <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
							<?php if (is_user_logged_in()) : ?>

							<?php else: ?>
									<div class="open_quote_modal">Add to Quote</div>
							<?php endif; ?>


            </div>
          </div>
        </div>





      </div>


                        <?php if ( $blog%2==0 ) : ?>
                            <div class="col-md-12"></div>
                        <?php endif; ?>


          <?php
          			$blog++; endwhile;

          ?>

          <div class="blog_pagination">
              <?php
                  the_posts_pagination( array(
                  	'mid_size'  => 2,
                  	'prev_text' => __( 'Previous', 'textdomain' ),
                  	'next_text' => __( 'Next', 'textdomain' ),
                  ) );
              ?>

          </div>

          <?php

          		else : ?>

				<div class="container text-center">
<div class="row">
<div class="col-md-12">


				<div class="page_content generic_section text-center">
				        <h3>No Results. Please try again :)</h3>


    </div>

 </div>
  </div>
   </div>

          		<?php endif;
          		?>





        </div>
    </div>
</div>

</div>
</div>
</div>











<?php get_footer(); ?>
