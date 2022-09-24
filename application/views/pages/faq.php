	<?php $this->load->view('head'); ?>
    <body>
		<?php $this->load->view('preloader');
				$this->load->view('topbar'); 
				$this->load->view('header');
				$this->load->view('sidebar_model'); ?>      
        <!-- Start Page Banner Area -->
        <div class="page-banner-area bg-4 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <h2>FAQ</h2>
                    <ul>
                        <li><a href="<?php echo base_url(''); ?>">Home</a></li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->
        
        <!-- Start FAQ Area -->
        <div class="faq-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>FAQ</span>
                    <h2>Frequently Ask Questions <span class="overlay"></span></h2>
                </div>

                <div class="faq-accordion">
                    <div class="accordion" id="FaqAccordion">
                        <div class="accordion-item">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Why Are Consultants Important?
                            </button>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#FaqAccordion">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est nibh felis tortor viverra pulvinar nibh tincidunt pellentesque dolor. Sem lectus magna metus sit felis, ipsum, et. Auctor tellus id nunc nibh felis aliquam.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What is The Purpose of a Consultant?
                            </button>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#FaqAccordion">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est nibh felis tortor viverra pulvinar nibh tincidunt pellentesque dolor. Sem lectus magna metus sit felis, ipsum, et. Auctor tellus id nunc nibh felis aliquam.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What Attracts You To The Role of a Consultant?
                            </button>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#FaqAccordion">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est nibh felis tortor viverra pulvinar nibh tincidunt pellentesque dolor. Sem lectus magna metus sit felis, ipsum, et. Auctor tellus id nunc nibh felis aliquam.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What Are The Advantages of Being a Consultant?
                            </button>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#FaqAccordion">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est nibh felis tortor viverra pulvinar nibh tincidunt pellentesque dolor. Sem lectus magna metus sit felis, ipsum, et. Auctor tellus id nunc nibh felis aliquam.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Is Consulting a Good Career?
                            </button>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#FaqAccordion">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est nibh felis tortor viverra pulvinar nibh tincidunt pellentesque dolor. Sem lectus magna metus sit felis, ipsum, et. Auctor tellus id nunc nibh felis aliquam.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How is Working in Consulting?
                            </button>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#FaqAccordion">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est nibh felis tortor viverra pulvinar nibh tincidunt pellentesque dolor. Sem lectus magna metus sit felis, ipsum, et. Auctor tellus id nunc nibh felis aliquam.</p>
                                </div>
                            </div>
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