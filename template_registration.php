<?php
/**
 * Template name: Register
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
<?php include( 'second_header.php' ); ?>
<div class="page_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="login_tabs_section on_register">
              		<a class="login_tabs " href="<?php echo bloginfo('url'); ?>/my-account">
              				Login
              		</a>
              		<div class="login_tabs active_tab">
              				Register
              		</div>
              </div>
              
              <?php 
              // Disable Easy Login plugin for this page and use WooCommerce native form
              if (class_exists('Xoo_El_Main')) {
                  remove_filter('woocommerce_locate_template', array(xoo_el(), 'replace_wc_templates'), 10);
                  remove_filter('wc_get_template', array(xoo_el(), 'replace_wc_templates'), 10);
              }
              
              // Output WooCommerce login/registration form directly
              echo '<div class="woocommerce">';
              wc_get_template('myaccount/form-login.php');
              echo '</div>';
              ?>
              
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>