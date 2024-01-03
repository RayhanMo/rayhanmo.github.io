<?php include "sendemail.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Form</title>
	<link rel="stylesheet" href="sendemail.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/b9dd6fa62d.js" crossorigin="anonymous"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <span class = "d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis ">Florida Pain Free</span>
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.html">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href = "patientformfillout.php">Patient Form</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Procedures</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li>
    </ul>
  </header>
	<div class="container">
		<h1>Contact Form</h1>
		<form method="post">
			<fieldset>
				<label>Name</label>
				<input type="text" name="name" placeholder="Enter Name">
			</fieldset>
			<fieldset>
				<label>Mobile</label>
				<input type="text" name="mobile" placeholder="Enter Mobile">
			</fieldset>
			<fieldset>
				<label>Email</label>
				<input type="email" name="email" placeholder="Enter Email">
			</fieldset>
			<fieldset>
				<label >Subject</label>
				<textarea name="subject" id="" cols="30" rows="10" placeholder="Juicy"></textarea>
			</fieldset>
			<fieldset>
				<label>Message</label>
				<textarea name="message" placeholder="Type your Message..."></textarea>
			</fieldset>

			<label> Patient Form Fillout</label>
			<input type="file" name="patientPacketform" id="ppf">
			<br></br>
			<div class="text-center"><div class="g-recaptcha" data-sitekey="6LdwvUMpAAAAACjUj4Cv8VZN81RbzFG_bc7T_oko"></div></div>
			<br></br>
			<fieldset>
				<button type="submit" name="submit">SUBMIT</button>
			</fieldset>			
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>