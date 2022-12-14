<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet"> 

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
    <!-- Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
	
	<!-- Google Recaptaca API -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
</head>

<body>

	

	<!-- Section: contact -->
    <section class="contact-section text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="boxed-grey">
						<form method="POST" action="sendemail.php">
							<fieldset>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="name">Full Name</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
												</span>
												<input type="text" name="name" class="form-control" id="name" placeholder="Full name" required/>
											</div>
										</div>
										<div class="form-group">
											<label for="email">Email Address</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
												</span>
												<input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required/>
											</div>
										</div>
										<div class="form-group">
											<label for="subject">Subject</label>
											<div class="input-group">
												<span class="input-group-addon"><span class="glyphicon glyphicon-tags"></span>
												</span>
												<input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required/></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="message">Message</label>
											<textarea name="message" id="message" class="form-control" rows="7" cols="25"  placeholder="Message" required></textarea>
										</div>
									</div>
									<div class="col-md-12">
										
										<!-- Need Your Give Here Your Website Public Key -->
									
										<div class="g-recaptcha pull-left" data-sitekey="---Your Website Public Key---"></div>
										
										<!-- <button name="submit" type="submit" class="btn btn-skin pull-right" id="btnContactUs">
										</button> -->
                                        <button type="submit" class="main-btn wow fadeInUp pull-right" data-wow-duration="1.3s" data-wow-delay="1.1s" pull-right  id="btnContactUs">Send Message</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Section: contact -->




    <!-- jQuery -->
    <script src="assets/js/jquery-1.11.3.min.js"></script>
	
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
	
</body>
</html>
