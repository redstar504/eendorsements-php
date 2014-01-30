<!DOCTYPE html>
<html>

<head>
	<title>ACME Inc. - Registration</title>
	<link rel="stylesheet" href="screen.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="example.js"></script>
</head>

<body>
	<div class="container">
		<h1>ACME Inc.</h1>

		<h2>Registration Form</h2>
		
		<form action="http://acme.com" method="post">
			<fieldset>
				<div class="fieldWrapper">
				<label for="firstName">First Name<span>*</span></label>
				<input type="text" name="firstName" id="firstName">
				<label for="lastName">Last Name<span>*</span></label>
				<input type="text" name="lastName" id="lastName">
				<label for="email">Email Address<span>*</span></label>
				<input type="text" name="email" id="email">
				<label for="username">Username</label>
				<input type="text" name="username" id="username">
				<label for="password">Password<span>*</span></label>
				<input type="password" name="password" id="password">
				<label for="companyName">Company Name<span>*</span></label>
				<input type="text" name="companyName" id="companyName">
				<!-- .fieldWrapper --></div>
				<div class="coRegWrapper">
					<img src="logo.png">
					<label for="coreg">Would you like to co-register an account on <a target="_blank" href="http://eendorsements.com">eEndorsements.com</a>?</label>
					<input type="checkbox" name="coreg" id="coreg">
					<small>Track your customers reviews and endorsements to help increase your companies sales with an eEndorsements account.</small>
					<ul class="coRegErrors">
						<li class="heading">There were some errors creating an account on eEndorsements:</li>
					</ul>
				</div>
				<button type="submit">Submit</button>
			</fieldset>
		</form>
	</div>
</body>
