	<?php $this->load->view('head'); ?>
    <body>
		<?php $this->load->view('preloader');
				$this->load->view('topbar'); 
				$this->load->view('header');
				$this->load->view('sidebar_model'); ?>
        <!-- Start Page Banner Area -->
        <div class="page-banner-area bg-5 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <h2>Courses Grid</h2>

                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Courses Grid</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Courses Area -->
        <div class="courses-area ptb-100">
            <div class="container">
                <div class="coze-grid-sorting row align-items-center">
                    <div class="col-lg-6 col-md-6 result-count">
                        <p>We found <span class="count">9</span> courses available for you</p>
                    </div>

                    <div class="col-lg-6 col-md-6 ordering">
                        <div class="select-box">
                            <label>Sort By:</label>
                            <select>
                                <option>Default</option>
                                <option>Popularity</option>
                                <option>Latest</option>
                                <option>Price: Low To High</option>
                                <option>Price: High To Low</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-courses-box">
                            <div class="courses-image">
                                <a href="courses-details.html">
                                    <img src="<?php echo base_url('assets/images/courses/courses-1.jpg'); ?>" alt="image">
                                </a>
                                <div class="price">$39</div>
                            </div>
                            <div class="courses-content">
                                <div class="course-author d-flex align-items-center">
                                    <img src="<?php echo base_url('assets/images/courses/image-1.jpg'); ?>" class="rounded-circle" alt="image">
                                    <span>Alex Morgan</span>
                                </div>
                                <h3>
                                    <a href="courses-details.html">Introduction to Quantitative Methods</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor.</p>
                                <ul class="courses-box-footer d-flex justify-content-between align-items-center">
                                    <li>
                                        <i class='ri-book-line'></i> 8 Weeks Long
                                    </li>
                                    <li>
                                        <i class='ri-group-line'></i> Available Now
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers"><i class="ri-arrow-left-s-line"></i></a>
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="next page-numbers"><i class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Courses Area -->
        <?php $this->load->view('overview');
        $this->load->view('footer'); ?> 
        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="ri-arrow-up-s-line"></i>
        </div>
        <!-- End Go Top Area -->
		<?php $this->load->view('js'); ?>
    </body>
</html>