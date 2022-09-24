<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>
			<div class="modal-body">
				<a href="<?php echo base_url(''); ?>">
					<img src="<?php echo base_url('assets/images/black-logo.png'); ?>" width="175" class="black-logo" alt="image">
					<img src="<?php echo base_url('assets/images/logo.png'); ?>" class="white-logo" alt="image">
				</a>
				<div class="sidebar-content">
					<h3>About Us</h3>
					<p>Reccsar provides manpower supply and staffing solutions tailored specially for the organizations. Reccsar's adaptability leverages the latest technologies to help companies and organizations building the best staff infrastructures in business.</p>
					<div class="sidebar-btn">
						<a href="<?php echo base_url('contact'); ?>" class="default-btn">Let’s Talk</a>
					</div>
				</div>
				<div class="sidebar-contact-info">
					<h3>Contact Information</h3>
					<ul class="info-list">
						<li><i class="ri-phone-fill"></i> <a href="tel:+918525969655">+91 85259 69655</a></li>
						<li><i class="ri-mail-line"></i> <a href="mailto:info@reccsar.com">info@reccsar.com</a></li>
						<li><i class="ri-map-pin-line"></i> 1/6 First Floor, Rathinasamy Nadar Road, <br/>Madurai - 625014</li>
					</ul>
				</div>
				<ul class="sidebar-social-list">
					<li><a href="#" target="_blank"><i class="ri-facebook-fill"></i></a></li>
					<li><a href="#" target="_blank"><i class="ri-twitter-fill"></i></a></li>
					<li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
					<li><a href="#" target="_blank"><i class="ri-instagram-fill"></i></a></li>
				</ul>
				<div class="contact-form">
					<h3>Ready to Get Started?</h3>
					<form id="contactForm">
						<div class="row">
							<div class="col-lg-12 col-md-6">
								<div class="form-group">
									<input type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="Your name">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-lg-12 col-md-6">
								<div class="form-group">
									<input type="email" name="email" class="form-control" required data-error="Please enter your email" placeholder="Your email address">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-group">
									<input type="text" name="phone_number" class="form-control" required data-error="Please enter your phone number" placeholder="Your phone number">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="form-group">
									<textarea name="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-lg-12 col-md-12">
								<button type="submit" class="default-btn">Send Message<span></span></button>
								<div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="clearfix"></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>