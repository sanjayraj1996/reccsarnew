	<?php $this->load->view('head'); ?>
    <body>
		<?php $this->load->view('preloader');
				$this->load->view('topbar'); 
				$this->load->view('header');
				$this->load->view('sidebar_model'); ?>
        <div class="page-banner-area bg-6 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-banner-content wrap-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <h2><?php echo $ts['r_course_name']; ?></h2>
                    <ul>
                        <li><a href="<?php echo base_url(''); ?>">Home</a></li>
                        <li>Courses</li>
                        <li><?php echo $ts['r_training_category']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="courses-details-area pb-100">
            <div class="container-fluid">
                <div class="courses-details-image">
                    <img src="<?php echo base_url('assets/images/courses/').$ts['r_image_big']; ?>" alt="image">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="courses-details-desc pb-75">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview">Overview</a></li>
                                <li class="nav-item"><a class="nav-link" id="curriculum-tab" data-bs-toggle="tab" href="#curriculum" role="tab" aria-controls="curriculum">Curriculum</a></li>
                                <li class="nav-item"><a class="nav-link" id="instructor-tab" data-bs-toggle="tab" href="#instructor" role="tab" aria-controls="instructor">Instructor</a></li>
                                <li class="nav-item"><a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">Enquiry</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel">
                                    <div class="courses-overview">
                                        <h3>Course Description</h3>
                                        <p><?php echo $ts['r_description']; ?></p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="curriculum" role="tabpanel">
									<h3>Course Syllabus</h3>
									<p><?php echo str_replace("•","<br/>•" ,$ts['r_syllabus']); ?></p>
								</div>

                                <div class="tab-pane fade" id="instructor" role="tabpanel">
                                    <div class="courses-instructor">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4">
                                                <div class="instructor-image" data-tilt>
                                                    <img src="<?php echo base_url('assets/images/team/team-2.png'); ?>" alt="image">
                                                </div>
                                            </div>
                        
                                            <div class="col-lg-8 col-md-8">
                                                <div class="instructor-content">
                                                    <h3>James Anderson</h3>
                                                    <span>General Director</span>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                                                    <ul class="social-link">
                                                        <li><a href="#" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                                                        <li><a href="#" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                                                        <li><a href="#" target="_blank"><i class="ri-instagram-fill"></i></a></li>
                                                        <li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="reviews" role="tabpanel">
                                    <div class="courses-reviews">
                                        <h3>Enquiry</h3>
										<div class="col-lg-12 col-md-12">
											<div class="talk-content margin-zero">
												<span>LET'S TALK</span>
												<h3>We Would Like To Hear From You Anytime <span class="overlay"></span></h3>
												<form id="contactFormTwo">
													<div class="row">
														<div class="col-lg-12 col-md-12">
															<div class="form-group">
																<input type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="Your name">
															</div>
														</div>
														<div class="col-lg-6 col-md-6">
															<div class="form-group">
																<input type="email" name="email" class="form-control" required data-error="Please enter your email" placeholder="Your email address">
															</div>
														</div>
														<div class="col-lg-6 col-md-6">
															<div class="form-group">
																<input type="number" name="email" class="form-control" required data-error="Please enter your phone" placeholder="Your Phone">
															</div>
														</div>
														<div class="col-lg-12 col-md-12">
															<div class="form-group">
																<textarea name="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Your message..."></textarea>
															</div>
														</div>
														<div class="col-lg-12 col-md-12">
															<button type="submit" class="default-btn">Send Message<span></span></button>
															<div id="msgSubmitTwo" class="h3 text-center hidden"></div>
															<div class="clearfix"></div>
														</div>
													</div>
												</form>
											</div>
										</div>
                
                                    </div>
								</div>
                            </div>
                        </div>
                    </div>

				</div>
            </div>
			
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<!-- Start Products Area -->
						<div class="products-area pb-75">
							<div class="container">
								<div class="related-title">
									<h2>Related Course</h2>
								</div>
								<div class="row justify-content-center">
									<?php foreach($training_random as $tr){?>
									<div class="col-lg-3 col-sm-6">
										<div class="single-products-card">
											<div class="products-image">
												<a href="<?php echo base_url('coursesdetail/'.$tr['id']); ?>"><img src="<?php echo base_url('assets/images/courses/'.$tr['r_image_small']); ?>" alt="image"></a>
												<div class="add-to-cart-btn">
													<a href="<?php echo base_url('coursesdetail/'.$tr['id']); ?>" class="default-btn">View Courses</a>
												</div>
											</div>
											<div class="products-content">
												<span><?php echo $tr['r_training_category']; ?></span>
												<h3>
													<a href="<?php echo base_url('coursesdetail/'.$tr['id']); ?>"><?php echo $tr['r_course_name']; ?></a>
												</h3>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<!-- End Products Area -->
					
					</div>
				</div>
			</div>
		</div>
        <?php $this->load->view('overview');
		$this->load->view('footer'); ?> 
        <div class="go-top">
            <i class="ri-arrow-up-s-line"></i>
        </div>
		<?php $this->load->view('js'); ?>
    </body>
</html>