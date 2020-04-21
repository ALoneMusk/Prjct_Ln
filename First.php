<?php

session_start();

if (!$_SESSION['authorise']) {
	session_destroy();
	header('Location:GetIn.php');
}


$user = $_SESSION['CRN'];

include("config.php");


$qry = 'SELECT * FROM prjct_ln_data ORDER BY Username';

$res = mysqli_query($connect, $qry);


$information = mysqli_fetch_all($res, MYSQLI_ASSOC);

foreach ($information as $check) {
	if ($check['Username'] == $user) {
		$nameshow = $check['Name'];
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/gif/png" href="img/logo.png">
	<title>
		Your Mistakes' List!
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="card.css">
	<style type="text/css">
		body {
			background-color: white;
		}

		#namebut {
			color: black;
			font-size: 150px;
			background-color: darkslategray;
			border-color: transparent;
			cursor: not-allowed;
		}

		.overlay-content {
			color: red;
			text-align: center;
		}

		#zoom:hover {
			transform-style: preserve-3d;
			transform: rotateY(360deg);
			transition: transform 2s;

		}

		.closebtn {
			color: red;
			cursor: pointer;
			font-size: 50px;
			text-align: center;
			margin-top: 8px;
			margin-bottom: 50px;
		}

		.messages {
			font-size: 50px;
		}

		.sidebar {
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background-color: black;
			overflow-x: hidden;
			transition: 0.5s;
		}

		#span {
			text-align: center;
			font-size: 50px;
			display: inline-block;
			vertical-align: top;
			color: red;
			margin-left: 21.4%;
			cursor: pointer;
		}

		#signout {
			margin-top: 30%;
		}

		.buttonspan {
			color: red;
			font-size: 20px;
			border-color: green;
			background-color: yellow;
			outline-color: transparent;

		}

		#title {
			background-color: darkslategray;
			width: 100%;
		}

		#username {
			font-size: 30px;
			display: inline-block;
			vertical-align: top;
			color: pink;

		}

		h3 {
			color: grey;
			font-size: 20px;
			font-kerning: 20px;
		}

		.button {
			color: deepskyblue;
			outline-color: transparent;
			border-color: transparent;
			border-radius: 100px;
			height: 75px;
			width: 200px;
			font-size: 50px;
			background-color: lemonchiffon;
		}

		.button:hover {
			background-color: navajowhite;
			cursor: pointer;
		}
	</style>

</head>

<body>
	<!--    Nav Bar -->

	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand text-primary font-weight-bold" href="#"><img src="img/logo.png" height="70" width="180"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="First.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="inbox.php">Inbox</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Issue.php">Feedback</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Signout.php">Signout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- nav bar ends -->

	<!-- gropu cards for subjects starts  -->

	<div class="container-fluid padding">
		<div class="container">
			<div class="intro">
				<h2 class="text-center">Departments</h2>
				<p class="text-center">See what rest of your classmates are doing</p>
			</div>
			<div class="container-fluid padding">
				<div class="row padding">
					<div class="col-md-6 col-lg-4 item">
						<div class="card">
							<a href="EE.php"><img class="card-img-top" id="zoom" src="img/1.jpg"></a>
							<div class="card-body">
								<h3 class="card-title">Electrical Engineering</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 item">
						<div class="card">
							<a href="EE.php"><img class="card-img-top" id="zoom" src="img/2.jpg"></a>
							<div class="card-body">
								<h3 class="card-title">Computer Science</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 item">
						<div class="card">
							<a href="EE.php"><img class="card-img-top" id="zoom" src="img/3.jpg"></a>
							<div class="card-body">
								<h3 class="card-title">Information Technology</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 item">
						<div class="card">
							<a href="EE.php"><img class="card-img-top" id="zoom" src="img/4.jpg"></a>
							<div class="card-body">
								<h3 class="card-title">Electronics Engineering</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 item">
						<div class="card">
							<a href="EE.php"><img class="card-img-top" id="zoom" src="img/5.jpg"></a>
							<div class="card-body">
								<h3 class="card-title">Mechanical Engineering</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 item">
						<div class="card">
							<a href="EE.php"><img class="card-img-top" id="zoom" src="img/6.jpg"></a>
							<div class="card-body">
								<h3 class="card-title">Civil Engineering</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 item">
						<div class="card">
							<a href="EE.php"><img class="card-img-top" id="zoom" src="img/7.png"></a>
							<div class="card-body">
								<h3 class="card-title">Production Engineering</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- group cards end -->
	<!--
	<div style="width: 100%; text-align: center;">
		<table align="center" style="padding: 75px;">
			<tr class="br">

				<td id="EE" class="brd" style="padding-right: 50px; padding-left: 0;">
					<button onclick="window.location.href = 'EE.php'; return detect();" id="EEbtn" class="button">EE</button>
				</td>

				<td id="CE" class="brd" style="padding: 50px;">
					<button onclick="window.location.href = 'CE.php'; return detect();" id="CEbtn" class="button">CE</button>
				</td>


				<td id="ME" class="brd" style="padding-left: 50px; padding-right: 0;">
					<button onclick="window.location.href = 'ME.php'; return detect();" id="MEbtn" class="button">ME</button>
				</td>

			</tr>

			<tr class="br">

				<td>

				</td>
				<td id="PE" class="brd" style="padding: 50px;">
					<button onclick="window.location.href = 'PE.php'; return detect();" id="PEbtn" class="button">PE</button>
				</td>
				<td>

				</td>

			</tr>


			<tr class="br">
				<td id="ECE" class="brd" style="padding-right: 50px; padding-left: 0;">
					<button onclick="window.location.href = 'ECE.php'; return detect();" id="ECEbtn" class="button">ECE</button>
				</td>


				<td id="CSE" class="brd" style="padding: 50px;">
					<button onclick="window.location.href = 'CSE.php'; return detect();" id="CSEbtn" class="button">CSE</button>
				</td>

				<td id="IT" class="brd" style="padding-left: 50px; padding-right: 0;">
					<button onclick="window.location.href = 'IT.php'; return detect();" id="ITbtn" class="button">IT</button>
				</td>

			</tr>


		</table>
	</div>


	-->
	<?php



	$selectmsg = "SELECT Username FROM prjct_ln_data";

	$resultmsg = mysqli_query($connect, $selectmsg);

	$datamsg = mysqli_fetch_all($resultmsg, MYSQLI_ASSOC);


	foreach ($datamsg as $infomsg) {


		$tablenamemsg = 'user_' . $infomsg['Username'];



		$credentialsmsg = "SELECT User, Message FROM `$tablenamemsg`";


		$creditmsg = mysqli_query($connect, $credentialsmsg);

		$displaynamemsg = mysqli_fetch_all($creditmsg, MYSQLI_ASSOC);



		foreach ($displaynamemsg as $msg) {
			if ($infomsg['Username'] === $user) {





	?>

				<li class="messages"> <?php echo $msg['Message']; ?></li>

			<?php } ?>
		<?php } ?>
	<?php } ?>
	<script type="text/javascript">
		function openSide() {
			document.getElementById("side").style.width = "100%";
		}

		function closeSide() {
			document.getElementById("side").style.width = "0%";
		}

		var a = '';

		function detect() {

			if (navigator.userAgent.match(/Android/i) ||
				navigator.userAgent.match(/webOS/i) ||
				navigator.userAgent.match(/iPhone/i) ||
				navigator.userAgent.match(/iPad/i) ||
				navigator.userAgent.match(/iPod/i) ||
				navigator.userAgent.match(/BlackBerry/i) ||
				navigator.userAgent.match(/Windows Phone/i)) {
				a = 'true';
			} else {
				a = 'false';
			}

			if (a === 'true') {
				alert("You are trying to access this site using a mobie browser. For a complete experience, it is advised to use a desktop when visiting this website. Some features might not work on this version of browser.");
			}
		}
	</script>







</body>

</html>