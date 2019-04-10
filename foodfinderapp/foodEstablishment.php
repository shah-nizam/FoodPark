<?php include_once 'includes/header.php' ?>

<?php
if(isset($_SESSION['FIRSTNAME']))
include_once 'includes/nav_user.php';
else
include_once 'includes/nav_index.php';
?>
// Add your own google key here
<section>
	<div class="map-section">
		<div class="wrapper">
			<iframe width="960" height="540" frameborder="0" src="//www.google.com/maps/embed/v1/place?q=Harrods,Brompton%20Rd,%20UK
			&zoom=17
			&key=abc" allowfullscreen>
		</iframe>
	</div>
</div>
</section>

<?php include_once 'includes/footer_login_signup.php' ?>
