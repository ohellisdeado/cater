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

<?php include( 'second_header.php' ); ?>













<div class="page_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
            </div>
        </div>
    </div>
</div>


<div class="container">
<div class="row">
<div class="col-md-12">





































    <div class="generic_section our_brands text-center">
        <h3>Our Brands</h3>

        <div class="brand_slider">
            <?php if( have_rows('our_brands','option') ): while( have_rows('our_brands','option') ) : the_row(); ?>
                <div>
                    <div class="brand_logo">
                        <img src="<?php the_sub_field('brand_logo','option'); ?>">
                    </div>
                </div>
            <?php endwhile; else : endif; ?>
        </div>

    </div>




</div>
</div>
</div>











<?php get_footer(); ?>
