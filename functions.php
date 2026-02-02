<?php
/**
 * Twenty Twenty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
 // This theme uses wp_nav_menu() in two locations.
 register_nav_menus( array(
   'primary' => __( 'Primary Menu'),
   'social'  => __( 'Social Links Menu'),
 ) );
 // Enable Featured Image function
  function mytheme_post_thumbnails() {
  add_theme_support( 'post-thumbnails' );
  }
  add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );





/*
add_filter('woocommerce_product_get_price_excluding_tax', function($price, $product, $args) {
    if (is_a($product, 'WC_Product')) {
        // Use the new function
        return wc_get_price_excluding_tax($product, $args);
    }
    return $price;
}, 10, 3);
*/







/**
 * Proper ob_end_flush() for all levels
 *
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices.
 */
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );




  if (function_exists ( 'acf_add_options_page' )) {
  	acf_add_options_page ( array (
  			'page_title' => 'CM Options',
  			'menu_title' => 'CM Options',
  			'menu_slug' => 'cm-options',
  			'capability' => 'edit_posts',
  			'redirect' => false
  	) );
  }


  function filter_woocommerce_cart_item_price( $price_html, $cart_item, $cart_item_key ) {
      // Get the product object
      $product = $cart_item['data'];

      // Is a WC product
      if ( is_a( $product, 'WC_Product' ) ) {
          // Price without VAT
          $price_excl_tax = (float) wc_get_price_excluding_tax( $product );

          // Price with VAT
          $price_incl_tax = (float) wc_get_price_including_tax( $product );

          // Edit price html
          $price_html = wc_price( $price_excl_tax ) . '<span class="my-class">&nbsp;' . __( 'Excl VAT', 'woocommerce' ) . '</span><br>';
        //  $price_html .= wc_price( $price_incl_tax ) . '<span class="my-class">&nbsp;' . __( 'inc VAT', 'woocommerce' ) . '</span>';
      }

      return $price_html;
  }
  add_filter( 'woocommerce_cart_item_price', 'filter_woocommerce_cart_item_price', 10, 3 );


  function careless_add_images_to_wc_emails( $args ) {
      $args['show_image'] = true;
      $args['image_size'] = array( 100, 50 );

      return $args;
  }
  add_filter( 'woocommerce_email_order_items_args', 'careless_add_images_to_wc_emails' );


/*
  add_filter( 'woocommerce_cart_product_subtotal', 'exclude_tax_cart_product_subtotal', 15, 4 );
  function exclude_tax_cart_product_subtotal( $product_subtotal, $_product, $quantity, $object ) {
      $row_price  = $_product->get_price_excluding_tax( $quantity );
      $ex_tax = wc_price( $row_price );
      return $ex_tax;
  }
*/


  add_filter( 'woocommerce_order_item_thumbnail', 'add_email_order_item_permalink', 10, 2 ); // Product image
  add_filter( 'woocommerce_order_item_name', 'add_email_order_item_permalink', 10, 2 ); // Product name
  function add_email_order_item_permalink( $output_html, $item, $bool = false ) {
      // Only email notifications
      if( is_wc_endpoint_url() )
          return $output_html;

      $product   = $item->get_product();

      return '<a href="'.esc_url( $product->get_permalink() ).'">' . $output_html . '</a>';
  }

  function ts_you_save() {

    global $product;

     if( $product->is_type('simple') || $product->is_type('external') || $product->is_type('grouped') ) {

           $regular_price     = get_post_meta( $product->get_id(), '_regular_price', true );
          $sale_price     = get_post_meta( $product->get_id(), '_sale_price', true );

           if( !empty($sale_price) ) {

                $amount_saved = $regular_price - $sale_price;
                $currency_symbol = get_woocommerce_currency_symbol();
                $percentage = round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 );
                ?>
                <p style="display: inline-block;border: 1px solid #000;padding: 5px 10px;border-radius: 10px;font-size:14px;color:#000;"><b>Sale! <?php echo " ". number_format($percentage,0, '', '')."% savings!"; ?></b></p>

                <?php
          }
     }
  }
  add_action( 'woocommerce_single_product_summary', 'ts_you_save', 11 );


//Only show products in the front-end search results
function lw_search_filter_pages($query) {
if ($query->is_search) {
$query->set('post_type', 'product');
$query->set( 'wc_query', 'product_query' );
}
return $query;
}

add_filter('pre_get_posts','lw_search_filter_pages');
