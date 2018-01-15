<?php
	$firstname = $name = $email = $phone = $message = "";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$firstname = $_POST['firstname'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Form</title>
	<!-- jQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="devider"></div>
		<div class="heading">
			<h2>Contact Us</h2>
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="contact-form" role="form">
					<div class="row">
						<div class="col-md-6">
							<label for="firstname">First name <span class="blue">*</span></label>
							<input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name" value="<?php echo $firstname; ?>">
							<p class="comments">Error message</p>
						</div>

						<div class="col-md-6">
							<label for="name">Name <span class="blue">*</span></label>
							<input type="text" id="name" name="name" class="form-control" placeholder="Name" value="<?php echo $name; ?>">
							<p class="comments">Error message</p>
						</div>

						<div class="col-md-6">
							<label for="email">Email <span class="blue">*</span></label>
							<input type="text" id="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>">
							<p class="comments">Error message</p>
						</div>

						<div class="col-md-6">
							<label for="phone">Phone number</label>
							<input type="text" id="phone" name="phone" class="form-control" placeholder="Phone number" value="<?php echo $phone; ?>">
							<p class="comments"></p>
						</div>

						<div class="col-md-12">
							<label for="message">Message <span class="blue">*</span></label>
							<textarea name="message" id="message" class="form-control" placeholder="Your message..." cols="30" rows="4"> <?php echo $message; ?> </textarea>
							<p class="comments">Error message</p>
						</div>

						<div class="col-md-12">
							<p class="blue"> <strong>* This information is required!</strong></p>
						</div>

						<div class="col-md-12">
							<input type="submit" class="button1" value="Send">
						</div>
					</div>
					<p class="thank-you">
						Your message has been sent. Thank you for contacting us.
					</p>
				</form>
			</div>
		</div>
	</div>

	<!-- JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>