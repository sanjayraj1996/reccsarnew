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
                    <h2><?php echo $training_title['r_training_category']; ?></h2>
                    <ul>
                        <li><a href="<?php echo base_url(''); ?>">Home</a></li>
                        <li>Courses</li>
                        <li><?php echo $training_title['r_training_category']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="courses-area ptb-100">
            <div class="container">
                <div class="row">
					<?php 
					if(empty($training)){ echo "<h3 align='center'>No Records Found</h3>"; } else { foreach($training as $course){ ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-courses-box">
                            <div class="courses-image">
                                <a href="courses-details.html">
                                    <img src="<?php echo base_url('assets/images/courses/').$course['r_image_small']; ?>" alt="image">
                                </a>
                            </div>
                            <div class="courses-content">
                                <div class="course-author d-flex align-items-center">
                                    <img src="<?php echo base_url('assets/images/courses/image-1.jpg'); ?>" class="rounded-circle" alt="image">
                                    <span><?php echo $course['r_training_category'];?></span>
                                </div>
                                <h3>
                                    <a href="<?php echo base_url('coursesdetail/').$course['id']; ?>"><?php echo $course['r_course_name'];?></a>
                                </h3>
                                <p><?php echo substr($course['r_description'], 0, 100). '...';?></p>
                            </div>
                        </div>
                    </div>
					<?php } }  ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <?php foreach ($links as $link) {
									echo $link;
							} ?>
                        </div>
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