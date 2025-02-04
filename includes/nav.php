	<!-- header -->
	<header id="site-header" class="fixed-top">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="index.php">
					<img src="./assets/images/logo.png" class="img-responsive" height="70px"/>
				</a>
				<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
					<span class="navbar-toggler-icon fa icon-close fa-times"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarScroll">
					<ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">
								Pages <i class="fas fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
								<li><a class="dropdown-item" href="services.php">Services</a></li>
								<li><a class="dropdown-item" href="gallery.php">Gallery</a></li>
								<li><a class="dropdown-item" href="coming_soon.php">FAQs</a></li>
								<li><a class="dropdown-item" href="coming_soon.php">Careers</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="coming_soon.php">Bookings</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
					</ul>
					<form action="search.php" method="GET" class="d-flex search-header ms-lg-2">
						<input class="form-control" name="query" type="search" placeholder="Enter Keyword..." aria-label="Search"
							required>
						<button class="btn btn-style" type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
				<!-- toggle switch for light and dark theme -->
				<div class="cont-ser-position">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container">
									<i class="gg-sun"></i>
									<i class="gg-moon"></i>
								</div>
							</label>
						</div>
					</nav>
				</div>
				<!-- //toggle switch for light and dark theme -->
			</nav>
		</div>
	</header>
	<!-- //header -->