<?php
/**
 * Checkout Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

if ( !is_wcopc_checkout() ) do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

// filter hook for include new pages inside the payment method
$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', WC()->cart->get_checkout_url() ); ?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( $get_checkout_url ); ?>" enctype="multipart/form-data">

	<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

		
		
		<div class="row">
			<div class="col-xs-12<?php if ( !is_wcopc_checkout() ) echo ' col-sm-7 col-md-8'; ?> billingdetails">
				<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
				<div class="col2-set" id="customer_details">
					<div class="col-1">
						<?php do_action( 'woocommerce_checkout_billing' ); ?>
					</div>
		
					<div class="col-2">
						<?php do_action( 'woocommerce_checkout_shipping' ); ?>
					</div>
				</div>
				<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
				<?php
        if ( is_wcopc_checkout() ) {
          ?><p><strong><?php _e( 'Order details', 'woocommerce' ); ?></strong></p><?php
        } else { ?>
				<h3 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3>
				<?php
        }
        do_action( 'woocommerce_checkout_before_order_review' ); ?>
					<div id="order_review" class="woocommerce-checkout-review-order">
						<?php do_action( 'woocommerce_checkout_order_review' ); ?>
					</div>
				<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
			</div>
      <?php if ( !is_wcopc_checkout() ) { ?>
			<div class="col-xs-12 col-sm-5 col-md-4 testimonials" style="margin-top: 15px;">
				<h3>Happy Customers</h3>
				<blockquote>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonials/jeromy.jpg" class="img-responsive testimonial-image" />
					<p>At 40 I have been struggling with maintaining focus and energy running a business, family and personal time: surfing, mountain biking, soccer and more. NECTAR7 has delivered me a new level and source of power in every aspect of my life. I feel better and notice a faster recovery time when pushing my physical activities on a daily basis.</p>
					<footer>Jeromy S., Del Mar, CA</footer>
				</blockquote>
				<blockquote>
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonials/wanda.jpg" class="img-responsive testimonial-image" />
					<p>I have been taking NECTAR7 Niagen&reg; for about three months. Usually around the early autumn, I suffer with sinus infections, colds and generally feel sluggish. This year, while many around me have been sick during the climate change from summer to fall with widely varying  temperatures, I have felt wonderful!! I sleep more soundly than I have in years and have the energy to walk 4 to 6 miles a day!! I recently had a full physical with blood work. The doctor is amazed at my way above average wonderful health!!</p>
					<footer>Wanda R., Dallas, TX</footer>
				</blockquote>
			</div>
      <?php } ?>
		</div>
		

	<?php endif; ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
