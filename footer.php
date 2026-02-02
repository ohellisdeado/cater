<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!--
<div class="container">
		<div class="row">
				<div class="col-md-12">

						<div class="xmas_message">
						<h5>Holiday Order & Delivery Information:</h5>
						<p>
To ensure your order arrives before Christmas, please place your order by December 17th. Orders placed between December 20th and January 6th, 2025, will only be shipped starting January 7th, 2025. We appreciate your understanding and wish you a joyful holiday season!
						</p>
						</div>

				</div>
		</div>
</div>
-->

<!--
<div class="mobile_search">
	<div class="the_search">
<?php get_search_form(); ?>
</div>
</div>
-->

<a href="https://api.whatsapp.com/send?phone=27685749534" class="whatsapp_link" target="_blank"></a>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.min.js"></script>


<div class="the_footer">
		<div class="container">
				<div class="row">
						<div class="col-md-3">
							<div class="footer_coll">
								<h4>Company Information</h4>
								<?php wp_nav_menu( array('menu' => 'Footer Company Information') ); ?>
								</div>
						</div>
						<div class="col-md-3">
							<div class="footer_coll">
								<h4>Quick Help</h4>
								<?php wp_nav_menu( array('menu' => 'Footer Quick Help') ); ?>
								</div>
						</div>
						<div class="col-md-3">
								<div class="footer_coll">
								<h4>Stay in Contact</h4>
								<?php wp_nav_menu( array('menu' => 'Footer Stay in Contact') ); ?>
							</div>
						</div>
						<div class="col-md-3">
							<div class="footer_coll">
							<a href="<?php echo bloginfo('url'); ?>">
									<img class="cater_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/catermarketlogo_w.png" alt="Catermarket logo">
							</a>

							<img class="payment_logos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/payment_options.png" alt="Catermarket logo">
</div>


						</div>
				</div>
		</div>
</div>

<div class="credits">
	<a href="https://modernwebpresence.com/" target="_blank" title="Modern Web Presence">Developed by MWP 2024</a>
</div>





			<script type="text/javascript">
			    jQuery(".mob_trigger").click(function(){
			        jQuery(".mobile_menu").slideToggle();
			    });

					jQuery(".cat_drop").click(function(){
							jQuery(".cat_list").toggle();
					});


					jQuery(".cat_drop").click(function(){
							jQuery(".menu_overlay").toggle();
					});
					jQuery(".menu_overlay").click(function(){
							jQuery(".menu_overlay").toggle();
							jQuery(".cat_list").toggle();
					});


					jQuery(".open_quote_modal").click(function(){
							jQuery(".quote_modal_overlay").show();
					});
					jQuery(".close_quote_modal").click(function(){
							jQuery(".quote_modal_overlay").hide();
					});



					jQuery(".open_search_menu").click(function(){
							jQuery(".search_menu").show();
					});
					jQuery(".close_search_menu").click(function(){
							jQuery(".search_menu").hide();
					});



			</script>












<script>









/*
jQuery('.menu-item-422').click(function(e) {

		jQuery(".sub-menu").hide();
		jQuery(".menu-item-422 .sub-menu").toggle();
});
jQuery('.menu-item-400').click(function(e) {

		jQuery(".sub-menu").hide();
		jQuery(".menu-item-400 .sub-menu").toggle();
});
jQuery('.menu-item-392').click(function(e) {

		jQuery(".sub-menu").hide();
		jQuery(".menu-item-392 .sub-menu").toggle();
});
jQuery('.menu-item-396').click(function(e) {

		jQuery(".sub-menu").hide();
		jQuery(".menu-item-396 .sub-menu").toggle();
});
jQuery('.menu-item-412').click(function(e) {

		jQuery(".sub-menu").hide();
		jQuery(".menu-item-412 .sub-menu").toggle();
});
jQuery('.menu-item-433').click(function(e) {

		jQuery(".sub-menu").hide();
		jQuery(".menu-item-433 .sub-menu").toggle();
});
jQuery('.menu-item-417').click(function(e) {

		jQuery(".sub-menu").hide();
		jQuery(".menu-item-417 .sub-menu").toggle();
});
jQuery('.menu-item-427').click(function(e) {

		jQuery(".sub-menu").hide();
		jQuery(".menu-item-427 .sub-menu").toggle();
});
jQuery('.menu-item-439').click(function(e) {

		jQuery(".sub-menu").hide();
		jQuery(".menu-item-439 .sub-menu").toggle();
});
jQuery('.menu-item-441').click(function(e) {

		jQuery(".sub-menu").hide();
		jQuery(".menu-item-441 .sub-menu").toggle();
});
jQuery('.menu-item-444').click(function(e) {

		jQuery(".sub-menu").hide();
		jQuery(".menu-item-444 .sub-menu").toggle();
});
jQuery('.menu-item-449').click(function(e) {

		jQuery(".sub-menu").hide();
		jQuery(".menu-item-449 .sub-menu").toggle();
});


$(document).ready(function(){
  $('.someclass > a').removeAttr("href")
});
*/




</script>

<script>

		jQuery('.limit').each(function(){
		    jQuery(this).data('content', jQuery(this).text())
		    jQuery(this).data('limit', jQuery(this).text().substring(0, 160))
		    jQuery(this).text( jQuery(this).data('limit'))
		})

    jQuery('.more').click(function() {
        var $this = jQuery(this);
        var elP = $this.siblings('p');
        var length = elP.text().length;
        if(length == 160){
            elP.text(elP.data('content'));
        }
        else {
            elP.text(elP.data('limit'));
        }

    });

</script>

			<script>
					window.onscroll = function() {myFunction()};
					var header = document.getElementById("the_header");
					var sticky = header.offsetTop;
					function myFunction() {
					  if (window.pageYOffset > 0) {
								jQuery(".sub_nav").addClass("scrolled");
					  } else {
								jQuery(".sub_nav").removeClass("scrolled");
					  }
					}
			</script>



			<script type="text/javascript">

			    jQuery(document).ready(function(){
				    	jQuery('#nav-icon3').click(function(){
			    				jQuery(this).toggleClass('open');
				    	});
			    });

			</script>

			<script type="text/javascript">
					jQuery(document).ready(function() {
							jQuery('.featured_slider').slick({
								draggable: true,
								autoplay: true,
						    arrows: false,
								speed: 1000,
								adaptiveHeight: true,
								infinite: true,
						    dots: true,
						    fade: false
							});
					});
			</script>

			<script type="text/javascript">
					jQuery(document).ready(function() {
							jQuery('.people_say').slick({
								draggable: true,
								autoplay: true,
								arrows: false,
								speed: 1000,
								infinite: true,
								dots: true,
								fade: false
							});
					});
			</script>



<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('.brand_slider').slick({
			  dots: true,
				infinite: true,
				arrows: false,
				autoplay: true,
			  speed: 300,
			  slidesToShow: 4,
			  slidesToScroll: 1,
			  responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			    // You can unslick at a given breakpoint now by adding:
			    // settings: "unslick"
			    // instead of a settings object
			  ]
			});
		});
</script>






			<?php wp_footer(); ?>
			</body>
			</html>
