<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
	<title>Realm Digital Assessment</title>

	<!-- css -->

	<!--  google fonts  -->
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">

</head>

<body>
	<div class="body-wrapper">

		<!--   begin of header section   -->
		<section class="header" id="overlay-1">
			<div class="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<div class="theme-name">
								<a href="#" class="title">Realm Digital</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="header-text">
								<p class="service-text">Enjoy your special day</p>

							</div>
						</div>
					</div>
				</div> <!--  end of .container  -->
			</div><!-- end of .header-wrapper  -->
		</section>
		<!--   end of header section     -->

		<!--   Json Decoding section  -->
		<section class="birthday text-center">
			<div class="birthday-wrapper">
				<div class="container">
					<div class="row">
						<h2 class="birthday-text">Our Employee Birthday Month</h2>
						<div class="col-md-8 col-md-offset-2">

							<?php
							

							// Read JSON file
							$json = file_get_contents('https://interview-assessment-1.realmdigital.co.za/employees');

							// Decode Json data 
							$json_data = json_decode($json, true);

							// Today's Birthday date
							$today = date("m-d");
							$birthDate = $json_data->dateOfBirth;

							// Displaying details of an employee and sending email
							$have_started = date('Y-m-d');
							foreach ($json_data as $user) {
								$birthDate = date($user->dateOfBirth);
								if ($user->employmentStartDate < $have_started || (empty($user->employmentEndDate))) {
									$birthYear  = date('Y-m-d');
									if ($today == $birthDate || $birthDate > rightYear($birthYear)) {
										echo "<br />";
										echo "\n Happy birthday to you: " . $user->name . " " . $user->lastname;
										echo "<br />";
										echo "";

										echo "<br /><br />";

										//Sending email to employee
										$to = "moserimad@yahoo.com";
										$subject = "birthday to you";

										$message = "
													<html>
													<head>
													<title>Happy birthday</title>
													</head>
													<body>
													<p>Enjoy your day</p>
													</body>
													</html>
													";

										$headers = "MIME-Version: 1.0" . "\r\n";
										$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

										$headers .= 'From: moserimad@yahoo.com' . "\r\n";
										$headers .= 'Cc: madmoseri@gmail.com' . "\r\n";

										mail($to, $subject, $message, $headers);
									}
								}
							}
							include('function.php');
							?>

						</div>
					</div>
				</div><!--  end of .container  -->
			</div> <!--  end of birthday-wrapper  -->
		</section>
		<!--   end of birthday section  -->


		<!--   begin of footer  section  -->
		<section class="footer">
			<div class="footer-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p class="copy-right text-center">&copy; 2022 Realm Digital. All rights reserved.</p>
						</div>
						<div class="col-md-6">
							<p class="develop text-center">Developed by <a href="#">Mangope Moseri</a></p>
						</div>
					</div>
				</div>
			</div><!--  end of .footer-wrapper  -->
		</section>
		<!--   end of footer section  -->
	</div>

	<!--  js files -->

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/timer.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>

</html>