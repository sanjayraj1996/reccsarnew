	<?php $this->load->view('head'); ?>
    <body>
		<?php $this->load->view('preloader');
				$this->load->view('topbar'); 
				$this->load->view('header');
				$this->load->view('sidebar_model'); ?>
        <div class="page-banner-area bg-5 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                    <h2>Contact</h2>
                    <ul>
                        <li><a href="<?php echo base_url(''); ?>">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
        <?php $this->load->view('overview'); ?>
		<div class="talk-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="talk-image" data-tilt>
                            <img src="<?php echo base_url('assets/images/talk/talk.png'); ?>" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="talk-content margin-zero">
                            <span>LET'S TALK</span>
                            <h3>We Would Like To Hear From You Anytime <span class="overlay"></span></h3>
                            <form action="javascript:;" id="registration_form_ajax" onsubmit="enquiry_form();" autocomplete="off">
								<div class="contact-form-success alert alert-success d-none mt-4">
									<span id="result"></span>
								</div>
								<div class="contact-form-error alert alert-danger d-none mt-4">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="contact_name" id="name_enquire" class="form-control" required data-error="Please enter your name" placeholder="Your name">
											<span class="error_form" id="name_error_message"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="contact_email" id="name_email" class="form-control" required data-error="Please enter your email" placeholder="Your email address">
											<span class="error_form" id="email_error_message"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="contact_phone" id="name_phone" class="form-control" required data-error="Please enter your phone" placeholder="Your Phone">
											<span class="error_form" id="phone_error_message"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" maxlength="500" id="name_description" rows="4" name="contact_message" required data-error="Please enter your message" placeholder="Your message..."></textarea>
											<span class="error_form" id="message_error_message"></span>
											<div id="the-count" style="float: right;">
												<span id="current">0</span>
												<span id="maximum">/ 500</span>
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">Send Message<span></span></button>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ptb-100">
            <div class="map-location">
                <iframe src="https://maps.google.com/maps?q=Reccsar%20Private%20Limited&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
            </div>
        </div>   
        <?php $this->load->view('footer'); ?>
        <div class="go-top">
            <i class="ri-arrow-up-s-line"></i>
        </div>
		<?php $this->load->view('js'); ?>
		<script type="text/javascript">
			function enquiry_form(){
				var name = $('#name_enquire').val();
				var phone = $('#name_phone').val();
				var email = $('#name_email').val();
				var description = $('#name_description').val();
				var base_url = "<?= base_url('') ?>";
				$.ajax({
					url: base_url+'store/form_contact',
					type: 'post',
					data : {
						"name": name,
						"phone": phone,
						"email": email,
						"description": description
					},
					dataType: "json",
					beforeSend: function(){ 
					},
					success: function(e){
						$(".contact-form-success").removeClass('d-none');
						$('#result').html(e.message);
					}
				});
			}
			$(function() {
				$("#name_error_message").hide();
				$("#email_error_message").hide();
				$("#phone_error_message").hide();
				$("#message_error_message").hide();
				var error_fname = false;
				var error_email = false;
				var error_phone = false;
				var error_message = false;
				$("#name_enquire").focusout(function(){
					check_name();
				});
				$("#name_email").focusout(function() {
					check_email();
				});
				$("#name_phone").focusout(function() {
					check_phone();
				});
				$("#name_description").focusout(function() {
					check_message();
				});
				function check_name() {
					var pattern = /^[a-z A-Z .]*$/;
					var fname = $("#name_enquire").val();
					if (pattern.test(fname) && fname !== '') {
						$("#name_error_message").hide();
						$("#name_enquire").css("border-bottom","2px solid #34F458");
					} else {
						$("#name_error_message").html("Enter the name");
						$("#name_error_message").show();
						$("#name_enquire").css("border-bottom","2px solid #F90A0A");
						error_fname = true;
					}
				}
				function check_email() {
					var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					var email = $("#name_email").val();
					if (pattern.test(email) && email !== '') {
						$("#email_error_message").hide();
						$("#name_email").css("border-bottom","2px solid #34F458");
					} else if(email == '') {
						$("#email_error_message").html("Enter the Email");
						$("#email_error_message").show();
						$("#name_email").css("border-bottom","2px solid #F90A0A");
						error_email = true;
					} else {
						$("#email_error_message").html("Invalid Email");
						$("#email_error_message").show();
						$("#name_email").css("border-bottom","2px solid #F90A0A");
						error_email = true;
					}
				}
				function check_phone() {
					var pattern = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;
					var sname = $("#name_phone").val()
					if (pattern.test(sname) && sname !== '') {
						$("#phone_error_message").hide();
						$("#name_phone").css("border-bottom","2px solid #34F458");
					} else if(sname == '') {
						$("#phone_error_message").html("Enter the phone number");
						$("#phone_error_message").show();
						$("#name_phone").css("border-bottom","2px solid #F90A0A");
						error_phone = true;
					} else {
						$("#phone_error_message").html("Enter the valid number");
						$("#phone_error_message").show();
						$("#name_phone").css("border-bottom","2px solid #F90A0A");
						error_phone = true;
					}
				}
				function check_message() {
					var pattern = /^[a-z A-Z 0-9 $&+,:;=?@#|'<>.-^*()%!]*$/;
					var fname = $("#name_description").val();
					if (pattern.test(fname) && fname !== '') {
						$("#message_error_message").hide();
						$("#name_description").css("border-bottom","2px solid #34F458");
					} else {
						$("#message_error_message").html("Message should not empty");
						$("#message_error_message").show();
						$("#name_description").css("border-bottom","2px solid #F90A0A");
						error_message = true;
					}
				}
			});
			$('textarea').keyup(function() {
			var characterCount = $(this).val().length,
				current = $('#current'),
				maximum = $('#maximum'),
				theCount = $('#the-count');
				
				current.text(characterCount);
				
				/*This isn't entirely necessary, just playin around*/
				if (characterCount < 70) {
					current.css('color', '#666');
				}
				if (characterCount > 70 && characterCount < 90) {
					current.css('color', '#6d5555');
				}
				if (characterCount > 90 && characterCount < 100) {
					current.css('color', '#793535');
				}
				if (characterCount > 100 && characterCount < 120) {
					current.css('color', '#841c1c');
				}
				if (characterCount > 120 && characterCount < 139) {
					current.css('color', '#8f0001');
				}
			  
				if (characterCount >= 140) {
					maximum.css('color', '#8f0001');
					current.css('color', '#8f0001');
					theCount.css('font-weight','bold');
				} else {
					maximum.css('color','#666');
					theCount.css('font-weight','normal');
				}  
			});
		</script>
		<script src="assets/"></script>
    </body>
</html>