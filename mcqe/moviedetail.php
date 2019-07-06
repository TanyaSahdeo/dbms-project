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
  $mov_id = $_GET['varname'];
  echo $mov_id;
?>
<!DOCTYPE HTML>
<html>
	<head>
	<style>
	@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
	</style>
		<title>Movie Details</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
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
	<body class="no-sidebar">
	
	<!-- notification message -->
  	<?php if (isset($_SESSION['success1'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success1']; 
          	unset($_SESSION['success1']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="#" id="logo">Movie Details</a></h1>
					
					<nav id="nav">
							<ul>
								<li><a href="allmov.php">Back</a></li>
							</ul>
						</nav>

				</div>
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<section>
						<header class="major">
							  <h2>Title</h2>
							  <h3>Release Date : </h3>
							  <h3>Parental Rating : </h3>
							  <p></p>
							  <h4>About : </h4>
							  <h4>Genre : </h4>
							  <h4>Production House : </h4>
							  <h4>Actors : </h4>
							  <h4>Director : </h4>
							  <h4>Year : </h4>
							  <h4>Lengh : </h4>
							  <h4>Language : </h4>
							  <h4>Box Office : </h4>
							  <h4>Awards : </h4>
							  <h4>Reviews :</h4>
							  <b>Review & Rate</b>
							  <div id="revinp">
							  <form method="post" action="rstore.php">
							  <fieldset class="rating">
									<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
									<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
									<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
									<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
									<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
									<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
									<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
									<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
									<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
									<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
							  </fieldset>
							  <input type="text" name="Review" placeholder="Type Your Review Here">
							  <p></p>
							  <input type="submit" name="RStore">
							  <input type="reset" name="Reset">
							  </form>
							  </div>
							  
							  
							<span class="byline"></span>
						</header>
						</section>
				</div>
			</div>
	</body>
</html>