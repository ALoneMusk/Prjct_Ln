<?php

session_start();

//include("header.php");
include("config.php");

if (isset($_POST['submit'])) {
	$username =  mysqli_real_escape_string($connect, $_POST['Usrnm']);
	$password =  mysqli_real_escape_string($connect, $_POST['Pswrd']);



	$check = "SELECT Username, Password FROM prjct_ln_data WHERE Username = '$username' && Password = '$password'";

	$result = mysqli_query($connect, $check);


	if (mysqli_num_rows($result) == 1) {
		$_SESSION['authorise'] = 'true';
		$_SESSION['CRN'] = $_POST['Usrnm'];
		header("location: First.php");
	} else {
		echo '<script>alert("Either your Password or your Username or maybe YOU, my mate, are wrong!");</script>';
	}
}
?>
<html>
<link rel="stylesheet" href="GetIn.css">
<script type="text/javascript" src="GetIn.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/gif/png" href="img/logo.png">

<head>
	<title>Yes, it's me.</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand text-primary font-weight-bold" href="#"><img src="img/logo.png" height="70" width="180"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Sign Up</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="admin.html">Admin</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Issue.php">Feedback</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="voodoo.html">Voodoo</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<form method="POST">
			<div class="form-group">

				<input type="input" name="Usrnm" class="form-control" placeholder="CRN" style="outline: none; text-align: center;">
			</div>
			<div class="form-group">
				<input type="Password" name="Pswrd" class="form-control" placeholder="Password" style="outline: none; text-align: center;">
			</div>
			<div class="form-group form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox"> Remember me
				</label>
			</div>
			<div>
				<button class="btn btn-danger" name="submit" onclick="return confirm();">Login</button>
			</div>
	</div>
	</form>
</body>

</html>