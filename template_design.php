<?php
/**
 * Template name: Design Centre
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


























  <div class="generic_section">
  <div class="container blog_landing">
  <div class="row">

  <div class="col-md-12">
    <h3>Projects recently completed</h3>
</div>

  <?php if( have_rows('projects_completed') ): while( have_rows('projects_completed') ) : the_row(); ?>

    <div class="col-md-3">
        <a class="blog_card" href="<?php the_sub_field('projects_pdf'); ?>">
            <div class="blog_thumb" style="background-image: url('<?php the_sub_field('projects_image'); ?>');"></div>
            <div class="inside_blog_card">
                <h4><?php the_sub_field('projects_name'); ?></h4>
                <div class="act_btn">View</div>
            </div>
        </a>
    </div>


  <?php endwhile; else : endif; ?>





</div>
</div>
</div>





















<?php get_footer(); ?>
