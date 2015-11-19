<?php
/**
 * Template Name: Homepage Template
 *
 * @package pgb
 */

get_header(); ?>

	<div id="content" class="main-content-inner col-sm-12 col-md-12 col-lg-12">

		<?php tha_content_top(); ?>

		<?php // <!--The Loop ?>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php tha_entry_before(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>

					<?php tha_entry_top(); ?>

					<div class="col-md-12 main-content-inner2">

						<div class="row">

							<?php //get_template_part( 'content', get_post_format() ); ?>
							<div class="entry-content main-entry-content col-md-12">
								<div class="row xblue1 border-bottom">
									<div class="col-md-8 col-sm-12 col-xs-12 border-md-right leftmaincontent">
										<div class="row home-hero">
											<div class="col-xs-12 home-hero-caption">
												<h1>THE POWER TO DO MORE.</h1>
												<div class="row">
													<div class="col-xs-12 col-sm-12 col-md-10">
														<p>Get the power to do more with NECTAR7 NIAGEN&reg;, to boost your physical health and mental energy, while reversing aging at the cellular level.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="row hero-bottom">
											<div class="col-xs-12">
												<p>The pursuit of eternal life has long obsessed people of every class and culture.   Yet, while nothing and no one can truly promise “eternal”, science has made significant progress in significantly extending life, while improving health, preserving youthful vigor and prolonging active performance. <strong>The secret is in NECTAR7.</strong></p>
											</div>
										</div>
										<div class="row leftboxedcontent">
											<div class="col-md-12 text-center">
												<div class="row">
													<div class="col-md-10 col-md-offset-1">
														<h4>Simply put, NECTAR7 gives you</h4>
														<h3>THE POWER TO DO MORE.</h3>
														<p>More time to be with the people you love. More energy to do the things you love doing. More strength to achieve your ambitions. More power to take in all that life has to offer.</p>
													</div>
												</div>
												<div class="row">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/girl_runner.jpg" alt="DNA graphic" width="854" height="468" class="img-responsive aligncenter size-full wp-image-44" />
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent howdoesitwork">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-9 col-sm-10 col-xs-12">
														<h4>How does NECTAR7 Niagen&reg; work?</h4>
														<p>The science behind NECTAR7 Niagen&reg; is a newly-discovered chemical compound called Nicotinamide Riboside (NR).</p>
														<p>NR is a precursor to NAD+ production in the body, which is a critical component of cell metabolism in all mammals, including humans.  NAD+ is the communication molecule between the cell nucleus and the cell’s energy factory, the mitochondria.  Also referred to as the cell’s powerhouse, mitochondria control many aspects of the cell cycle in terms of differentiation, growth and death.  They regulate important cell functions related to the conversion of fats, proteins and carbohydrates into energy. </p>
														<p>Researchers have found that as we age, the levels of NAD+ in our cells decrease, by a factor of 50% for every 20 years of life.  This leads to mitochondrial dysfunction and degraded cell metabolism.  This contributes to visible aging, diminished mental faculties and declining health.  Unfortunately, the age-related reduction in NAD+ levels happens to everyone, regardless of personal health, diet, or physical fitness.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent graphcontent text-center">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-12 col-sm-12 col-xs-12">
                            <h3>Natural process of aging, illness, and&nbsp;disease from birth.</h3>
														<img src="<?php bloginfo('stylesheet_directory'); ?>/images/home-chart-1111.png" alt="NAD+ vs Age Chart" class="img-responsive chartimage" />
														<p>In recent years, studies have revealed the role of mitochondria in protecting against a wide range of adverse health conditions.  Mitochondrial dysfunction has been implicated in a wide variety of metabolic, neurodegenerative and age-related diseases, including heart disease, diabetes, Alzheimer’s disease and certain types of cancer.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent benefitscontent">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-12 col-sm-12 col-xs-12">
															<h2>The benefits of <span>NECTAR7</span></h2>
															<p>Several studies by respected universities have shown that replenishing the body’s lost NAD+ can effectively make mitochondria – and the cells they manage - younger in both appearance and performance.  In one landmark case, a Harvard Medical School professor of genetics, Dr. David Sinclair, reported that giving older mice an NAD+ booster for only a week made the mitochondria of two-year-old mice resemble those of six-month-old mice.  It’s the equivalent of a 60-year-old person’s mitochondria becoming more like those of a 20-year-old.</p>
														<ul>
															<li>A 2013 research shows NAD+ could be used to synchronize the body’s waking and sleeping cycles, theoretically providing a more sustained release of energy throughout the day.</li>
															<li>Further tests suggest that NAD+ can promote insulin sensitivity, encouraging healthy blood sugar levels. There are even indications that it can repair damaged DNA and thwart certain triggers for cancer, which often show up as cells age.</li>
															<li>For the body to replenish its supply of NAD+, it requires a precursor known as NECTAR7 Niagen&reg;.</li>
														</ul>
													</div>
												</div>
												<div class="row">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/man-woman-age.jpg" alt="Benefits of NECTAR7" width="716" height="461" class="img-responsive aligncenter size-full" />
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent miraclecontent">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-4 col-sm-5 col-xs-12">
														<img src="<?php bloginfo('stylesheet_directory'); ?>/images/NAD+.png" alt="NAD+" class="img-responsive nad_miracle"/>
													</div>
													<div class="col-md-8 col-sm-7 col-xs-12">
														<p><strong>Dr. Carles Canto</strong>, a researcher at the Ecole Polytechnique Federale de Lausanne in Switzerland, has discovered that the NR enhances oxidative metabolism, protecting against high-fat, diet-induced obesity.  Calling NAD+ a “miracle molecule,” Canto declares that, “the effects of NR on metabolism are nothing short of astonishing.” </p>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12">
														<p><strong>NECTAR7 contains NECTAR7 Niagen&reg;, the first and only commercially available form of nicotinamide riboside (NR) that effectively increases NAD+ levels in the body.  It is a “no flush” form of vitamin B3 (niacin) that offers many health benefits, including endurance, performance, weight management, cardiovascular health, anti-aging, cognitive function and neuroprotection. </strong></p>
													</div>
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent graph2content">
											<div class="col-md-12">
												<div class="row text-center">
													<div class="col-md-12">
														<h3 style="color: #000; line-height: 1.15; margin: 2em 0; text-transform: none;">In a recent human study, a single dose of NECTAR7 Niagen&reg;, increased NAD+ by 30%</h3>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/30percent.jpg" alt="30%" class="img-responsive" />
													</div>
												</div>
												<div class="row">
													<div class="col-md-12 text-center">
														<p>NECTAR7 not only rewinds your body’s clock, it helps you hold on to your physical energy and mental alertness for much longer.  In effect, NECTAR7 improves and extends your performance, giving you the power to do more and achieve more.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent yellowbox">
											<div class="col-md-12 text-center">
												<div class="row">
													<div class="col-md-10 col-md-offset-1">
														<h2>Try NECTAR7 <span>for yourself</span></h2>
														<p>Every year, more and more breakthroughs about the NR in NECTAR7 Niagen&reg; are being made.  In 2003, there were 474 studies published; in 2013, there were 1,713.</p>
														<p>As time goes on, more benefits of this essential compound are being revealed by science. With NECTAR7, you may live long enough to discover these benefits for yourself.</p>
													</div>
												</div>
												<div class="row">
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/family.png" alt="family" width="854" height="474" class="img-responsive aligncenter size-full wp-image-44" />
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent productbox boxnavy">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8 col-sm-7 col-xs-12">
														<h1>NECTAR7</h1>
														<h2>Power For More Life </h2>
														<p>NECTAR7 is created to let you live it up, no matter your age.  It is an optimized form of NECTAR7 Niagen&reg; that boosts your metabolism, improves cognitive health and reverses the effects of aging on the body and brain, so you can get the most out of every moment.</p>
														<p><a href="<?php bloginfo('url'); ?>/nectar7-niagen/" class="btn btn-primary">Learn More</a></p>
													</div>
													<div class="col-md-4 col-sm-5 col-xs-12 product-image-col">
														<img src="<?php bloginfo('stylesheet_directory'); ?>/images/niagen_bottle.png" class="img-responsive product-image" alt="NIAGEN&reg; (NAD + ACTIVATOR)"/>
													</div>
												</div>
											</div>
										</div>
										<div class="row leftboxedcontent productbox boxblue">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8 col-sm-7 col-xs-12">
														<h1>NECTAR7</h1>
														<h2>Power For
															<br/>Strength &amp; Beauty</h2>
														<p>NECTAR7 Niagen&reg; &amp; Collagen with hyaluronic acid, creates a trifecta that turns back the clock on skin and muscle cells.  Collagen restores youthful suppleness to skin, brings luster back to hair, and strengthens joints and  muscles.  Meanwhile, the NAD+ generated by NECTAR7 Niagen&reg; prompts your body to generate even more collagen, fueling the biological processes that reverse the effects of aging to give you a potency and radiance that truly comes from deep within. </p>
														<p><a href="<?php bloginfo('url'); ?>/nectar7-niagen-collagen/" class="btn btn-primary">Learn More</a></p>
													</div>
													<div class="col-md-4 col-sm-5 col-xs-12 product-image-col">
														<img src="<?php bloginfo('stylesheet_directory'); ?>/images/niagen_collagen_bottle.png" class="img-responsive product-image" alt="NIAGEN&reg; (NAD + ACTIVATOR)"/>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<div class="hidden-xs hidden-sm col-md-12">
												<div class="rightboxedcontent bluebox">
													<div class="row box-title">
														<div class="col-xs-12">
															<h2>Power For More Life</h2>
															<h3>NECTAR7 Niagen&reg; (NAD + ACTIVATOR)</h3>
														</div>
													</div>
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/niagen_bottle.png" class="img-responsive product-image" alt="NIAGEN&reg; (NAD + ACTIVATOR)"/>
													<p>NECTAR7 Niagen&reg; is for people intent on performing the closest to 100% of their mental and physical capabilities. Awarded five worldwide patents, NECTAR7 Niagen&reg; is the first and only commercially available form of (NR) in the world today. Clinically shown to boost NAD levels by 30 percent in humans after just one dosage*, NECTAR7 Niagen&reg; is for people who want to increase endurance and energy, while benefiting from heightened cognitive function, including concentration, focus and memory. Before you age another day, try NECTAR7 Niagen&reg;.</p>
													<a href="<?php bloginfo('url'); ?>/nectar7-niagen/" class="btn btn-primary">LEARN MORE</a>
												</div>
											</div>
											<div class="hidden-xs hidden-sm col-md-12 border-bottom">
												<div class="rightboxedcontent lightbluebox">
													<div class="row box-title">
														<div class="col-xs-12">
															<h2>Power For Strength &amp; Beauty</h2>
															<h3>NIAGEN&reg; &amp; COLLAGEN</h3>
														</div>
													</div>
													<img src="<?php bloginfo('stylesheet_directory'); ?>/images/niagen_collagen_bottle.png" class="img-responsive product-image" alt="NIAGEN&reg; & COLLAGEN"/>
													<p>NECTAR7 Niagen&reg; &amp; Collagen with hyaluronic acid, delivers a trifecta that turns back the clock on skin and muscle cells.  Collagen restores youthful suppleness to skin, brings luster back to hair, and strengthens joints and  muscles.  Meanwhile, the NAD+ generated by NIAGEN&reg; prompts your body to generate even more collagen, fueling the biological processes that reverse the effects of aging to give you a potency and radiance that truly comes from deep within.</p>
													<a href="<?php echo get_bloginfo('url'); ?>/nectar7-niagen-collagen/" class="btn btn-primary">LEARN MORE</a>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12">
													<div class="row box-title testimonials">
														<div class="col-xs-12 col-md-12">
															<h3>Happy Customers</h3>

														</div>
														<div class="col-xs-12">
															<blockquote>
																<img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonials/mark.jpg" class="img-responsive testimonial-image" />
																<p>After a number of doctor and dermatology visits, Mark had reached the end of his patience in searching for a cure to his worsening health. To make matters worse he faced a growing autoimmune disorder that seemed to evade diagnosis or, as he felt, "Doctors were not helping me with my growing concerns, weakened state or the condition of my physical body."</p>
																<p><a href="<?php echo get_bloginfo('url'); ?>/marks-story/">Read more of Mark's story</a></p>
																<footer>Mark M. San Diego, CA</footer>
															</blockquote>
														</div>
														<div class="col-xs-12">
															<blockquote>
																<img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonials/patty.jpg" class="img-responsive testimonial-image" />
																<p>I am a successful business woman running multiple global businesses as well as balancing a hectic schedule with two successful busy children. I travel with my daughter and son for sports weekly. I have also suffered from medical issues in the past year. I have had multiple episodes of blood clots. Since taking Niagen&reg; I have lost weight and become much more mobile with allows and aides in my recovery and helps me prevent immobility which wards off the blood clots. I also sleep soundly and have noticed a much more youthful look. Everyone who has not seen me since taking Niagen&reg; continues to ask what I'm doing because I look and feel so different from the last encounter they have had with me. Niagen&reg; has given me my life and youth back.</p>
																<footer>Patty S., Ohio</footer>
															</blockquote>
														</div>
														<div class="col-xs-12">
															<blockquote>
																<img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonials/jeromy.jpg" class="img-responsive testimonial-image" />
																<p>At 40 I have been struggling with maintaining focus and energy running a business, family and personal time: surfing, mountain biking, soccer and more. NECTAR7 has delivered me a new level and source of power in every aspect of my life. I feel better and notice a faster recovery time when pushing my physical activities on a daily basis.</p>
																<footer>Jeromy S., Del Mar, CA</footer>
															</blockquote>
														</div>
														<div class="col-xs-12">
															<blockquote>
																<img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonials/wanda.jpg" class="img-responsive testimonial-image" />
																<p>I have been taking NECTAR7 Niagen&reg; for about three months. Usually around the early autumn, I suffer with sinus infections, colds and generally feel sluggish. This year, while many around me have been sick during the climate change from summer to fall with widely varying  temperatures, I have felt wonderful!! I sleep more soundly than I have in years and have the energy to walk 4 to 6 miles a day!! I recently had a full physical with blood work. The doctor is amazed at my way above average wonderful health!!</p>
																<footer>Wanda R., Dallas, TX</footer>
															</blockquote>
														</div>
														<div class="col-xs-12">
															<blockquote>
																<img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonials/sean.jpg" class="img-responsive testimonial-image" />
																<p>While approaching my mid 30’s, I noticed my attention span becoming shorter and shorter in both my personal and professional life. After my first dose of NECTAR7 Niagen&reg; - my energy level and focus improved. I am only on my second week of taking NIAGEN&reg; and look forward to experiencing more benefits of this new product.</p>
																<footer>Sean F,. Encinitas, CA</footer>
															</blockquote>
														</div>
													</div>
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
