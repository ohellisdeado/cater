<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
			<title><?php the_title(); ?> | Catermarket</title>
			<meta name="description" content="Food Service Equipment">
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1.0" >
			<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.jpg" />
			<link rel="profile" href="https://gmpg.org/xfn/11">

			<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

			<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.css"/>
			<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick-theme.css"/>

			<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css?version=4.1" rel="stylesheet">

			<?php wp_head(); ?>
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
		<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z8ZW7VWB3Q"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z8ZW7VWB3Q');
</script>
<?php if ( is_user_logged_in() ) { ?>
<?php } else { ?>
	<style>
	.afrfqbt_single_page,
	.afrfqbt{
		display: none!important;
	}
	body{
    max-width: 100%!important;
    padding: 0px!important;
    margin: 0px!important;
}
.xoo-el-section {
    display: block!important;
}
	</style>
<?php } ?>
		<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16470049765"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-16470049765'); </script>

<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16470049765"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-16470049765'); </script>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1292719532151430');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1292719532151430&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
	</head>

	<body <?php body_class(); ?>>



		<?php
				wp_body_open();
		?>

		<div class="mob_trigger">
			<div id="nav-icon3">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>


		<div class="mobile_menu">
				<div class="mobile_menu_tr">
						<div class="mobile_menu_td">
								<?php wp_nav_menu( array('menu' => 'Top Menu') ); ?>
								<?php wp_nav_menu( array('menu' => 'Cart Menu') ); ?>
						</div>
				</div>
		</div>


			<div id="the_header" class="the_header">
					<div class="container">
							<div class="row">
									<div class="col-12">

											<div class="header_tbl">




													<div class="header_tr">
															<div class="header_td logo_side">
																	<a href="<?php echo bloginfo('url'); ?>">
																			<img class="cater_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/catermarketlogo.png" alt="Catermarket logo">
																	</a>
															</div>
															<div class="header_td menu_side">


																<div class="top_right_tbl top_hide">
																		<div class="top_right_tr">
																				<div class="top_right_td">
																						<div class="menu_wrap">
																								<?php wp_nav_menu( array('menu' => 'Top Menu') ); ?>
																						</div>
																				</div>
																				<div class="top_right_td">
																					<div class="social_icons">

																							<a class="social_cube" href="https://www.facebook.com/catermarket" target="_blank" title="Social Media">
																									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_fb.svg" alt="Social Media">
																							</a>
																							<a class="social_cube" href="https://www.instagram.com/catermarket/?hl=en" target="_blank" title="Social Media">
																									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_in.svg" alt="Social Media">
																							</a>
																							<a class="social_cube" href="https://www.linkedin.com/company/catermarket" target="_blank" title="Social Media">
																									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon_li.svg" alt="Social Media">
																							</a>

																					</div>
																				</div>
																		</div>
																</div>





															</div>
													</div>
											</div>






								</div>
							</div>
					</div>
			</div>

<div class="pillar"></div>

<div class="menu_overlay">

</div>

			<div class="sub_nav">
					<div class="container">
							<div class="row">
									<div class="col-12">
											<div class="sub_nav_tbl">
												<div class="sub_nav_tr">
													<div class="sub_nav_td cat_drops">

															<div class="cat_drop">
																	<div class="cat_drop_tbl">
																		<div class="cat_drop_tr">
																			<div class="cat_drop_td icon">

																			</div>
																			<div class="cat_drop_td txt">
																					Categories
																			</div>
																		</div>
																	</div>
															</div>

															<div class="cat_list">

<?php wp_nav_menu( array('menu' => 'Cat Menu') ); ?>

															</div>

													</div>
													<div class="sub_nav_td the_search">
															<?php get_search_form(); ?>
													</div>
													<div class="sub_nav_td login_cart">


														<div class="top_right_tbl">
																<div class="top_right_tr">
																		<div class="top_right_td">
																				<div class="menu_wrap">
																						<?php wp_nav_menu( array('menu' => 'Cart Menu') ); ?>
																				</div>
																		</div>
																		<div class="top_right_td">
																			<div class="social_icons">

																				<div class="social_cube open_search_menu">
																						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/magnifying-glass.png">
																				</div>

																					<a class="social_cube" href="<?php echo bloginfo('url'); ?>/cart/" title="View my Cart">
																							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shopping-cart.png" alt="Social Media">
																					</a>
																					<a class="social_cube" href="<?php echo bloginfo('url'); ?>/request-a-quote/" title="Request a Quote">
																							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/exam.png" alt="Social Media">
																					</a>


																			</div>
																		</div>
																</div>
														</div>


													</div>
												</div>
											</div>
									</div>
							</div>
					</div>
			</div>


<div class="search_menu">
<div class="search_tbl">
	<div class="search_tr">
		<div class="search_td">
				<div class="inside_search_block">
						<h4>Search here:</h4>
						<?php get_search_form(); ?>
				</div>
		</div>
	</div>
</div>

<img class="close_search_menu" src="<?php echo get_stylesheet_directory_uri(); ?>/img/close_search_menu.png" alt="Close">

</div>




			<div class="quote_modal_overlay">
					<div class="quote_modal_tbl">
						<div class="quote_modal_tr">
							<div class="quote_modal_td">
									<div class="quote_modal text-center">

									       <img style="width: 100px;height: auto;margin: 0px auto 30px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/quote_icon.svg">
									           <h2>Thank You</h2>
									           <h3>For Requesting A Quote!</h3>
											<p>The quote that you are requesting will be<br>
											mailed to you from the website.</p>
											<p>
											    Please provide us with your details</p>
											<a class="cta_modal" href="<?php echo bloginfo('url'); ?>/my-account/">Start quote</a>
											<div class="close_quote_modal">No thank you</div>
									</div>
							</div>
						</div>
					</div>
			</div>
