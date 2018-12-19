<?php
include"db.php";
include"formprocess.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>New and better form</title>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<link href="bootstrap.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1 class="text-center">Submit form</h1>
		<form method="post" action="formprocess.php" class="form-horizontal" role="form">
			<div class="form-group">
				<label for="name" class="control-label col-sm-2">Name:</label>
				<div class="col-sm-5">
					<input type="text" value="" class="form-control" name="name" placeholder="Full Name" required>
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="control-label col-sm-2">Email:</label>
				<div class="col-sm-5">
					<input type="email" value="" name="email_adress" class="form-control" placeholder="Insert Email" required>
				</div>
			</div>
			<div class="form-group">
				<label for="subject" class="control-label col-sm-2">Subject:</label>
				<div class="col-sm-5">
					<input type="text" name="subject" class="form-control" placeholder="Enter your subject">
				</div>
			</div>
			<div class="form-group">
				<label for="gender" class="control-label col-sm-2">Gender:</label>
				<div class="col-sm-3">
					<select class="form-control" name="gender">
						<option value="">Select your gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						<option value="Other">Other</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2 ">Skills:</label>
			<div class="col-sm-5">
				<label class="checkbox-inline"><input name="skill1"type="checkbox">HTML5</label>
				<label class="checkbox-inline"><input name="skill2"type="checkbox">CSS</label>
				<label class="checkbox-inline"><input name="skill3"type="checkbox">Javascript</label>
				<label class="checkbox-inline"><input name="skill4"type="checkbox">PHP</label>
			</div>
			</div>
			<div class="form-group">
				<label for="country" class="control-label col-sm-2">Country</label>
				<div class="col-sm-3">
					<select class="form-control name="country" required>
						<option value="">Select Your Country</option>
						<option value="venezuela">Venezuela</option>
						<option value="usa">USA</option>
						<option value="Brazil">Brazil</option>
						<option value="Other">Other</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Comments:</label>
				<div class="col-sm-5">
					<textarea name="comment" class="form-control my-fixed" placeholder="Enter your comments."></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2"></label>
				<div class="col-sm-5">
					<button type="Submit" name="submit_form" class="btn btn-success col-sm-12">Submit</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>