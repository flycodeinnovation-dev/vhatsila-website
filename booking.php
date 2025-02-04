<?php
	$title = "Bookings";
	include ("includes/head.php");
	include ("includes/nav.php");
?>

<style>
.booking-section contianer {
    padding: 40px;
    background-color: #f9f9f9;
		max-width: 600px;
    margin: 0 auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 1.8rem;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 10px;
    font-weight: bold;
}

input, button {
    margin-top: 5px;
    padding: 10px;
    font-size: 1rem;
}

input {
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 20px;
}

button:hover {
    background-color: #218838;
}

</style>

	<!-- inner banner -->
	<section class="inner-banner py-5">
		<div class="w3l-breadcrumb py-lg-5">
			<div class="container pt-5 pb-sm-4">
				<h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Bookings</h4>
				<ul class="breadcrumbs-custom-path">
					<li><a href="index.php">Home</a></li>
					<li class="active"><i class="fas fa-angle-right mx-2"></i>Bookings</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- //inner banner -->

	<!-- bookings -->
	<section class="w3l-contact-info-main py-5" id="booking-section">
		<div class="container pt-lg-5 pt-md-4 pt-2">
			<div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
				<h5 class="small-title mb-1">Get In Touch</h5>
				<h3 class="title-style">Bookings</h3>
			</div>
			<main>
    		<section class="booking-section">
        <div class="container">
            <h1>Book Your Ride</h1>
            <p>Fill in the details below to book a transport service with us.</p>
            <form action="./includes/process_booking.php" method="POST" class="booking-form">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required placeholder="Enter your full name">
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email address">
                
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number">
                
                <label for="pickupLocation">Pick-up Location:</label>
                <input type="text" id="pickupLocation" name="pickupLocation" required placeholder="Enter pick-up location">
                
                <label for="destination">Destination:</label>
                <input type="text" id="destination" name="destination" required placeholder="Enter your destination">
                
                <label for="date">Date of Travel:</label>
                <input type="date" id="date" name="date" required>
                
                <label for="time">Time of Travel:</label>
                <input type="time" id="time" name="time" required>
                
                <label for="passengers">Number of Passengers:</label>
                <input type="number" id="passengers" name="passengers" required min="1" placeholder="Enter the number of passengers">
                
                <button type="submit">Submit Booking</button>
            </form>
        </div>
    		</section>
			</main>
		</div>
	</section>
	<!-- //bookings -->

<?php
	include ("includes/foot.php");
?>