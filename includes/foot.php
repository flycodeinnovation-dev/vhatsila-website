	<!-- footer -->
	<footer class="w3l-footer py-5">
		<div class="container pt-4">
			<div class="row">
				<div class="col-lg-4 sub-one-left">
					<h6>About </h6>
					<p>We assure our customers a perfect booking procedure characterized by rapid responses to your messages, 
						regardless of the medium chosen to contact us. Please read through our booking procedures.</p>
					<ul class="social mt-4 pt-lg-1">
						<li><a href="#facebook"><span class="fab fa-facebook-f"></span></a></li>
						<li><a href="#twitter"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#linkedin"><span class="fab fa-linkedin-in"></span></a></li>
						<li><a href="#google-plus"><span class="fab fa-google-plus-g"></span></a></li>
						<li><a href="#instagram"><span class="fab fa-instagram"></span></a></li>
					</ul>
				</div>
				<div class="col-lg-5 col-md-6 mt-lg-0 mt-5 px-lg-5 sub-two-right">
					<h6>Quick Links</h6>
					<ul>
								<li><a href="coming_soon.php">Bookings</a></li>
								<li><a href="services.php">Services</a></li>
								<li><a href="coming_soon.php">Careers</a></li>
								<li><a href="contact.php">Contact Us</a></li>
								<li><a href="coming_soon.php">FAQs</a></li>
								<li><a href="coming_soon.php">Terms & Conditions</a></li>
								<li><a href="coming_soon.php">Privacy Policy</a></li>
						</ul>
				</div>
				<div class="col-lg-3 col-md-6 mt-lg-0 mt-5 sub-one-left">
					<h6>Contact </h6>
					<div class="column2">
						<div class="href1"><span class="fas fa-envelope-open"></span>
						<a href="mailto:info@vhatsila.co.za">info@vhatsila.co.za</a>
						</div>
						<div class="href2 my-3"><span class="fas fa-phone-alt"></span>
							<a href="tel:+27675520496">+27-67-552-0496</a>
						</div>
						<div>
							<p class="contact-para mb-3"><span class="fas fa-map-marker-alt"></span>
							Gauteng, Limpopo,<br/> NorthWest and Mpumanlanga</p>
						</div>
						<div>
							<p class="contact-para"><span class="fas fa-clock"></span>
							Office Hours: 9AM - 7PM</p>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright-footer text-center mt-5 pt-sm-4 pt-2">
				<p>&copy; <?php $currDate = date('Y'); echo($currDate); ?> Vhatsila Transport. All rights reserved |  Design by <a
				target="_blank" href="https://flycodeinnovation.co.za/">Fly Code Innovations</a>
				</p>
			</div>
		</div>
	</footer>
	<!-- //footer -->
</body>
	<!-- Js scripts -->
	<!-- move top -->
	<button onclick="topFunction()" id="movetop" title="Go to top">
		<span class="fas fa-level-up-alt" aria-hidden="true"></span>
	</button>
	<script data-cfasync="false" src="#"></script><script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function () {
			scrollFunction()
		};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("movetop").style.display = "block";
			} else {
				document.getElementById("movetop").style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>
	<!-- //move top -->

	<!-- common jquery plugin -->
	<script src="./assets/js/jquery-3.3.1.min.js"></script>
	<!-- //common jquery plugin -->

	<!-- banner slider -->
	<script>
		const slides = document.querySelectorAll(".slide");
		const nextButton = document.getElementById("next");
		const prevButton = document.getElementById("prev");
		const auto = true;
		const intervalTime = 5000;
		let slideInterval;

		const nextSlide = () => {
			const current = document.querySelector(".current");
			current.classList.remove("current");
			if (current.nextElementSibling) {
				current.nextElementSibling.classList.add("current");
			} else {
				slides[0].classList.add("current");
			}
		};

		const prevSlide = () => {
			const current = document.querySelector(".current");
			current.classList.remove("current");
			if (current.previousElementSibling) {
				current.previousElementSibling.classList.add("current");
			} else {
				slides[slides.length - 1].classList.add("current");
			}
		};

		nextButton.addEventListener("click", () => {
			nextSlide();
			if (auto) {
				clearInterval(slideInterval);
				slideInterval = setInterval(nextSlide, intervalTime);
			}
		});
		prevButton.addEventListener("click", () => {
			prevSlide();
			if (auto) {
				clearInterval(slideInterval);
				slideInterval = setInterval(nextSlide, intervalTime);
			}
		});

		if (auto) {
			slideInterval = setInterval(nextSlide, intervalTime);
		}
	</script>
	<!-- //banner slider -->

	<!-- theme switch js (light and dark)-->
	<script src="./assets/js/theme-change.js"></script>
	<!-- //theme switch js (light and dark)-->

	<!-- MENU-JS -->
	<script>
		$(window).on("scroll", function () {
			var scroll = $(window).scrollTop();

			if (scroll >= 80) {
				$("#site-header").addClass("nav-fixed");
			} else {
				$("#site-header").removeClass("nav-fixed");
			}
		});

		//Main navigation Active Class Add Remove
		$(".navbar-toggler").on("click", function () {
			$("header").toggleClass("active");
		});
		$(document).on("ready", function () {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
			$(window).on("resize", function () {
				if ($(window).width() > 991) {
					$("header").removeClass("active");
				}
			});
		});
	</script>
	<!-- //MENU-JS -->

	<!-- disable body scroll which navbar is in active -->
	<script>
		$(function () {
			$('.navbar-toggler').click(function () {
				$('body').toggleClass('noscroll');
			})
		});
	</script>
	<!-- //disable body scroll which navbar is in active -->

	<!-- bootstrap -->
	<script src="./assets/js/bootstrap.min.js"></script>
	<!-- //bootstrap -->
</html>