<?php
/**
 * Template Name: Video Sales Template Collagen
 *
 * @package pgb
 */

// inject js_composer js & css for toggle FAQs and such
wp_enqueue_script( 'wpb_composer_front_js' );
wp_enqueue_style( 'js_composer_front' );

get_header(); 

global $woocommerce;
$cart_url = $woocommerce->cart->get_cart_url();

?>

	<div id="content" class="main-content-inner col-sm-12 col-md-12 col-lg-12">
		
		<?php tha_content_top(); ?>

		<?php // <!--The Loop ?>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php tha_entry_before(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>

					<?php tha_entry_top(); ?>

					<div class="col-md-12 main-content-inner2 videosalespage">

						<div class="row">

							<?php //get_template_part( 'content', get_post_format() ); ?>
							<div class="entry-content main-entry-content col-md-12">
								<div class="row videobannercontainer collagen">
									<div class="col-xs-12 col-sm-12 col-md-12 text-center">
										<div class="videobanner">
											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
													<h4>NECTAR7 Niagen&reg; &amp; Collagen gives you the power &amp; beauty to do more.</h4>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
													<h1>THREE skin restorative ingredients together for FIRST TIME in ONE spectacular product!</h1>
													<div class="videocontent" style="box-shadow: 0 3px 8px; max-width: 736px; max-height:414px;">
														<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js" async></script>
														<div class="wistia_responsive_padding" style="padding:56.25% 0 28px 0;position:relative;">
															<div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
																<div class="wistia_embed wistia_async_k0xyl7hynd videoFoam=true" style="height:100%;width:100%">
																	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/vsl_collagen_img.jpg" alt="Niagen&reg; &amp; COLLAGEN" width="640" height="360" />
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row refillproducts">
									<div class="col-xs-12">
										<h2><strong>FREE SHIPPING</strong> on all orders over $50.00!</h2>
										<div class="row refillproductsrow">
											<div class="col-xs-12 col-sm-12 col-md-4 eachRefillProduct">
												<h3>Niagen&reg; &amp; COLLAGEN
													<span>Get Started with 1 Bottle</span></h3>
												<div class="refillThumb">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/collagen_single.png" class="img-responsive" />
												</div>
												<div class="priceList">
													<h5>List Price: <span>$65.99</span></h5>
													<h4><span>NOW:</span> $47.99</h4>
													<h5>You Save $18.00 (27.28%)<br />&nbsp;</h5>
												</div>
												<div class="addtocartdiv">
													<!--label><input type="radio" name="refilltype_30" id="refilltype_30_a" value="autofill"/> AutoRefill price - BEST value</label-->
													<!--label><input type="radio" name="refilltype_30" id="refilltype_30_1" value="one_time"/> One-time delivery price</label-->
													<a href="<?php echo $cart_url; ?>?add-to-cart=75" class="btn btn-primary"/>ADD TO CART</a>
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/card_small.png" class="card_xs" />
												</div>	
											</div>
											<div class="col-xs-12 col-sm-12 col-md-4 eachRefillProduct mostPopular">
												<h3>Niagen&reg; &amp; COLLAGEN<br />(90 DAY)
													<span>Most Popular</span></h3>
												<div class="refillThumb">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/collagen_popular.png" class="img-responsive" />
												</div>
												<div class="priceList">
													<h5>List Price: <span>197.97</span></h5>
													<h4><span>NOW:</span> $118.62</h4>
													<h5>You Save $79.35 (40.08%)<br />FREE SHIPPING</h5>
												</div>
												<div class="addtocartdiv">
													<!--label><input type="radio" name="refilltype_90" id="refilltype_90_a" value="autofill"/> AutoRefill price - BEST value</label-->
													<!--label><input type="radio" name="refilltype_90" id="refilltype_90_1" value="one_time"/> One-time delivery price</label-->
													<a href="<?php echo $cart_url; ?>?add-to-cart=167" class="btn btn-primary"/>ADD TO CART</a>
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/card_small.png" class="card_xs" /> 
												</div>	
											</div>
											<div class="col-xs-12 col-sm-12 col-md-4 eachRefillProduct">
												<h3>Niagen&reg; &amp; COLLAGEN<br />(180 DAY)
													<span>Best Value</span></h3>
												<div class="refillThumb">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/collagen_best_value.png" class="img-responsive" />
												</div>
												<div class="priceList">
													<h5>LIST PRICE: <span>$395.94</span></h5>
													<h4><span>NOW:</span> $217.50</h4>
													<h5>YOU SAVE $178.44 (45.07%)<br />FREE SHIPPING</h5>
												</div>
												<div class="addtocartdiv">
													<!--label><input type="radio" name="refilltype_180" id="refilltype_180_a" value="autofill"/> AutoRefill price - BEST value</label-->
													<!--label><input type="radio" name="refilltype_180" id="refilltype_180_1" value="one_time"/> One-time delivery price</label-->
													<a href="<?php echo $cart_url; ?>?add-to-cart=168" class="btn btn-primary"/>ADD TO CART</a>
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/card_small.png" class="card_xs" /> 
												</div>	
											</div>
										</div>
									</div>
								</div>
								<div class="row actiontape">
									<div class="col-xs-12 col-sm-12 col-md-4">
										<h2 class="ordercallout"><a href="callto: 1-800-662-8617"><span>Order by Phone or Ask Questions</span>1-800-662-8617</a></h2>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
										<h2 class="freedeliverycallout">FREE DELIVERY<span>on all orders over $50.00</span></h2>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 text-center">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/guaranteevsl30.png" class="img-responsive" />
									</div>
								</div>
                <div class="row pdesc">
                  <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
                    <p><strong>PRODUCT DESCRIPTION</strong><br />NECTAR7's Niagen&reg; &amp; Collagen is a scientifically based, synergistic blend of astonishing ingredients formulated to make you feel amazing about your skin. Briefly, here's how it works. While Niagen&reg; is busy kick starting your body to synthesize its own natural collagen (a minor miracle), pure collagen was included in NECTAR7's Niagen&reg; &amp; Collagen to give your body's existing collagen levels a boost. Complimenting this three-prong attack against fine lines, wrinkles and sagging skin is Hyaluronic acid – which also helps to lubricant in the joints and the collagen itself. So it's easy to see why NECTAR7's Niagen&reg; &amp; Collagen outperforms any collagen-only product.</p>
                  </div>
                </div>
								<div class="row heroproduct collagen">
									<div class="col-xs-12">
										<div class="row pad30">
											<div class="col-xs-12 col-sm-4 col-md-4">
												<div class="productthumbcon">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/supplement_facts_collagen.png" class="img-responsive" />
												</div>
											</div>
											<div class="col-xs-12 col-sm-8 col-md-8 heroproductcontent">
												<h1>Niagen&reg; &amp; COLLAGEN <span>(WITH HA "HYALURONIC ACID")</span></h1>
												<h2>Supports Radiant, Youthful, Younger Looking Skin*<br />
												<em>Promotes Lean Muscle Firmness*</em></h2>
												<div class="row">
													<div class="col-xs-12 col-sm-6 col-md-6 pad30">
														<div class="productherobox collagenbox">
															<h2>Supplement Facts</h2>
															<h4>Serving Size: <strong>4 Capsules per Day</strong></h4>
															<h4>Servings Per Container: <strong>30</strong></h4>
															<h4>Amount Per Serving: <strong>% Daily Value*</strong></h4>
															<h3>Nicotinamide Riboside (as Niagen&reg;) 100 mg</h3>
															<h3 class="notopborder">Hydrolyzed Fish Collagen 1000 mg</h3>
															<h3 class="noborder">Hyaluronic Acid 50 mg</h3>
															<h3 class="bordertopblk">*% Daily Value not established</h3>
															<h3 class="noborder">Other Ingredients:</h3>
															<h4>Cellulose, Magnesium Vegetable Stearate.</h4>
														</div>
													</div>
													<div class="col-xs-12 col-sm-6 col-md-5 productherodesc pad30">
														<h2>Suggested Use:</h2>
														<p>As a dietary supplement, take two (2) capsules daily in morning and two (2) capsules in the evening, preferably with meals, or as directed by a healthcare professional.</p>
														<h3>No colors added. No artificial flavors.<br/>
															No preservatives. No yeast. Gluten free.</h3>
														<div class="note">
															<p>*These statements have not been evaluated
																by the Food and Drug Administration.
																This product is not intended to diagnose,
																treat, cure or prevent any disease.</p>
														</div>		
													</div>
												</div>
											</div>	
										</div>
									</div>
								</div>
								<div class="row powerandbeauty">
									<div class="col-md-12 col-sm-12 col-xs-12 leftmaincontent">
										<div class="row leftboxedcontent">
											<div class="col-md-12 text-center">
												<div class="row">
													<div class="col-md-10 col-md-offset-1">
														<h4>Simply put, NECTAR7 Niagen&reg; &amp; Collagen gives you</h4>
														<h3>THE POWER &amp; BEAUTY TO DO MORE.</h3>
														<p>More time to be with the people you love. More energy to do the things you love doing.<br/>
														More strength to achieve your ambitions. More power to take in all that life has to offer.</p>
													</div>
												</div>
												<div class="row">
													<img src="/wp-content/uploads/2015/12/collagen-face-shot.png" alt="DNA graphic" width="1280" height="524" class="img-responsive aligncenter size-full wp-image-44" />
												</div>
											</div>
										</div>
									</div>
								</div>
                
                <div class="row productfaqs">
                  <div class="col-xs-12">
                    <h3>FAQ's</h3>
                    <div id="1447309243348-d6846f85-842a" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>WHAT IS NECTAR7 NIAGEN&reg; &amp; COLLAGEN?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>Our combination of collagen, hyaluronic acid and nicotinamide riboside (Niagen&reg;)</p>
                    </div>
                    </div>
                    <div id="1447309243013-44e0f8c1-bbe0" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>HOW CAN I BENEFIT FROM NECTAR7 NIAGEN&reg; &amp; COLLAGEN ?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>The purpose of this formulation is to promote rejuvenation of skin and increase lean muscle firmness. Collagen also aids your body in eliminating toxic levels of particular amino acids and reducing inflammation. Niagen&reg; supports optimal energy production and steroid synthesis at the cellular level.</p>
                    </div>
                    </div>
                    <div id="1447309242693-0ac9ce5e-635b" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>IF I AM TAKING NECTAR7 NIAGEN&reg; &amp; COLLAGEN IS IT OKAY TO ALSO TAKE NECTAR7 NIAGEN&reg;?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>While not harmful it would be unnecessary because the recommended dose of Niagen&reg; &amp; Collagen should provide all of the Niagen&reg; an average person will need to harness the benefits.</p>
                    </div>
                    </div>
                    <div id="1447309242346-1888d02c-81a7" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>HOW MANY SERVINGS OF NECTAR7 NIAGEN&reg; &amp; COLLAGEN SHOULD I TAKE PER DAY?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>Start with four (4) capsules daily. It may be best to separate into two (2) doses at different times of the day.</p>
                    </div>
                    </div>
                    <div id="1447309241974-55fe6a1a-cad4" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>WHAT ARE THE BEST TIMES TO TAKE NECTAR7 NIAGEN&reg; &amp; COLLAGEN?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>Whenever it is most convenient in your daily routine as it is not highly time-sensitive. Simply taking it consistently is the key to maximizing its benefits.</p>
                    </div>
                    </div>
                    <div id="1447309241609-a055589d-2d92" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>CAN I TAKE NECTAR7 NIAGEN&reg; &amp; COLLAGEN ON AN EMPTY STOMACH?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>Yes. You can take NECTAR7 Niagen&reg; &amp; Collagen on an empty stomach.</p>
                    </div>
                    </div>
                    <div id="1447309241025-91f9e1af-fb5a" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>HAS NECTAR7 NIAGEN&reg; &amp; COLLAGEN BEEN APPROVED BY THE FDA?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>No dietary supplement is “approved” by the FDA. They are, however, stringently regulated and must comply with the provisions of the Dietary Supplement Health and Education Act as regulated by the FDA. NECTAR7 Niagen&reg; &amp; Collagen is in 100% compliance with the provisions of the Dietary Supplement and Education Act as regulated by the FDA.</p>
                    </div>
                    </div>
                  </div>
                </div>
                
                <div class="row productfaqs">
                  <div class="col-xs-12">
                    <div id="1447309144105-8601f8c9-013b" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>RESEARCH CITATIONS</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><ol>
                        <li><a href="http://publications.nigms.nih.gov/insidethecell/chapter5.html" target="_blank">http://publications.nigms.nih.gov/insidethecell/chapter5.html</a></li>
                        <li><a href="http://www.abc.net.au/news/2014-11-04/scientists-reverse-ageing-process-in-mice/5865714" target="_blank">http://www.abc.net.au/news/2014-11-04/scientists-reverse-ageing-process-in-mice/5865714</a></li>
                        <li><a href="https://hms.harvard.edu/news/genetics/new-reversible-cause-aging-12-19-13" target="_blank">https://hms.harvard.edu/news/genetics/new-reversible-cause-aging-12-19-13</a></li>
                        <li><a href="http://www.abc.net.au/news/2014-11-04/scientists-reverse-ageing-process-in-mice/5865714" target="_blank">http://www.abc.net.au/news/2014-11-04/scientists-reverse-ageing-process-in-mice/5865714</a></li>
                        <li><a href="http://healthland.time.com/2013/12/19/reversing-aging-not-as-crazy-as-you-think/" target="_blank">http://healthland.time.com/2013/12/19/reversing-aging-not-as-crazy-as-you-think/</a></li>
                      </ol>
                    </div>
                    </div>
                  </div>
                </div>
                
							</div>
						</div>

					</div>
				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>

		<?php endif; ?>

		<?php // The Loop--> ?>

		<?php // tha_content_bottom(); ?>
	
	</div>

<?php get_footer(); ?>
