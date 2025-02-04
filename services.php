<?php
	$title = "Our Services";
	include("includes/head.php");
	include("includes/nav.php");
?>

<!-- inner banner -->
<section class="inner-banner py-5">
	<div class="w3l-breadcrumb py-lg-5">
		<div class="container pt-5 pb-sm-4">
			<h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Our Services</h4>
			<ul class="breadcrumbs-custom-path">
				<li><a href="index.php">Home</a></li>
				<li class="active"><i class="fas fa-angle-right mx-2"></i>Our Services</li>
			</ul>
		</div>
	</div>
</section>
<!-- //inner banner -->

<!-- Services Section -->
<section class="w3l-services py-5" id="services">
	<div class="container py-md-5 py-4">
		<div class="wthree-heading text-center mb-5">
			<h3 class="title-style">Our Comprehensive Services</h3>
			<p>At Vhatsila Transport, we offer a variety of reliable and tailored transportation services to meet your specific needs.</p>
		</div>
		<div class="row justify-content-center">
			<!-- Service 1 -->
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="service-box p-4 text-center border-radius shadow">
					<i class="fas fa-bus-alt service-icon mb-3"></i>
					<h4 class="service-title mb-2">Passenger Transport</h4>
					<p class="service-desc">
						Safe and reliable passenger transportation for daily commutes, special events, and group travels within Limpopo's Venda region.
					</p>
				</div>
			</div>
			<!-- Service 2 -->
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="service-box p-4 text-center border-radius shadow">
					<i class="fas fa-truck-moving service-icon mb-3"></i>
					<h4 class="service-title mb-2">Goods Delivery</h4>
					<p class="service-desc">
						Efficient and secure delivery of goods for businesses and individuals, ensuring your packages arrive safely and on time.
					</p>
				</div>
			</div>
			<!-- Service 3 -->
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="service-box p-4 text-center border-radius shadow">
					<i class="fas fa-calendar-alt service-icon mb-3"></i>
					<h4 class="service-title mb-2">Event Transport</h4>
					<p class="service-desc">
						Dedicated transport solutions for weddings, corporate events, and other gatherings, ensuring smooth and timely travel.
					</p>
				</div>
			</div>
			<!-- Service 4 -->
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="service-box p-4 text-center border-radius shadow">
					<i class="fas fa-shuttle-van service-icon mb-3"></i>
					<h4 class="service-title mb-2">Shuttle Services</h4>
					<p class="service-desc">
						Convenient shuttle services connecting key locations in the Venda region, tailored for both residents and visitors.
					</p>
				</div>
			</div>
			<!-- Service 5 -->
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="service-box p-4 text-center border-radius shadow">
					<i class="fas fa-cogs service-icon mb-3"></i>
					<h4 class="service-title mb-2">Fleet Management</h4>
					<p class="service-desc">
						Professional fleet management solutions for businesses looking to outsource their transportation and logistics needs.
					</p>
				</div>
			</div>
			<!-- Service 6 -->
			<div class="col-lg-4 col-md-6 mb-4">
				<div class="service-box p-4 text-center border-radius shadow">
					<i class="fas fa-map-marked-alt service-icon mb-3"></i>
					<h4 class="service-title mb-2">Tour Transport</h4>
					<p class="service-desc">
						Scenic and cultural tours throughout Limpopo, providing memorable experiences exploring the Venda region's beauty.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Services Section -->

<?php
	include("includes/foot.php");
?>

<!-- CSS for Services -->
<style>
	.service-box {
		background-color: #fff;
		border: 1px solid #ddd;
		border-radius: 8px;
		transition: transform 0.3s ease, box-shadow 0.3s ease;
	}

	.service-box:hover {
		transform: translateY(-10px);
		box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.2);
	}

	.service-icon {
		font-size: 3rem;
		color: #007bff;
	}

	.service-title {
		font-size: 1.25rem;
		font-weight: 600;
	}

	.service-desc {
		font-size: 0.95rem;
		color: #666;
	}

	.border-radius {
		border-radius: 8px;
	}
</style>
