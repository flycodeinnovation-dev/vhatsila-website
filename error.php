<?php
	$title = "Error 404";
	include ("includes/head.php");
	include ("includes/nav.php");
?>

	 <!-- 404 error -->
	 <section class="error-page">
		  <div class="container py-4">
				<div class="main-cover">
					 <i class="fas fa-frown-open"></i>
					 <h5 class="error mt-lg-4">Sorry, We Can't Find That Page!</h5>
					 <p class="">The page you are looking for was moved, removed, renamed or never existed.</p>
					 <form class="form-inline search-form-error mt-md-5 mt-4" action="#" method="post">
						  <input class="form-control" type="search" placeholder="Search" aria-label="email" required="">
						  <button class="btn search" type="submit"><i class="fas fa-search"></i></button>
					 </form>
					 <a href="index.php" class="btn-style btn mt-md-5 mt-4"> <i class="fas fa-arrow-left mr-2"></i> Back to Home</a>
				</div>
		  </div>
	 </section>
	 <!-- //404 error -->

<?php
	include ("includes/foot.php");
?>