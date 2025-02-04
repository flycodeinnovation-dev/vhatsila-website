<?php
	$title = "Contact Us";
	include ("includes/head.php");
	include ("includes/nav.php");
?>

	<!-- inner banner -->
	<section class="inner-banner py-5">
		<div class="w3l-breadcrumb py-lg-5">
			<div class="container pt-5 pb-sm-4">
				<h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Contact Us</h4>
				<ul class="breadcrumbs-custom-path">
					<li><a href="index.php">Home</a></li>
					<li class="active"><i class="fas fa-angle-right mx-2"></i>Contact Us</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- //inner banner -->

	<!-- contact -->
	<section class="w3l-contact-info-main py-5" id="contact">
		<div class="container pt-lg-5 pt-md-4 pt-2">
			<div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
				<h5 class="small-title mb-1">Get In Touch</h5>
				<h3 class="title-style">Contact Us</h3>
			</div>
			<div class="row">
				<div class="col-md-6 left-cont-contact pe-md-4">
					<div class="contact-address p-4">
						<div class="contact-icon d-flex align-items-center">
							<i class="fas fa-map-marker-alt" aria-hidden="true"></i>
							<div class="ms-3">
								<h5 class="contact-text">Visit Us:</h5>
								<p># 407284, Soshanguve East<br/> Gauteng, South Africa, 0152</p>
							</div>
						</div>
					</div>
					<div class="contact-address p-4 mt-4">
						<div class="contact-icon d-flex align-items-center">
							<i class="fas fa-phone-alt" aria-hidden="true"></i>
							<div class="ms-3">
								<h5 class="contact-text">Call Us:</h5>
								<a href="tel:+27675520496">+27-67-552-0496</a>
							</div>
						</div>
					</div>
					<div class="contact-address p-4 mt-4">
						<div class="contact-icon d-flex align-items-center">
							<i class="fas fa-envelope-open-text" aria-hidden="true"></i>
							<div class="ms-3">
								<h5 class="contact-text">Mail Us:</h5>
								<a href="mailto:info@vhatsila.co.za">info@vhatsila.co.za</a>
							</div>
						</div>
					</div>
					<div class="contact-address p-4 mt-4">
						<div class="contact-icon d-flex align-items-center">
							<i class="fas fa-map-marker-alt" aria-hidden="true"></i>
							<div class="ms-3">
								<h5 class="contact-text">Area's Covered:</h5>
								<p>Gauteng<br/> NorthWest<br/> Limpopo<br/> Mpumanlanga</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 right-cont-contact ps-md-4 mt-md-0 mt-5">
					<form method="post" class="w3layouts-contact-fm" action="">
						<div class="form-group mb-3">
							<input class="form-control" type="text" name="w3lName" id="w3lName" placeholder="Your Name"
								required="">
						</div>
						<div class="form-group mb-3">
							<input class="form-control" type="email" name="w3lSender" id="w3lSender"
								placeholder="Your Email" required="">
						</div>
						<div class="form-group mb-3">
							<input class="form-control" type="phone" name="w3lSender" id="w3lSender"
								placeholder="Your Phone" required="">
						</div>
						<div class="form-group mb-3">
							<select class="form-control" name="w3lSender" id="w3lSender" placeholder="Query Option" required> 
									<option value="">Select Query Option</option>
									<option value="booking">Booking</option>
									<option value="general">General Enquiry</option>
									<option value="carrers">Careers</option>
									<option value="others">Others</option>
							</select>
						</div>
						<div class="form-group">
							<textarea class="form-control" name="w3lMessage" id="w3lMessage" placeholder="Write Message"
								required="" rows='8'></textarea>
						</div>
						<div class="form-group-2 mt-3 text-end">
							<button type="submit" class="btn btn-style">Submit Form</button>
							<button type="reset" class="btn btn-style">Reset Form</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<div class="map-contact pt-5">
		<iframe class="map-w3layouts" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14393.768085388747!2d28.08790026667272!3d-25.590224236454542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s%20407284%2C%20Soshanguve%20East%20Gauteng%2C%20South%20Africa%2C%200152!5e0!3m2!1sen!2sza!4v1732819569514!5m2!1sen!2sza" 
		 height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<!-- //contact -->

<?php
	include ("includes/foot.php");
?>