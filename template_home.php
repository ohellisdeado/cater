<?php
/**
 * Template name: Home
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

<div class="featured_slider">
  <?php if( have_rows('designed_banners') ): while( have_rows('designed_banners') ) : the_row(); ?>
    <div>
      <a href="<?php the_sub_field('banner_url'); ?>">
      <img class="desktop_banner" src="<?php the_sub_field('desktop_banner'); ?>">

      <img class="mobile_banner" src="<?php the_sub_field('mobile_banner'); ?>">
      </a>

      <!--
        <div class="single_slide" style="background-image: url('<?php the_sub_field('slider_image'); ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="slide_block">
                            <h2><?php the_sub_field('slider_title'); ?></h2>
                            <p>
                                <?php the_sub_field('slider_content'); ?>
                            </p>
                            <a class="act_btn" href="<?php the_sub_field('slider_button_link'); ?>">View More</a>
                        </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </div>
      -->

    </div>


  <?php endwhile; else : endif; ?>




</div>













<div class="container">
<div class="row">
<div class="col-md-12">












<div class="generic_section">
    <h3>Featured Products</h3>
    <div class="row">
        <?php
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => -1, // fetch more, we'll filter manually
            'product_cat'    => 'featured',
            'orderby'        => 'rand'
        );

        $loop = new WP_Query($args);
        $count = 0;

        while ($loop->have_posts()) : $loop->the_post();
            global $product;

            // Skip if no featured image
            if (!has_post_thumbnail()) continue;

            // Limit to 4 total products shown
            if ($count >= 4) break;

            $count++;
        ?>
            <div class="col-md-3">
                <div class="product_card">
                    <div class="prod_tags">
                        <?php if (get_field('express') == 'Yes') { ?>
                            <div class="tag_express"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fast.png"> Express</div>
                            <br>
                        <?php } ?>

                        <?php if (get_field('sale') == 'Yes') { ?>
                            <div class="tag_sale"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sales.png">Sale</div>
                        <?php } ?>
                    </div>

                    <a href="<?php echo get_permalink(); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
                        <div class="product_thumb" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>');"></div>
                    </a>

                    <div class="inside_prod_card the_title">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'brand');
                        if (!empty($terms)) :
                            foreach ($terms as $term) : ?>
                                <div class="<?php echo $term->slug; ?> mini_brand_logo">
                                    <img src="<?php the_field('brand_logo', $term); ?>" />
                                </div>
                            <?php endforeach;
                        endif;
                        ?>

                        <h4><?php the_title(); ?></h4>
                        <h6><?php echo $product->get_sku(); ?></h6>

                        <div class="price_red">
                            <?php echo $product->get_price_html(); ?><br>
                        </div>

                        <?php woocommerce_template_loop_add_to_cart($loop->post, $product); ?>

                        <?php if (!is_user_logged_in()) : ?>
                            <div class="open_quote_modal">Add to Quote</div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>














<!--
  <div class="generic_section blog_landing">

  <div class="row">
  <?php if( have_rows('featured_product_categories') ): while( have_rows('featured_product_categories') ) : the_row(); ?>

    <div class="col-md-4">
        <a class="blog_card" href="<?= the_sub_field('category_link'); ?>">
            <div class="blog_thumb" style="background-image: url('<?php the_sub_field('category_image'); ?>');"></div>
            <div class="inside_blog_card">
                <h4><?php the_sub_field('category_name'); ?></h4>
                <?php $shorter =  get_sub_field('category_description'); ?>
                <p><?php echo wp_trim_words( $shorter, 20 ); ?></p>
                <p class="read_more_para"><b>Read More</b></p>

            </div>
        </a>
    </div>

  <?php endwhile; else : endif; ?>

  </div>
  </div>
-->








<div class="generic_section">
    <h3>On Promotion</h3>
    <div class="row">
        <?php
        $args = array(
            'post_type'      => 'product',
            'orderby'        => 'rand',
            'posts_per_page' => -1, // get all, we'll filter manually
            'product_cat'    => 'promotion',
        );

        $loop = new WP_Query($args);
        $count = 0;

        while ($loop->have_posts()) : $loop->the_post();
            global $product;

            // Skip if no featured image
            if (!has_post_thumbnail()) continue;

            // Stop after 8 products
            if ($count >= 8) break;

            $count++;
        ?>
            <div class="col-md-3">
                <div class="product_card">
                    <a href="<?php echo get_permalink(); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
                        <div class="product_thumb" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>');"></div>
                    </a>

                    <div class="inside_prod_card the_title">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'brand');
                        if (!empty($terms)) :
                            foreach ($terms as $term) : ?>
                                <div class="<?php echo $term->slug; ?> mini_brand_logo">
                                    <img src="<?php the_field('brand_logo', $term); ?>" />
                                </div>
                            <?php endforeach;
                        endif;
                        ?>

                        <h4><?php the_title(); ?></h4>
                        <h6><?php echo $product->get_sku(); ?></h6>

                        <div class="price_red">
                            <?php echo $product->get_price_html(); ?><br>
                        </div>

                        <?php woocommerce_template_loop_add_to_cart($loop->post, $product); ?>

                        <?php if (!is_user_logged_in()) : ?>
                            <div class="open_quote_modal">Add to Quote</div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>







<!--

    <div class="generic_section">
        <h3>This is CaterMarket</h3>
        <div class="row">


          <?php
             // the query
             $the_query = new WP_Query( array(

               'post_type' => 'post',
                'posts_per_page' => 4,
             ));
          ?>

          <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="col-md-3">
                        <a class="blog_card" href="<?= esc_url( get_permalink() ); ?>">
                            <div class="blog_thumb" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                            <div class="inside_blog_card">
                                <h4><?php echo wp_trim_words( $post->post_title, 7 ); ?></h4>
                                <?php echo wp_trim_words( $post->post_content, 15 ); ?>
                            </div>
                        </a>
                    </div>

                <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

          <?php else : ?>

          <?php endif; ?>





        </div>

    </div>
    
    -->
    
    

    <div class="generic_section our_brands">
        <h3>Our Brands</h3>

        <div class="brand_slider">
            <?php if( have_rows('our_brands','option') ): while( have_rows('our_brands','option') ) : the_row(); ?>
                <div>
                    <div class="brand_logo">
                      <a href="<?php get_category_link( the_sub_field('brand_link','option') ); ?>">
                        <img src="<?php the_sub_field('brand_logo','option'); ?>">
                      </a>
                    </div>
                </div>
            <?php endwhile; else : endif; ?>
        </div>

    </div>

    <div class="generic_section">
        <h3>What people say about us</h3>

        <div class="people_say">
        <?php if( have_rows('our_testimonials','option') ): while( have_rows('our_testimonials','option') ) : the_row(); ?>
            <div>
                <div class="test_block">
                    <p>"<?php the_sub_field('testimonial','option'); ?>""</p>
                    <h4><?php the_sub_field('testimonial_person','option'); ?></h4>
                </div>
            </div>
        <?php endwhile; else : endif; ?>
        </div>

    </div>


</div>
</div>
</div>











<?php get_footer(); ?>
