<?php
/**
 * The template is a form container
 *
 * This template can be overridden by copying it to yourtheme/templates/easy-login-woocommerce/xoo-el-form.php.
 *
 * HOWEVER, on occasion we will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen.
 * @see     https://docs.xootix.com/easy-login-woocommerce/
 * @version 2.5
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$form_active = $args['form_active'];

?>



<div class="xoo-el-form-container xoo-el-form-<?php echo esc_attr( $args['display'] ); ?>" data-active="<?php echo esc_attr( $form_active ); ?>">

<div class="registration_info" style="text-align: center;padding: 0px 15px;">
	<h2 style="font-size: 35px;
    line-height: 35px;
    margin: 0px 0px 25px 0px;
    font-weight: bold;
    font-family: 'Open Sans', sans-serif;">Welcome to CaterMarket!</h2>
<!--
	<h3 style="font-size: 20px;margin: 0px 0px 25px 0px;"><strong>Register now for a chance to win BIG in our lucky draw!</strong></h3>

	<p>By signing up, you'll automatically receive 2 entries to potentially win a Johny Milkshake/Frappe machine valued at R6000.00. But wait, there's more! Increase your chances of winning by earning additional entries through simple steps:
	</p>
	-->
</div>

	<?php if( $form_active === 'resetpw' && isset( $args['forms']['resetpw']['user'] ) && !is_wp_error( $args['forms']['resetpw']['user'] ) ): ?>
		<span class="xoo-el-resetpw-tgr xoo-el-resetpw-hnotice"><?php _e( 'Continue to resetting password', 'easy-login-woocommerce' ); ?></span>
	<?php endif; ?>

	<?php do_action( 'xoo_el_before_header', $args ); ?>

	<?php xoo_el_helper()->get_template( 'global/xoo-el-header.php', array( 'args' => $args ) ); ?>

	<?php do_action( 'xoo_el_after_header', $args ); ?>

	<?php foreach ( $args['forms'] as $form => $form_args ): ?>

		<?php if( $form_args['enable'] !== 'yes' ) continue; ?>

		<div data-section="<?php echo esc_attr( $form ) ?>" class="xoo-el-section">

			<div class="xoo-el-fields">

				<?php do_action( 'xoo_el_before_form', $form, $args ); ?>

				<form class="xoo-el-action-form xoo-el-form-<?php echo esc_attr( $form ); ?>">

					<?php do_action( 'xoo_el_form_start', $form, $args ); ?>

					<?php xoo_el_helper()->get_template( 'global/xoo-el-'.$form.'-section.php', array( 'args' => $args ) ); ?>

					<?php do_action( 'xoo_el_form_end', $form, $args ); ?>

				</form>

				<?php do_action( 'xoo_el_after_form', $form, $form_args ); ?>

			</div>

		</div>

	<?php endforeach; ?>

	<?php do_action( 'xoo_el_container_end', $args ); ?>
	<div class="registration_info" style="text-align: center;padding: 0px 15px;">
<br>
		<p>Remember, the more entries you have, the higher your chances of winning! Don't miss out
	on this exciting opportunity.</p>

	</div>
</div>
