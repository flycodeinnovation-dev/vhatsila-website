<?php
		$title = "Gallery";
		include("includes/head.php");
		include("includes/nav.php");
?>

<!-- inner banner -->
<section class="inner-banner py-5">
		<div class="w3l-breadcrumb py-lg-5">
				<div class="container pt-5 pb-sm-4">
						<h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Gallery</h4>
						<ul class="breadcrumbs-custom-path">
								<li><a href="index.php">Home</a></li>
								<li class="active"><i class="fas fa-angle-right mx-2"></i>Gallery</li>
						</ul>
				</div>
		</div>
</section>
<!-- //inner banner -->

<!-- About the Gallery Section -->
<section class="w3l-about-2 py-5">
		<div class="container py-md-5 py-4">
				<div class="row align-items-center">
						<div class="col-lg-6 about-2-secs-left">
								<h5 class="small-title mb-2">Our Gallery</h5>
								<h3 class="title-style mb-2">Showcasing Our Journey and Services</h3>
								<p>
										Explore moments that define **Vhatsila Transport** — from safely transporting passengers and goods across Venda to serving the community with reliable and efficient services. 
										This gallery reflects our dedication to excellence, highlighting our journey, our team, and the trust we have built within Limpopo.
								</p>
								<ul class="list-about-2 mt-sm-4 mt-3">
										<li class="py-1"><i class="far fa-check-square"></i> Professional team and reliable fleet</li>
										<li class="py-2"><i class="far fa-check-square"></i> Serving the Venda community with pride</li>
										<li class="py-1"><i class="far fa-check-square"></i> Safe and efficient transport solutions</li>
										<li class="py-2"><i class="far fa-check-square"></i> Memorable moments captured on the road</li>
								</ul>
								<a class="btn btn-style mt-lg-5 mt-4" href="services.php">Learn More About Us</a>
						</div>
						<div class="col-lg-6 about-2-secs-right mt-lg-4 mt-5">
								<img src="./assets/images/banner1.jpg" alt="Gallery Highlight" class="img-fluid radius-image" />
						</div>
				</div>
		</div>
</section>
<!-- //About the Gallery Section -->

<!-- Portrait Video Section -->
<section class="portrait-video py-5">
		<div class="container">
				<div class="wthree-heading text-center">
						<h3 class="title-style">Featured Video</h3>
						<p>Watch a glimpse of our services in action — connecting communities with reliable and efficient transport.</p>
				</div>
				<div class="video-container mt-4 text-center">
						<video controls class="portrait-video-frame" poster="assets/images/video-poster.jpg">
								<source src="./assets/infoVid.mp4" type="video/mp4">
								Your browser does not support the video tag.
						</video>
				</div>
		</div>
</section>
<!-- //Portrait Video Section -->

<!-- Gallery Section -->
<section class="gallery py-5" id="gallery">
		<div class="container">
				<div class="wthree-heading text-center">
						<h3 class="title-style">Our Gallery</h3>
						<p>Browse through images that showcase our commitment to delivering reliable transport solutions across the Venda region.</p>
				</div>
				<div class="swiper mySwiper mt-5">
						<div class="swiper-wrapper">
								<!-- Gallery Images -->
								<?php
								$images = ['banner1.jpg', 'banner2.jpg', 'banner3.jpg', 'banner4.jpg', 'bg1.jpg', 'inner-banner.jpg', 'blog1.jpg', 'blog2.jpg', 'img1.jpg'];
								foreach ($images as $image) {
										echo "
										<div class='swiper-slide gallery-item'>
												<a href='assets/images/$image' class='lightbox'>
														<img src='./assets/images/$image' alt='Gallery Image' class='img-fluid' />
												</a>
										</div>";
								}
								?>
						</div>
						<!-- Slider Controls -->
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
						<div class="swiper-pagination"></div>
				</div>
		</div>
</section>

<?php
		include("includes/foot.php");
?>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
		// Swiper Initialization
		const swiper = new Swiper('.mySwiper', {
				slidesPerView: 3,
				spaceBetween: 30,
				loop: true,
				navigation: {
						nextEl: '.swiper-button-next',
						prevEl: '.swiper-button-prev',
				},
				pagination: {
						el: '.swiper-pagination',
						clickable: true,
				},
				breakpoints: {
						768: { slidesPerView: 2 },
						1024: { slidesPerView: 3 },
				},
		});
</script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!-- CSS -->
<style>
		.swiper {
				width: 100%;
				height: 400px;
		}

		.swiper-slide {
				display: flex;
				justify-content: center;
				align-items: center;
		}

		.swiper-slide img {
				max-height: 350px;
				width: auto;
				border-radius: 8px;
				transition: transform 0.3s ease;
				cursor: pointer;
		}

		.swiper-slide img:hover {
				transform: scale(1.1);
		}

		.gallery a.lightbox {
				display: inline-block;
				text-decoration: none;
		}

		.about-2-secs-left ul i {
				color: #28a745;
				margin-right: 10px;
		}
</style>