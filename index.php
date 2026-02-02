<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<div class="single_secondary_header" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/pexels-francesco-paggiaro-731160.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

								<h1>Our Blog</h1>

            </div>
        </div>
    </div>
    <div class="thumb_overlay"></div>
</div>

<div class="page_content blog_landing">
    <div class="container">
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

                    <div class="col-md-6">
                        <a class="blog_card" href="<?= esc_url( get_permalink() ); ?>">
                            <div class="blog_thumb" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                            <div class="inside_blog_card">
                                <h4><?php the_title(); ?></h4>
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
</div>


<?php
get_footer();
