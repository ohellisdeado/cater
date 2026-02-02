<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<div class="pillar"></div>
<div class="single_secondary_header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Error 404</h1>
                <div class="sub_line"></div>
            </div>
        </div>
    </div>
</div>

<div class="page_content">
    <div class="container">
        <div class="row">
					<div class="col-md-6">
							<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
					</div>
            <div class="col-md-6">
                <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
