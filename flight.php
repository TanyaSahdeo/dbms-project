<?php
	$conn = mysqli_connect("localhost","root","","tourism");
	if (mysqli_connect_errno())
	{
		print "Unable to connect to MYSQL:".mysqli_connect_error();
	}
	$sql = "INSERT INTO flight(aline,date,time,scity,dcity,username,f_name,l_name,phno,email)
	VALUES('$_POST['aline']','$_POST['date']','$_POST['time']','BANGALORE','LONDON','$_POST['username']','$_POST['f_name']','$_POST['l_name']','$_POST['phno']','$_POST['email']')";
	if(!mysqli_query($conn,$sql))
	{
		die('Error: ');
	}
	header("Location: index1.html");
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css2/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css2/style.css" />
	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div class="main">
			<div class="logo">
				<img src="logo.png">
			</div>
			<ul>
				<li  ><a href="index1.html"> Home </a></li>
				<li class="active"><a href="packagepage.html"> Packages </a></li>
				<li><a href="gallery.html"> Gallery </a></li>
				<li><a href="about.html"> About </a></li>
				<li><a href="#"> Contact </a></li>
			</ul>
	</div>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form action= "flight.php" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Flying From</span>
										<select class="form-control ">
											<option>BANGALORE</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
			
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Flying To</span>
										<select class="form-control">
											<option>London</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Departing</span>
										<input class="form-control" type="date"  name="date" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Time</span>
										<select class="form-control" name="time">
											<option value="12:00">12:00</option>
											<option value="16:00">16:00</option>
											<option value="20:00">20:00</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Airline</span>
										<select class="form-control" name="aline" >
											<option value="Indigo">Indigo</option>
											<option value="Air India">Air India</option>
											<option value="Jet Airways">Jet Airways</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								

							</div>
							<div class="row">
							<div class="col-md-2">
									<div class="form-group">
										<span class="form-label" >User Name</span>
										<input class="form-control" type="text" name="username" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">First Name</span>
										<input class="form-control" type="text" name="f_name"required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Last Name</span>
										<input class="form-control" type="text" name="l_name" required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Phone No</span>
										<input class="form-control" type="number"  name="phno"required>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" name="email" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn" type="submit">Book flight</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
