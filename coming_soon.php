<?php
	$title = "Coming Soon";
	include ("includes/head.php");
	include ("includes/nav.php");
?>

<style>
.coming-soon {
		max-width: 600px;
		padding: 20px;
		border-radius: 8px;
		box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

h1 {
		font-size: 2.5rem;
		margin-bottom: 10px;
		color: #007bff;
}

p {
		font-size: 1rem;
		color: #555;
		margin-bottom: 20px;
}

.icon {
		font-size: 3rem;
		color: #007bff;
		margin-bottom: 15px;
}

.contact {
		font-size: 0.9rem;
		color: #007bff;
		text-decoration: none;
		display: inline-block;
		margin-top: 15px;
}

.contact:hover {
		text-decoration: underline;
}
</style>

		<!-- coming soon -->
		<section class="error-page">
				<div class="container py-4">
					<div class="coming-soon">
						<i class="fas fa-tools icon"></i>
							<h1>Coming Soon!</h1>
							<p>We're working hard to bring you this page soon. Stay tuned!</p>
							<a href="index.php" class="contact">Return to Homepage</a>
					</div>
				</div>
		</section>
		<!-- //coming soon -->

<?php
	include ("includes/foot.php");
?>