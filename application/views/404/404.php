	<?php $this->load->view('head'); ?>
    <body>
		<?php $this->load->view('preloader');
				$this->load->view('topbar'); 
				$this->load->view('header');
				$this->load->view('sidebar_model'); ?>
        <div class="page-banner-area jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <h2>404 Error</h2>
                    <ul>
                        <li><a href="<?php echo base_url(''); ?>">Home</a></li>
                        <li>404 Error</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="error-area ptb-100">
            <div class="container">
                <div class="error-content">
                    <img src="<?php echo base_url('assets/images/error.png'); ?>" alt="image">
                    <h3>Error 404 : Page Not Found</h3>
                    <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                    <a href="<?php echo base_url(''); ?>" class="default-btn">Back to Homepage</a>
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