<?php get_header(); ?>
<?php //get_header('special'); 
?>
<!--section slider-->
<div class="section mt-0">
	<div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
		<div class="quickLinks js-quickLinks closed">
			<div class="container">
				<div class="row no-gutters">
					<div class="col">
						<a href="#" class="link">
							<i class="icon-placeholder"></i><span>Location</span></a>
						<div class="link-drop p-0">
							<div class="google-map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40119.804311386426!2d-97.32055794896301!3d37.64364017354126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87bae4ec254beb5f%3A0x410df48edd2f5ede!2sGraceMed%20Jardine%20Family%20Clinic!5e0!3m2!1sen!2sua!4v1579853082410!5m2!1sen!2sua"></iframe>
							</div>
						</div>
					</div>
					<div class="col">
						<a href="#" class="link">
							<i class="icon-clock"></i><span>Working Time</span>
						</a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-clock"></i>Working Time</h5>
							<table class="row-table">
								<tr>
									<td><i>Mon-Thu</i></td>
									<td>08:00 - 20:00</td>
								</tr>
								<tr>
									<td><i>Friday</i></td>
									<td> 07:00 - 22:00</td>
								</tr>
								<tr>
									<td><i>Saturday</i></td>
									<td>08:00 - 18:00</td>
								</tr>
								<tr>
									<td><i>Sunday</i></td>
									<td>Closed</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col">
						<a href="#" class="link">
							<i class="icon-pencil-writing"></i><span>Request Form</span>
						</a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-pencil-writing"></i>Request Form</h5>
							<form id="requestForm" method="post" novalidate>
								<div class="successform">
									<p>Your message was sent successfully!</p>
								</div>
								<div class="errorform">
									<p>Something went wrong, try refreshing and submitting the form again.</p>
								</div>
								<div class="input-group">
									<span>
										<i class="icon-user"></i>
									</span>
									<input name="requestname" type="text" class="form-control" placeholder="Your Name" />
								</div>
								<div class="row row-sm-space mt-1">
									<div class="col">
										<div class="input-group">
											<span>
												<i class="icon-email2"></i>
											</span>
											<input name="requestemail" type="text" class="form-control" placeholder="Your Email" />
										</div>
									</div>
									<div class="col">
										<div class="input-group">
											<span>
												<i class="icon-smartphone"></i>
											</span>
											<input name="requestphone" type="text" class="form-control" placeholder="Your Phone" />
										</div>
									</div>
								</div>
								<div class="selectWrapper input-group mt-1">
									<span>
										<i class="icon-micro"></i>
									</span>
									<select name="requestservice" class="form-control">
										<option selected="selected" disabled="disabled">Select Service</option>
										<option value="Molecular Testing & Oncology">Molecular Testing & Oncology</option>
										<option value="Histology">Histology</option>
										<option value="General Diagnostic Tests">General Diagnostic Tests</option>
										<option value="Naturopathic">Naturopathic</option>
										<option value="Genetics Tests">Genetics Tests</option>
										<option value="Cytology">Cytology</option>
									</select>
								</div>
								<div class="row row-sm-space mt-1">
									<div class="col-sm-6">
										<div class="input-group flex-nowrap">
											<span>
												<i class="icon-calendar2"></i>
											</span>
											<div class="datepicker-wrap">
												<input name="requestdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
											</div>
										</div>
									</div>
									<div class="col-sm-6 mt-1 mt-sm-0">
										<div class="input-group flex-nowrap">
											<span>
												<i class="icon-clock"></i>
											</span>
											<div class="datepicker-wrap">
												<input name="requesttime" type="text" class="form-control timepicker" placeholder="Time" readonly>
											</div>
										</div>
									</div>
								</div>
								<div class="text-right mt-2">
									<button type="submit" class="btn btn-sm btn-hover-fill">Request</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col">
						<a href="#" class="link">
							<i class="icon-calendar"></i><span>Doctors Timetable</span>
						</a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-calendar"></i>Doctors Timetable</h5>
							<p>This simply works as a guide and helps you to connect with dentists of your choice. Please confirm the doctor’s availability before leaving your premises.</p>
							<p class="text-right"><a href="#specialistsSection" class="btn btn-sm btn-hover-fill link-inside">Details</a></p>
						</div>
					</div>
					<div class="col">
						<a href="#" class="link">
							<i class="icon-price-tag"></i><span>Quick Pricing</span>
						</a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-price-tag"></i>Quick Pricing</h5>
							<table class="row-table">
								<tr>
									<td>Initial Consultation</td>
									<td>$10</td>
								</tr>
								<tr>
									<td>Dental check-up</td>
									<td>$15</td>
								</tr>
								<tr>
									<td>Routine Exam (no xrays)</td>
									<td>$50</td>
								</tr>
								<tr>
									<td>Simple Removal of a tooth</td>
									<td>$122</td>
								</tr>
								<tr>
									<td>Teeth cleaning</td>
									<td>$50 - $75</td>
								</tr>
								<tr>
									<td>X-ray image</td>
									<td>$10</td>
								</tr>
							</table>
							<div class="text-right btn-wrap mt-2">
								<a href="#bmiCalculator" class="btn btn-sm btn-fill"><i class="icon-right-arrow"></i><span>Calculator</span><i class="icon-right-arrow"></i></a>
								<a href="prices.html" class="btn btn-sm btn-fill"><i class="icon-right-arrow"></i><span>Details</span><i class="icon-right-arrow"></i></a>
							</div>
						</div>
					</div>
					<div class="col">
						<a href="#" class="link">
							<i class="icon-emergency-call"></i><span>Emergency Case</span></a>
						<div class="link-drop">
							<h5 class="link-drop-title"><i class="icon-emergency-call"></i>Emergency Case</h5>
							<p>Emergency dental care may be needed if you have had a blow to the face, lost a filling, or cracked a tooth. </p>
							<ul class="icn-list">
								<li><i class="icon-telephone"></i><span class="phone">1-800-267-0000<br>1-800-267-0001</span>
								</li>
								<li><i class="icon-black-envelope"></i><a href="mailto:info@besthotel-email.com">info@besthotel-email.com</a></li>
							</ul>
							<p class="text-right mt-2"><a href="#contactForm" class="btn btn-sm btn-hover-fill link-inside">Our Contacts</a></p>
						</div>
					</div>
					<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top" data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
				</div>
			</div>
			<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left" title="Open panel">+</span></div>
		</div>
	</div>
	<div id="mainSliderWrapper">
		<div class="loading-content">
			<div class="inner-circles-loader"></div>
		</div>
		<div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": true}'>
			<?php
			$slides = get_posts([
				'post_type' => 'slide'
			]);

			foreach ($slides as $slide) {
			?>
				<div class="slide">
					<div class="img--holder" data-bg="<?php echo get_post_meta($slide->ID, 'slide', true) ?>"></div>
					<div class="slide-content center">
						<div class="vert-wrap container">
							<div class="vert">
								<div class="container">
									<div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s"><b><?php echo $slide->post_title; ?></b></div>
									<div class="slide-txt2 text-no-uppercase" data-animation="fadeInUp" data-animation-delay="1.5s"><?php echo $slide->tagline; ?></div>
									<div class="slide-btn"><a href="<?php echo get_post_meta($slide->ID, 'url', true); ?>" class="btn btn-hover-fill" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Explore our services</span><i class="icon-right-arrow"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</div>
<!--//section slider-->
<!--section welcome -->
<div class="section bg-norepeat bg-md-none section-top-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-6 pl-lg-3 pt-lg-5">
				<div class="title-wrap-alt">
					<div class="h-sub-lined theme-color"><?php _e('About us','themecourse'); ?></div>
					<h2 class="h1"><?php printf(__('Medical Supervision that Only a %s Clinic Can Provide %s','themecourse'),'<span class="theme-color">','</sapn>') ?></h2> <!-- <span class="theme-color"> -->
				</div>
				<p class="p-bold"><?php _e('Dr. Barbara Glover, N.D. is a Body Contouring Expert with a clinical focus in weight loss and weight management care','themecourse'); ?></p>
				<p>Having been introduced to naturopathic medicine while studying for her medical entrance exams, Dr. Barbara practices integratively, often collaborating with Medical Doctors, Registered Massage Therapists, Chiropractors, Psychotherapists and other Health Care Practitioners.</p>
				<div class="signature mt-3">
					<div class="signature-img">
						<img src="<?php bloginfo('template_url'); ?>/images/content/signature.png" alt="Signature">
					</div>
					<div class="signature-text">
						<h5>Dr. Barbara Glover</h5>
						Naturopathic Doctor, Certified Personal Trainer,
						Ideal Protein Coach
					</div>
				</div>
				<div class="mt-2"></div>
				<a href="#" class="btn-link btn-link--sm" data-toggle="modal" data-target="#modalBookingForm">schedule a visit<i class="icon-right-arrow"></i></a>
			</div>
			<div class="col-md-6 mb-lg-5 position-relative mt-3 mt-md-0">
				<div class="img-with-bg">
					<img src="<?php bloginfo('template_url'); ?>/images/content/index-img-01.jpg" alt="">
					<img src="<?php bloginfo('template_url'); ?>/images/content/img-bg.png" class="img-bg" alt="">
				</div>
				<a href="#" class="video-btn-circle-left js-video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/uyWt48mWmz0" data-target="#videoModal">
					<span><i class="icon-play"></i></span>
				</a>
				<!-- Video Modal -->
				<div class="modal video-modal fade" id="videoModal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe data-src="https://www.youtube.com/embed/mDHGaU_jGrQ?start=10" src="https://www.youtube.com/embed/mDHGaU_jGrQ?start=10" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //Video Modal -->
				<div class="over-image-card pos-center">
					<div class="over-image-card-icon"><i class="icon-info"></i></div>
					<div class="over-image-card-text">
						<h4>Patient Information</h4>
						<p>The following information will be of interest to weight loss surgery patients.</p>
						<a href="<?php echo get_permalink(get_page_by_path('form-download')); ?>" class="btn btn-white btn-white--all"><i class="icon-right-arrow"></i><span>download forms</span><i class="icon-right-arrow"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--//section welcome -->

<?php get_template_part('template-parts/services'); ?>

<!--section-->
<div class="section bg-grey mt-0 pt-2 pb-0">
	<div class="container-fluid container-fluid-visible-sm px-0">
		<div class="row no-gutters bmi-form-wrap">
			<div class="col-md-6">
				<div class="bmi-form-image">
					<img src="<?php bloginfo('template_url'); ?>/images/content/banner-left.jpg" alt="">
					<div class="image-corner">
						<i class="icon-calc"></i>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div id="bmiForm" class="bmi-form-col">
					<div class="bmi-form-col-inside">
						<div class="title-wrap" id="bmiCalculator">
							<div class="h-sub-lined theme-color">Get your BMI</div>
							<h2 class="h1">BMI Calculator</h2>
						</div>
						<p class="mt-2">Your treatment options depend on how much you weigh. You can calculate your BMI using this simple tool:</p>
						<div class="bmi-form">
							<div id="unit-selector" class="unit-selector row">
								<div class="col-auto"><input id="unitsMetric" type="radio" name="units" value="metric" checked /><label for="unitsMetric">Metric</label></div>
								<div class="col-auto"><input id="unitsUS" type="radio" name="units" value="us-imperial" /><label for="unitsUS">US</label></div>
							</div>
							<div id="inputs">
								<div class="form-group">
									<div class="row">
										<div class="col"><input type="text" id="bmiHeight" class="form-control required" placeholder="Height" /><span class="input-unit"></span></div>
										<div class="col"><input type="text" id="bmiWeight" class="form-control required" placeholder="Weight" pattern="[0-9.]+" /><span class="input-unit"></span></div>
									</div>
								</div>
								<div id="bmiError" class="form-group bmi-error"></div>
								<div class="form-group mb-0">
									<div class="row align-items-center">
										<div class="col"><a href="#" id="bmiCalculate" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>Calculate</span><i class="icon-right-arrow"></i></a></div>
										<div class="col-auto pl-0">
											<div class="bmi-result">Your BMI is: <span id="bmi">__</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="bmi-form-table">
							<div class="bmi-class-1">
								<span>BMI > 18.5</span>
								<span class="bmi-form-table-info">UNDERWEIGHT</span>
							</div>
							<div class="bmi-class-2">
								<span>18.5 - 24.9</span>
								<span class="bmi-form-table-info">HEALTHY</span>
							</div>
							<div class="bmi-class-3">
								<span>25 - 29.9</span>
								<span class="bmi-form-table-info">OVERWEIGHT</span>
							</div>
							<div class="bmi-class-4">
								<span>30 < BMI</span>
										<span class="bmi-form-table-info">OBESE</span>
							</div>
						</div>
						<p>We recommend you speak to your doctor if your BMI is above 25.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--//section-->
<!--section testimonials-->
<div class="section">
	<div class="container-fluid px-0">
		<div class="title-wrap text-center">
			<h2 class="h1">Clients Success <br class="d-sm-none">Stories</h2>
			<div class="h-decor"></div>
		</div>
		<p class="text-center max-500">Check out these unexpected weight-loss lessons from people who have been battling their weight for decades.</p>
		<div class="reviews-style5">
			<div class="reviews-wrap js-reviews-carousel5">
				<?php
					$success_stories = get_posts([
						'post_type' => 'successstory'
					]);

					foreach ($success_stories as $success_story) :
				?>

				<div class="review">
					<div class="review-left">
						<img src="<?php echo get_post_meta($success_story->ID,'big',true) ?>" alt="">
					</div>
					<div class="review-center">
						<div class="review-title-1">Transform</div>
						<div class="review-title-2">Life & Health</div>
						<div class="review-box">
							<div class="review-author"><?php echo $success_story->post_title; ?></div>
							<p class="review-text"><?php echo $success_story->post_excerpt; ?></p>
						</div>
					</div>
					<div class="review-right">
						<img src="<?php echo get_post_meta($success_story->ID,'small',true) ?>" alt="">
					</div>
				</div>

				<?php 
					endforeach;
				?>
			</div>
		</div>
	</div>
	<div class="text-center"><a href="<?php echo get_permalink(get_page_by_path('before-after')); ?>" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>more success stories</span><i class="icon-right-arrow"></i></a></div>
</div>
<!--//section testimonials-->
<!--section blog posts -->
<div class="section bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="title-wrap text-center text-md-left">
						<h2 class="h1">From the Blog</h2>
						<div class="h-decor"></div>
					</div>
					<div class="blog-post-sm-vertical d-block">
                        <?php 
                        $recents = get_posts([
                            'post_type' => 'post',
                            'numberposts' => 2
                        ]);
                        
                        foreach ($recents as  $recent){
                        ?>
						    <div class="blog-post-sm">
							<div class="blog-post-sm-photo">
                                <img src="<?php echo get_the_post_thumbnail_url($recent); ?>" alt="" class="img-fluid">
                            </div>
							<div class="blog-post-sm-text">
								<div class="blog-post-sm-date"><?php echo date('M d, Y', strtotime($recent->post_date)); ?></div>
								<div class="blog-post-sm-title"><a href="<?php echo get_the_permalink($recent); ?>"><?php echo $recent->post_title; ?></a></div>
							</div>
						</div>
                        <?php
                        }

                        ?>
					</div>
					<div class="mt-3 mt-lg-6">
						<a href="<?php echo get_the_permalink(get_page_by_path('blogs')); ?>" class="btn-link btn-link--sm">view all posts<i class="icon-right-arrow"></i></a>
					</div>
				</div>
				<div class="col-md-6 col-lg-8 mt-3 mt-md-0">
					<div class="row blog-grid blog-grid-carousel js-blog-grid-carousel m-0">
                        <?php
                        $args = [
                            'post_type' => 'post',
                            'meta_key'     => 'on-home',
                            'meta_value'   => 'yes',
                            'meta_compare' => '=='
                        ];
                        $the_query = new WP_Query( $args );

                        // The Loop
                        if ( $the_query->have_posts() ) {
                           
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                        ?>
                                <div class="col-6 col-sm col-lg-6">
                                    <div class="blog-post blog-post-style4">
                                        <div class="post-image">
                                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('meduim');?>" /></a>
                                        </div>
                                        <div class="blog-post-info">
                                            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                            <div class="post-teaser">New research suggests that a simple to diagnose heart attacks, may.</div>
                                            <div class="post-date-simple"><?php echo date('M d, Y', strtotime( $post->post_date )); ?></div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        
                        /* Restore original Post Data */
                        wp_reset_postdata();
                        ?>
                        
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//section blog posts -->
<!--section -->
<div class="section bg-grey mt-0 py-0">
	<div class="container-fluid px-0 over-visible">
		<div class="row white-col-wrap">
			<div class="col-md-6 white-col">
				<div class="white-col-inside">
					<div class="title-wrap-alt">
						<div class="h-sub-lined theme-color">Why us?</div>
						<h2 class="h1">Weight Loss is Not<br class="d-sm-none">Just about the <br class="d-sm-none"><span class="theme-color">Calories and Exercise</span></h2>
					</div>
					<p>Our approach allows to identify the underlying causes that are acting as obstacles which must be addressed before weight loss can be achieved. This approach not only allows you to lose unwanted weight but more importantly allows you to achieve overall health.</p>
					<ul class="marker-list-md">
						<li>Access to the latest drugs and treatments</li>
						<li>Over 25 years’ experience</li>
					</ul>
					<div class="mt-3 mt-lg-5">
						<div class="counter-box-grid">
							<div class="counter-box-sm">
								<div class="counter-box-sm-number"><span class="count" data-to="120" data-speed="1500">0</span><span class="sup">K</span></div>
								<div class="counter-box-sm-text">Kilograms Lost</div>
							</div>
							<div class="counter-box-sm">
								<div class="counter-box-sm-number"><span class="count" data-to="20" data-speed="1500">0</span><span class="sup">+</span></div>
								<div class="counter-box-sm-text">Permanent Staff</div>
							</div>
							<div class="counter-box-sm">
								<div class="counter-box-sm-number"><span class="count" data-to="25" data-speed="1500">0</span><span class="sup">+</span></div>
								<div class="counter-box-sm-text">Years Experience</div>
							</div>
							<div class="counter-box-sm">
								<div class="counter-box-sm-number"><span class="count" data-to="10" data-speed="1500">0</span><span class="sup">K+</span></div>
								<div class="counter-box-sm-text">Happy Clients</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 mb-0 mb-lg-7 image-right-fullheight-col">
				<div class="image-right-fullheight">
					<img src="<?php bloginfo('template_url'); ?>/images/content/banner-right.jpg" alt="">
					<div class="image-corner image-corner--left">
						<i class="icon-achivement"></i>
					</div>
				</div>
				<div class="over-image-card over-image-card--sm pos-center-1">
					<div class="over-image-card-icon"><i class="icon-phone-time"></i></div>
					<div class="over-image-card-text">
						<h4>Free 15 Min Consultation</h4>
						<p>Use the form to book your FREE 15 min telephone consultation.</p>
						<a href="#" class="btn btn-white btn-white--all" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>book consultation</span><i class="icon-right-arrow"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--//section -->
<!--section prices-->
<div class="section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 col-lg-8 pr-lg-6 order-2 order-md-1">
				<img src="<?php bloginfo('template_url'); ?>/images/content/img-bg-top-left.png" class="img-bg-top-left" alt="">
				<div class="row no-gutters align-items-center prices-carousel-column js-prices-carousel">
					<div class="col-sm-6">
						<div class="prices-box prices-box--style3 prices-box--special">
							<div class="prices-box-title-wrap">
								<h4 class="prices-box-title">Weekly Program</h4>
								<div class="prices-box-price">
									<sub>$</sub>28<sub>.95</sub>
								</div>
								<div class="prices-box-text">Per Week</div>
							</div>
							<div class="prices-box-row">Week of Appetite Suppressant</div>
							<div class="prices-box-row">Crave-a-Way Supplement</div>
							<div class="prices-box-row">MetaBlast Supplement</div>
							<div class="prices-box-row">Weekly Weigh-ins</div>
							<div class="prices-box-row">Physician Consultation</div>
							<div class="prices-box-link">
								<a href="<?php echo get_permalink( get_page_by_path( 'pay-online' ) ) ?>" class="btn-link btn-link--sm"><span>booking now</span><i class="icon-right-arrow"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="prices-box prices-box--style3">
							<div class="prices-box-title-wrap">
								<h4 class="prices-box-title">Youth Program</h4>
								<div class="prices-box-price">
									<sub>$</sub>120<sub>.00</sub>
								</div>
								<div class="prices-box-text">Per Month</div>
							</div>
							<div class="prices-box-row">Month of Appetite Suppressant</div>
							<div class="prices-box-row">Daily Probiotic</div>
							<div class="prices-box-row">Weekly Weigh-ins</div>
							<div class="prices-box-row">Physician Consultation</div>
							<div class="prices-box-link">
								<a href="<?php echo get_permalink( get_page_by_path( 'pay-online' ) ) ?>" class="btn-link btn-link--sm"><span>booking now</span><i class="icon-right-arrow"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 order-1 order-md-2">
				<div class="title-wrap-alt">
					<div class="h-sub-lined theme-color">Our prices</div>
					<h2 class="h1">Affordable Pricing <span class="theme-color">Packages</span></h2>
				</div>
				<p>We offer personalized programs to patients who would like to try a diet, weight loss program, or hormone replacement plan that is customized to their specific lifestyles.</p>
				<div class="mt-3"></div>
				<a href="<?php echo get_permalink( get_page_by_path( 'prices' ) ) ?>" class="btn btn-hover-fill d-none d-md-inline"><i class="icon-right-arrow"></i><span>view all prices</span><i class="icon-right-arrow"></i></a>
			</div>
		</div>
	</div>
</div>
<!--//section prices-->
<!--section call us-->
<div class="section mt-5">
	<div class="container">
		<div class="banner-call">
			<div class="row no-gutters">
				<div class="col-sm-6 col-lg-7 d-flex align-items-center justify-content-center px-15">
					<div class="text-center">
						<h2>What are You <br class="d-sm-none"><span class="theme-color">Weighting</span> for?<br>Let's Get Started</span></h2>
						<div class="h-decor"></div>
						<p class="mt-sm-1 mt-lg-4 text-center">We pride ourselves in offering programs designed in accordance with healthy weight-loss practices. Our staff provide you with professional guidance AND behavior modification.</p>
						<div class="mt-2 mt-lg-4">
							<h6 class="banner-call-text">Call Now:</h6>
							<a href="#" class="banner-call-phone"><i class="icon-telephone"></i>1-800-267-0000</a>
						</div>
					</div>
				</div>
				<div class="col-sm-5 col-lg-5 col-xl-4 mt-3 mt-md-0">
					<img src="<?php bloginfo('template_url'); ?>/images/content/banner-callus.jpg" class="shift-right-2" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<!--//section call us-->
<?php get_footer(); ?>
<?php //get_footer('special'); 
?>