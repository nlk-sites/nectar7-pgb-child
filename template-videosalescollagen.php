<?php
/**
 * Template Name: Video Sales Template Collagen
 *
 * @package pgb
 */

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
													<h4>NECTAR7 NIAGEN&reg; &amp; Collagen gives you the power &amp; beauty to do more.</h4>
                        </div>
                      </div>
											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
													<h1>THREE skin restorative ingredients together for FIRST TIME in ONE spectacular product!</h1>
													<div class="videocontent">
														<img src="<?php bloginfo('stylesheet_directory'); ?>/images/vsl_collagen_img.jpg" alt="NIAGEN&reg; &amp; COLLAGEN" width="640" height="360" />
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
												<h3>NIAGEN&reg; &amp; COLLAGEN
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
												<h3>NIAGEN&reg; &amp; COLLAGEN<br />(90 DAY)
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
												<h3>NIAGEN&reg; &amp; COLLAGEN<br />(180 DAY)
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
                  <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                    <p><strong>PRODUCT DESCRIPTION</strong><br />NECTAR7's NIAGEN&reg; &amp; Collagen is a scientifically based, synergistic blend of astonishing ingredients formulated to make you feel amazing about your skin. Briefly, here's how it works. While NIAGEN&reg; is busy kick starting your body to synthesize its own natural collagen (a minor miracle), pure collagen was included in NECTAR7's NIAGEN&reg; &amp; Collagen to give your body's existing collagen levels a boost. Complimenting this three-prong attack against fine lines, wrinkles and sagging skin is Hyaluronic acid – which also helps to lubricant in the joints and the collagen itself. So it's easy to see why NECTAR7's NIAGEN&reg; &amp; Collagen outperforms any collagen-only product.</p>
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
												<h1>NIAGEN&reg; &amp; COLLAGEN <span>(WITH HA "HYALURONIC ACID")</span></h1>
												<h2>Supports Radiant, Youthful, Younger Looking Skin*<br />
												<em>Promotes Lean Muscle Firmness*</em></h2>
												<div class="row">
													<div class="col-xs-12 col-sm-6 col-md-6 pad30">
														<div class="productherobox collagenbox">
															<h2>Supplement Facts</h2>
															<h4>Serving Size: <strong>4 Capsules per Day</strong></h4>
															<h4>Servings Per Container: <strong>30</strong></h4>
															<h4>Amount Per Serving: <strong>% Daily Value*</strong></h4>
															<h3>Nicotinamide Riboside (as NIAGEN&reg;) 100 mg</h3>
															<h3 class="notopborder">Hydrolyzed Fish Collagen 100 mg</h3>
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
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12 leftmaincontent">
										<div class="row leftboxedcontent">
											<div class="col-md-12 text-center">
												<div class="row">
													<div class="col-md-10 col-md-offset-1">
														<h4>Simply put, NECTAR7 NIAGEN&reg; &amp; Collagen gives you</h4>
														<h3>THE POWER &amp; BEAUTY TO DO MORE.</h3>
														<p>More time to be with the people you love. More energy to do the things you love doing.<br/>
														More strength to achieve your ambitions. More power to take in all that life has to offer.</p>
													</div>
												</div>
												<div class="row">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/video_sales_banner_bottom.jpg" alt="DNA graphic" width="1280" height="524" class="img-responsive aligncenter size-full wp-image-44" />
												</div>
											</div>
										</div>
									</div>
								</div>
                
                <div class="row productfaqs">
                  <div class="col-xs-12">
                    <h3>FAQ's</h3>
                    <div id="1447309243348-d6846f85-842a" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>WHAT IS NECTAR7 NIAGEN® &amp; COLLAGEN?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>Our combination of collagen, hyaluronic acid and nicotinamide riboside (Niagen®)</p>
                    </div>
                    </div>
                    <div id="1447309243013-44e0f8c1-bbe0" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>HOW CAN I BENEFIT FROM NECTAR7 NIAGEN® &amp; COLLAGEN ?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>The purpose of this formulation is to promote rejuvenation of skin and increase lean muscle firmness. Collagen also aids your body in eliminating toxic levels of particular amino acids and reducing inflammation. Niagen® supports optimal energy production and steroid synthesis at the cellular level.</p>
                    </div>
                    </div>
                    <div id="1447309242693-0ac9ce5e-635b" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>IF I AM TAKING NECTAR7 NIAGEN® &amp; COLLAGEN IS IT OKAY TO ALSO TAKE NECTAR7 NIAGEN®?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>While not harmful it would be unnecessary because the recommended dose of Niagen® &amp; Collagen should provide all of the Niagen® an average person will need to harness the benefits.</p>
                    </div>
                    </div>
                    <div id="1447309242346-1888d02c-81a7" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>HOW MANY SERVINGS OF NECTAR7 NIAGEN® &amp; COLLAGEN SHOULD I TAKE PER DAY?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>Start with four (4) capsules daily. It may be best to separate into two (2) doses at different times of the day.</p>
                    </div>
                    </div>
                    <div id="1447309241974-55fe6a1a-cad4" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>WHAT ARE THE BEST TIMES TO TAKE NECTAR7 NIAGEN® &amp; COLLAGEN?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>Whenever it is most convenient in your daily routine as it is not highly time-sensitive. Simply taking it consistently is the key to maximizing its benefits.</p>
                    </div>
                    </div>
                    <div id="1447309241609-a055589d-2d92" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>CAN I TAKE NECTAR7 NIAGEN® &amp; COLLAGEN ON AN EMPTY STOMACH?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>Yes. You can take NECTAR7 Niagen® &amp; Collagen on an empty stomach.</p>
                    </div>
                    </div>
                    <div id="1447309241025-91f9e1af-fb5a" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
                      <div class="vc_toggle_title"><h4>HAS NECTAR7 NIAGEN® &amp; COLLAGEN BEEN APPROVED BY THE FDA?</h4><i class="vc_toggle_icon"></i></div>
                      <div class="vc_toggle_content"><p>No dietary supplement is “approved” by the FDA. They are, however, stringently regulated and must comply with the provisions of the Dietary Supplement Health and Education Act as regulated by the FDA. NECTAR7 Niagen® &amp; Collagen is in 100% compliance with the provisions of the Dietary Supplement and Education Act as regulated by the FDA.</p>
                    </div>
                    </div>
                  </div>
                </div>
                
                <div class="row box-title testimonials">
                <div class="col-xs-12">
                  <h3>Happy Customers</h3>

                <div class="row">
                <div class="col-xs-12">
                  <blockquote>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonials/mark.jpg" class="img-responsive testimonial-image" />
                    <p>After a number of doctor and dermatology visits, Mark had reached the end of his patience in the search for finding a cure for a condition that was both worsening. To make matters worst he faced a growing autoimmune disorder that seemed to evade doctors or, as he felt, "Doctors were not helping me with my growing concerns, weekend state or the condition of my physical body."</p>
                    <p><a href="<?php echo get_bloginfo('url'); ?>/marks-story/">Read more of Mark's story</a></p>
                    <footer>Mark M. San Diego, CA</footer>
                  </blockquote>
                </div>
                </div>
                <div class="row">
                <div class="col-xs-12">
                  <blockquote>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonials/patty.jpg" class="img-responsive testimonial-image" />
                    <p>I am a successful business woman running multiple global businesses as well as balancing a hectic schedule with two successful busy children. I travel with my daughter and son for sports weekly. I have also suffered from medical issues in the past year. I have had multiple episodes of blood clots. Since taking Niagen&reg; I have lost weight and become much more mobile with allows and aides in my recovery and helps me prevent immobility which wards off the blood clots. I also sleep soundly and have noticed a much more youthful look. Everyone who has not seen me since taking Niagen&reg; continues to ask what I'm doing because I look and feel so different from the last encounter they have had with me. Niagen&reg; has given me my life and youth back.</p>
                    <footer>Patty S., Ohio</footer>
                  </blockquote>
                </div>
                </div>
                <div class="row">
                <div class="col-xs-12">
                  <blockquote>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonials/jeromy.jpg" class="img-responsive testimonial-image" />
                    <p>At 40 I have been struggling with maintaining focus and energy running a business, family and personal time: surfing, mountain biking, soccer and more. NECTAR7 has delivered me a new level and source of power in every aspect of my life. I feel better and notice a faster recovery time when pushing my physical activities on a daily basis.</p>
                    <footer>Jeromy S., Del Mar, CA</footer>
                  </blockquote>
                </div>
                </div>
                <div class="row">
                <div class="col-xs-12">
                  <blockquote>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonials/wanda.jpg" class="img-responsive testimonial-image" />
                    <p>I have been taking NIAGEN&reg; for about three months. Usually around the early autumn, I suffer with sinus infections, colds and generally feel sluggish. This year, while many around me have been sick during the climate change from summer to fall with widely varying  temperatures, I have felt wonderful!! I sleep more soundly than I have in years and have the energy to walk 4 to 6 miles a day!! I recently had a full physical with blood work. The doctor is amazed at my way above average wonderful health!!</p>
                    <footer>Wanda R., Dallas, TX</footer>
                  </blockquote>
                </div>
                </div>
                <div class="row">
                <div class="col-xs-12">
                  <blockquote>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonials/sean.jpg" class="img-responsive testimonial-image" />
                    <p>While approaching my mid 30’s, I noticed my attention span becoming shorter and shorter in both my personal and professional life. After my first dose of NECTAR7 NIAGEN&reg; - my energy level and focus improved. I am only on my second week of taking NIAGEN&reg; and look forward to experiencing more benefits of this new product.</p>
                    <footer>Sean F,. Encinitas, CA</footer>
                  </blockquote>
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
