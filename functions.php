<?php

/**
 * pgb-child functions and definitions
 */

add_action( 'wp_enqueue_scripts', 'pgb_child_enqueue_styles', 11 );
function pgb_child_enqueue_styles() {
  wp_dequeue_style('pgb-google-font');
  wp_dequeue_style('pgb-fontawesome');
  wp_dequeue_style('pgb-bootstrap');
  wp_enqueue_style('pgb-bootstrap-min', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
  //wp_enqueue_style( 'pgb-style', get_stylesheet_directory_uri() . '/css/pgb-style-1.1.1.min.css' );
  // wp_enqueue_style( 'pgb', get_template_directory_uri() . '/style.css' ); // PGB styles now covered by N7 style
	// wp_enqueue_style( 'pgb-fonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300,300italic' );
  wp_dequeue_style( 'pgb-style' ); // removes non-minified nectar7 styles from queue
  wp_enqueue_style( 'nectar7', get_stylesheet_directory_uri() . '/style.min.css' );
  wp_dequeue_style( 'problogger_styles' ); // problogger style.css now covered by N7 style
}

add_action( 'wp_enqueue_scripts', 'pgb_child_enqueue_scripts', 11 );
function pgb_child_enqueue_scripts() {
    wp_enqueue_script( 'nectar7-js', get_stylesheet_directory_uri() . '/includes/js/nectar7.js', array('jquery') );
    // remove gforms_bootstrapper_js which just handles file inputs and isnt needed here
    wp_dequeue_script( 'gforms_bootstrapper_js' );
}

// remove wp version param from any enqueued scripts
function nectar7_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'nectar7_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'nectar7_remove_wp_ver_css_js', 9999 );

function nectar7_wdjs_no_defer( $no_defer ){
  $no_defer[] = 'jquery';
  $no_defer[] = 'pgb-bootstrapwpjs';
  $no_defer[] = 'gform_gravityforms';
  /* visual composer grid scripts */
  $no_defer[] = 'wpb_composer_front_js';
  $no_defer[] = 'vc_grid';
  $no_defer[] = 'vc_grid-js-imagesloaded';
	$no_defer[] = 'vc_masonry';
	$no_defer[] = 'vc_grid-style-all-masonry';
	$no_defer[] = 'vc_grid-style-lazy-masonry';
	$no_defer[] = 'vc_grid-style-load-more-masonry';
	$no_defer[] = 'prettyphoto';
	$no_defer[] = 'vc_pageable_owl-carousel';
  /* end visual composer grid scripts */
  return $no_defer;
}
add_filter( 'do_not_defer', 'nectar7_wdjs_no_defer');

function nectar7_wdjs_labjs_src( $lab_src, $lab_ver ) {
	return str_replace( '?ver='. $lab_ver, '', $lab_src ); // no $lab_ver
}
add_filter( 'wdjs_labjs_src', 'nectar7_wdjs_labjs_src', 10, 2 );

function nectar7_cleaner_wp_header_please() {
	// Display the links to the extra feeds such as category feeds
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	// Display the links to the general feeds: Post and Comment Feed
	remove_action( 'wp_head', 'feed_links', 2 );
	// Display the link to the Really Simple Discovery service endpoint, EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// Display the link to the Windows Live Writer manifest file.
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// index link
	remove_action( 'wp_head', 'index_rel_link' );
	// prev link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// Display relational links for the posts adjacent to the current post.
	remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
	// Display the XHTML generator that is generated on the wp_head hook, WP version
	remove_action( 'wp_head', 'wp_generator' );
	// rel-canonical tag
	remove_action( 'wp_head', 'rel_canonical' );
	// default wp shortlink meta tag
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
  // rest_output_rsd no idea but hey
  remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );
  // rest_output_link_wp_head adds <link rel="https://api.w.org"...
  remove_action( 'wp_head', 'rest_output_link_wp_head' );
}
add_action( 'wp_head', 'nectar7_cleaner_wp_header_please', 0 );

/**
 * Chat code JS
 *
 */
//add_action( 'tha_head_bottom', 'nectar7_chat_js' );
function nectar7_chat_js() {
	?>
	<!--Start of Zopim Live Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
	$.src="//v2.zopim.com/?3QTM9x4eKtsWWMq3RyePaAEVThayWclE";z.t=+new Date;$.
	type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
	</script>
	<!--End of Zopim Live Chat Script-->
	<?php
}

/**
 * WooCommerce Cart object in Menu
 *
 */
function get_woo_cart_menu() {
	global $woocommerce;
	if ( sizeof( $woocommerce->cart->cart_contents) > 0 ) :
		$item = sprintf( '<ul class="nav navbar-nav navbar-right"><li class="cartlink"><a href="%s">(%s) items <span class="shopping-cart-icon"></span></a></li></ul>', $woocommerce->cart->get_cart_url(), $woocommerce->cart->get_cart_contents_count() );
	else :
		$item = sprintf( '<ul class="nav navbar-nav navbar-right"><li class="cartlink"><a href="%s">(0) Items <span class="shopping-cart-icon"></span></a></li></ul>', $woocommerce->cart->get_cart_url() );
	endif;
	return $item;
}

/**
 * Top bar for newsletter
 *
 */
add_action( 'tha_header_before', 'n7_top_widget_bar' );
function n7_top_widget_bar() {
  // #todo : make this dynamic checkbox on pages meta?
  if ( !is_page(array( 'opc-test', 'order-niagen', 'order-niagen-46', 'why-nectar7' ) ) ) {
  ?>
	<div id="top-widget-bar" class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<?php echo do_shortcode( '[gravityform id="3" title="false" description="true" ajax="true"]' ); ?>
			</div>
		</div>
	</div>
<?php
  }
}

//remove_filter( 'the_content', 'wpautop' );

//Disabled Jumbotron

remove_action( 'pgb_block_navbar', array( 'ProBlogger_Partials', 'problogger_jumbotron'), 20 );

//Remove result count
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
//Remove Default sorting
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

//Remove pricing and rating
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);

//Remove sidebar
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

//Remove add to cart from product archive

remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

add_image_size( 'cart_item_image_size', 180, 180, true );
add_filter( 'woocommerce_cart_item_thumbnail', 'cart_item_thumbnail', 10, 3 );

function cart_item_thumbnail( $thumb, $cart_item, $cart_item_key ) {

 // create the product object
 $product = get_product( $cart_item['product_id'] );
 return $product->get_image( 'cart_item_image_size' );

}

add_action( 'after_setup_theme', 'n7_register_science_menu' );
function n7_register_science_menu() {
	register_nav_menu( 'science', __( 'Science Menu', 'pgb' ) );
}

add_action( 'pre_get_posts', 'custom_pre_get_posts_query' );

function custom_pre_get_posts_query( $q ) {

	if ( ! $q->is_main_query() ) return;
	if ( ! $q->is_post_type_archive() ) return;

	if ( ! is_admin() && is_shop() ) {
    // Don't display products in the 'subscribe' category on the shop page
		$q->set( 'tax_query', array(array(
			'taxonomy' => 'product_cat',
			'field' => 'slug',
			'terms' => array( 'subscribe' ),
			'operator' => 'NOT IN'
		)));

	}

	remove_action( 'pre_get_posts', 'custom_pre_get_posts_query' );

}

add_action('template_redirect', 'n7_emptycart_redirect');
function n7_emptycart_redirect(){
  global $woocommerce;

  $cartContent = sizeof( $woocommerce->cart->get_cart() );

  if( is_checkout() && ( ! is_wc_endpoint_url( 'order-received' ) )&& ( $cartContent == 0 ) ) {
    $redir = true;
    if ( function_exists('is_wcopc_checkout') ) {
      // don't trigger this empty card redirect on one page checkout which is a checkout but hey
      if ( is_wcopc_checkout() ) {
        $redir = false;
      }
    }
    if ( $redir ) {
      $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
      wp_redirect( $shop_page_url );
      exit;
    }
  }
}

/**
 * hook to woocommerce_sale_flash
 *
 * to remove Sales Flash
 * https://wordimpress.com/how-to-remove-product-sales-flash-in-woocommerce/
 */
add_filter('woocommerce_sale_flash', 'n7_hide_sales_flash');
function n7_hide_sales_flash() {
  return '';
}

add_shortcode('stylesheet_directory_uri', 'func_stylesheet_directory_uri');

function func_stylesheet_directory_uri()
{
	return get_stylesheet_directory_uri();
}

add_shortcode('blog_url', 'func_blog_url');

function func_blog_url()
{
	return get_bloginfo('url');
}

/**
 * woocommerce_package_rates is a 2.1+ hook
 */
add_filter( 'woocommerce_package_rates', 'hide_shipping_when_free_is_available', 10, 2 );

/**
 * Hide shipping rates when free shipping is available
 *
 * @param array $rates Array of rates found for the package
 * @param array $package The package array/object being shipped
 * @return array of modified rates
 */
function hide_shipping_when_free_is_available( $rates, $package ) {

 	// Only modify rates if free_shipping is present
  	if ( isset( $rates['free_shipping'] ) ) {

  		// To unset a single rate/method, do the following. This example unsets flat_rate shipping
  		unset( $rates['flat_rate'] );

  		// To unset all methods except for free_shipping, do the following
  		$free_shipping          = $rates['free_shipping'];
  		$rates                  = array();
  		$rates['free_shipping'] = $free_shipping;
	}

	return $rates;
}

/**
 * hook to woocommerce_enable_order_notes_field filter
 *
 * to hide notes on opc
 */
function nectar7_filter_order_notes( $ret ) {
  if ( function_exists( 'is_wcopc_checkout' ) ) {
    if ( is_wcopc_checkout() ) {
      $ret = false;
    }
  }
  return $ret;
}
add_filter('woocommerce_enable_order_notes_field', 'nectar7_filter_order_notes');

/**
 * hook body_class
 *
 * come get some
 */
function nectar7_body_classes( $classes ) {
  if ( is_page('why-nectar7') ) {
    $classes[] = 'unpad';
  }

  return $classes;
}
add_filter( 'body_class', 'nectar7_body_classes' );

/**
 * hook woocommerce_cart_shipping_method_full_label
 *
 * change Free Shipping to -0.00- or something
 */
function nectar7_filter_shipping_label( $label, $method ) {
  if ( $method->id == 'free_shipping' ) {
    if ( is_wcopc_checkout() ) {
      $label = '<s>$00.00</s>';
    }
  }
  return $label;
}
add_filter('woocommerce_cart_shipping_method_full_label', 'nectar7_filter_shipping_label', 10, 2);

/**
 * hook to pgb_page_width
 *
 * filter to add more option(s)
 */
function nectar7_more_page_widths( $widths, $post ) {
  // pop 960 off so order is ok maybe?
  unset( $widths['960px'] );
  // add 1020
  $widths['1020px'] = '1020px';
  // add 960 back
  $widths['960px'] = '960px';
  return $widths;
}
add_filter( 'pgb_page_width_options', 'nectar7_more_page_widths', 10, 2 );

/**
 * hook woocommerce_checkout_fields
 *
 * to change labels to placeholders (only on opc?)
 */
function nectar7_filter_checkout_fields( $fields ) {

  if ( function_exists('is_wcopc_checkout') ) {
    // on OPC, change Labels to Placeholders in Billing & Shipping fields
    if ( is_wcopc_checkout() ) {
      $labelize = array( 'billing', 'shipping' );
      foreach ( $labelize as $l ) {
        if ( isset( $fields[$l] ) ) {
          foreach ( $fields[$l] as $k => $v ) {
            if ( isset ( $fields[$l][$k]['label'] ) ) {
              $label = $fields[$l][$k]['label'];
              $fields[$l][$k]['placeholder'] = $label;
              unset( $fields[$l][$k]['label'] );
            }
          }
        }
      }
    }
  }
  //wp_die('<pre>'. print_r($fields,true) .'</pre>');
  return $fields;
}
add_filter( 'woocommerce_checkout_fields', 'nectar7_filter_checkout_fields' );

/**
 * hook through wc_authorize_net_cim_credit_card_payment_form_manage_payment_methods_button_html
 *
 * woocommerce-gateway-authorize-net-cim\lib\skyverge\woocommerce\payment-gateway\
 * class-sv-wc-payment-gateway-payment-form.php
 *
 * to change the "Manage Payment Methods" button injected in to Not a button
 */
function nectar7_manage_payment_btn( $html ) {
  if ( function_exists('is_wcopc_checkout') ) {
    // only make Not a button on one page checkout pages?
    if ( is_wcopc_checkout() ) {
      $html = str_replace( 'class="button"', '', $html );
      $html = str_replace( 'float:right', 'display: block', $html );
    }
  }
  return $html;
}
add_filter( 'wc_authorize_net_cim_credit_card_payment_form_manage_payment_methods_button_html', 'nectar7_manage_payment_btn' );

//Enhanced eCommerce Tracking - GTM - by Eric DuRose 12/18/2015
add_action( 'woocommerce_thankyou', 'nectar7_custom_tracking' );

function nectar7_custom_tracking( $order_id ) {

// Lets grab the order
$order = new WC_Order( $order_id );


 $items = $order->get_items();


 $purchase_id = $order_id;
 $total_sale = $order->get_total();
 $tax = $order->get_cart_tax();
 $ship_cost = 0.00;
 $coupon_name_a = $order->get_used_coupons();
 $coupon_name = $coupon_name_a[0];
 ?>

<script>

dataLayer.push({
'event': 'transactionSuccess',
  'ecommerce': {
    'purchase': {
      'actionField': {
        'id': '<?php echo $order_id; ?>',
        'affiliation': 'WooCommerce Store',
        'revenue': '<?php echo $total_sale; ?>',
        'tax': '<?php echo $tax; ?>',
        'shipping': '<?php echo $ship_cost; ?>',
        'coupon': '<?php echo $coupon_name; ?>'
      },
      'products':[
<?php
$pcount = 0;
foreach ( $items as $k=>$v ) {
if ( $pcount++ > 0 ) echo ',';
?>
{
'name':'<?php echo $v['name']; ?>', //ProductNameorIDisrequired
'id':'<?php echo $v['product_id']; ?>',
'price':'<?php echo $v['line_total']; ?>',
'brand':'Nectar7',
'category':'<?php echo $v['name']; ?>',
'variant': '<?php echo $v['lace-size']; ?>',
'quantity': '<?php echo ''. $v['qty'] ?>',
'coupon': '<?php echo $coupon_name; ?>'
}
<?php } ?>
]
}
}
});
</script>
<?php
}

// look for a query param ?exclusive=1 & empty cart if yes
function nectar7_emptycart_action() {
  if ( isset( $_REQUEST['exclusive'] ) ) {
    if ( $_REQUEST['exclusive'] == 1 ) {
      // empty the cart?
      wc_empty_cart();
    }
  }
}
// set priority 18 so it fires before the add-to-cart happens which is 20
add_action( 'wp_loaded', 'nectar7_emptycart_action', 18 );