	<?php $this->load->view('head'); ?>
    <body>
		<?php $this->load->view('preloader');
				$this->load->view('topbar'); 
				$this->load->view('header');
				$this->load->view('sidebar_model'); ?>
        <!-- Start Page Banner Area -->
        <div class="page-banner-area bg-2 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <h2>Services</h2>
                    <ul>
                        <li><a href="<?php echo base_url(''); ?>">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->
        <!-- Start Choose Area -->
        <div class="choose-area pt-100 pb-75">
            <div class="container">
                <div class="section-title">
                    <span>KEY FEATURES</span>
                    <h2>We Are Here To <b>Help You</b><span class="overlay"></span></h2>
                    <p>Reccsar provides manpower supply and staffing solutions tailored specially for the organizations. Reccsar's adaptability leverages the latest technologies to help companies and organizations building the best staff infrastructures in business.</p>
                </div>
                <div class="row">
					<?php foreach($services as $service){ ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-choose-card" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                            <div class="choose-image" data-tilt>
                                <a href="services-details.html"><img src="<?php echo base_url('assets/images/services/'.$service['image']); ?>" alt="image"></a>
                            </div>
                            <div class="choose-content">
                                <h3>
                                    <a href="#"><?php echo $service['title']; ?></a>
                                </h3>
                                <p><?php echo $service['description']; ?></p>
                            </div>
                        </div>
                    </div>
					<?php } ?>
				</div>
            </div>

            <div class="choose-shape-1">
                <img src="<?php echo base_url('assets/images/choose/choose-shape.png'); ?>" alt="image">
            </div>
            <div class="choose-shape-2">
                <img src="<?php echo base_url('assets/images/choose/choose-shape-2.png'); ?>" alt="image">
            </div>
        </div>
        <!-- End Choose Area -->
        
		<!-- Start Skill Area -->
        <div class="skill-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="skill-content">
                            <span>SKILLSET</span>
                            <h3>Workforce Consulting <span class="overlay"></span></h3>
                        </div>

                        <div class="skill-bar" data-percentage="92%" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                            <p class="progress-title-holder">
                                Build a strong, expert talent-based foundation for imperative workforce initiatives to facilitate long-term growth. We provide an insight-driven collaborative approach from workforce planning to talent optimization and implementation to reskilling / upskilling.
                            </p>
                        </div>

                        <div class="skill-bar-btn" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                            <a href="#" class="default-btn">Explore More</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="skill-image" data-aos="fade-left" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                            <img src="assets/images/skill/skill-1.png" alt="image" data-tilt>

                            <div class="skill-shape-1">
                                <img src="assets/images/skill/skill-shape-1.png" alt="image">
                            </div>
                            <div class="skill-shape-2">
                                <img src="assets/images/skill/skill-shape-2.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="skill-bg-shape">
                <img src="assets/images/skill/skill-bg-shape.png" alt="image">
            </div>
        </div>
        <!-- End Skill Area -->
		<!-- Start Skill Area -->
        <div class="skill-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
					<div class="col-lg-6 col-md-12">
                        <div class="skill-image" data-aos="fade-left" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                            <img src="assets/images/skill/skill-1.png" alt="image" data-tilt>

                            <div class="skill-shape-1">
                                <img src="assets/images/skill/skill-shape-1.png" alt="image">
                            </div>
                            <div class="skill-shape-2">
                                <img src="assets/images/skill/skill-shape-2.png" alt="image">
                            </div>
                        </div>
                    </div>
                
                    <div class="col-lg-6 col-md-12">
                        <div class="skill-content">
                            <span>SKILLSET</span>
                            <h3>Exclusive Reccsar: Moving forward with IT <span class="overlay"></span></h3>
                        </div>

                        <div class="skill-bar" data-percentage="92%" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600" data-aos-once="true">
                            <p class="progress-title-holder">
                                Helping you move forward with IT. Reccsar has been doing this for more than 3 years. Effective training allows you to work more efficiently and stay ahead of the competition. With almost 100 training courses, education, certification programs, and exams, we are the leading IT practical trainer.
                            </p>
                        </div>

                        <div class="skill-bar-btn" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700" data-aos-once="true">
                            <a href="#" class="default-btn">Explore More</a>
                        </div>
                    </div>

				</div>
            </div>

            <div class="skill-bg-shape">
                <img src="assets/images/skill/skill-bg-shape.png" alt="image">
            </div>
        </div>
        <!-- End Skill Area -->
        <?php $this->load->view('overview');
		$this->load->view('footer'); ?>
        <div class="go-top">
            <i class="ri-arrow-up-s-line"></i>
        </div>
		<?php $this->load->view('js'); ?>
    </body>
</html>