<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>MCQE</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">
	<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<div align="right">Welcome <strong><?php echo $_SESSION['username']; ?></strong></div>
    	<div align="right"> <a href="index.php?logout='1'" style="color: Bold Grey;"><h6>Logout<h6></a> </div>
    <?php endif ?>
	</div>

		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="#" id="logo">MCQE</a></h1>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index3.php">Home</a></li>
								<li>
									<a href="">Featured List</a>
									<ul>
										<li><a href="new_release_fetch.php">New Released</a></li>
										<li><a href="top_gross_fetch.php">Top Grossing</a></li>
										<li><a href="top_rated_fetch.php">Top rated Movies</a></li>
									</ul>
								</li>
								<li><a href="allmov.php">All Movies</a></li>
                                <li><a href="dashboard.php">Dashboard</a></li>
							</ul>
						</nav>


					<!-- Banner -->
						<div id="banner">
							<div class="container">
								<section>
									<header class="major">
										<h2>Welcome to Movie Critic Query Engine!</h2>
										<span class="byline">Official Film Rating Website, Explore The Movies by Genres, Top Grossing, New Released.</span>
									</header>
									<!-- <a href="#" class="button alt">Sign Up</a> -->
								</section>			
							</div>
						</div>

				</div>
			</div>

		<!-- Featured -->
			<div class="wrapper style2">
				<section class="container">
					<header class="major">
						<h2>Movies</h2>
					</header>
					<div class="row no-collapse-1">
						<section class="4u">
							<a href="#" class="image feature"><img src="images/pic02.jpg" alt=""></a>
							<b>The Shawshank Redemption</b>
							<p><?php include('fetch/hm1.php')?></p>
						</section>
						<section class="4u">
							<a href="#" class="image feature"><img src="images/pic03.jpg" alt=""></a>
							<b>The Pursuit of Happyness</b>
							<p><?php include('fetch/hm2.php')?></p>
						</section>
						<section class="4u">
							<a href="#" class="image feature"><img src="images/pic04.jpg" alt=""></a>
							<b>Titanic</b>
							<p><?php include('fetch/hm3.php')?></p>
						</section>
	
					</div>
				</section>
			</div>
	</body>
</html>

