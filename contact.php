<?php 
error_reporting(0);
$result="";
if (isset($_POST['submit'])) {


		
	    header('Location: contact1.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="contact/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="contact/css/util.css">
	<link rel="stylesheet" type="text/css" href="contact/css/main.css">
<!--===============================================================================================-->

</head>
<body>

<form action="contact.php" method="post">

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="contact1.php" method="post">
				<span class="contact100-form-title">
					CONTACT FORM
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Age required">
					<span class="label-input100">Age</span>
					<input class="input100" type="text" name="age" placeholder="Enter your Age">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate = "Mail id required">
					<span class="label-input100">Mail Id</span>
					<input class="input100" type="text" name="mailid" placeholder="Enter your Mail id">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Country">
					<span class="label-input100">Country</span>
					<input class="input100" type="text" name="Country" placeholder="Enter your Country">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Why do you want to join in this Lab</span>
					<textarea class="input100" name="message" placeholder="Your message here about Donation or whatever..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="submit">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</form>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="contact/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="contact/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="contact/vendor/bootstrap/js/popper.js"></script>
	<script src="contact/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="contact/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="contact/vendor/daterangepicker/moment.min.js"></script>
	<script src="contact/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="contact/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="contact/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>