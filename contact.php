<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Form</title>
	<?php include 'css/css.html'; ?>
</head>
<body>
	<div class="container">
		<div class="devider"></div>
		<div class="heading">
			<h2>Contact Us</h2>
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<form action="" method="post" id="contact-form" role="form">
					<div class="row">
						<div class="col-md-6">
							<label for="firstname">First name <span class="blue">*</span></label>
							<input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name" value="">
							<p class="comments"></p>
						</div>

						<div class="col-md-6">
							<label for="name">Name <span class="blue">*</span></label>
							<input type="text" id="name" name="name" class="form-control" placeholder="Name">
							<p class="comments"></p>
						</div>

						<div class="col-md-6">
							<label for="email">Email <span class="blue">*</span></label>
							<input type="text" id="email" name="email" class="form-control" placeholder="Email">
							<p class="comments"></p>
						</div>

						<div class="col-md-6">
							<label for="phone">Phone number</label>
							<input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone number">
							<p class="comments"></p>
						</div>

						<div class="col-md-12">
							<label for="message">Message <span class="blue">*</span></label>
							<textarea name="message" id="message" class="form-control" placeholder="Your message..." cols="30" rows="4"> </textarea>
							<p class="comments"></p>
						</div>

						<div class="col-md-12">
							<p class="blue"> <strong>* This information is required!</strong></p>
						</div>

						<div class="col-md-12">
							<input type="submit" class="button1" value="Send">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- jQuery CDN -->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<!-- JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>
</html>