<!DOCTYPE html>
<html>
	<head>
	
		<title> </title>
		
		<style>
			body {
			
			color: #fff;
				text-align: center;
				font-family: Lucida Calligraphy;
				padding: 1% 0;
				background-image: url("a.jpg");
				background-repeat: no-repeat;
				background-size: cover;
				background-color: #CBAA88;
				
			}
			img{
				width: 23%;
				margin: 1%;
				vertical-align: middle;
				transition: all 2s, transform .5s, box-shadow .5s;
				}
			img:hover {
				box-shadow: 6px 6px 20px
				rgba(0,0,0,0.6);
				transform: scale(1.02);
				}
			img:focus {
				box-shadow: 12px 12px 25px
				rgba(0,0,0,0.7);
				width: 40%;
				transform: none;
				}
				
			@media only screen and (max-width: 940px) {
				img {
				width: 37%;
				}
				img:focus {
				width: 60%;
				margin: 0;
				}
			}
			@media only screen and (max-width: 600px) {
				img {
					width: 65%;
				}
				img:focus {
					width: 100%;
					margin: 20px 0;
				}
			}
			h1 {
				color: #fff;
			    text-shadow:
			    0px 1px 0px #666,
			    0px 2px 0px #555,
			    0px 3px 0px #444,
			    0px 4px 0px #333,
				0px 5px 0px #222,
			    0px 6px 0px #111,
			    0px 7px 5px #000;
				font-size: 2.9em;
				}
			p {
				font-size: 1.1em;
				font-family: Lucida Calligraphy;
				color: #fff;
			    text-shadow:
			    0px 1px 0px #666,
			    0px 2px 0px #555,
			    0px 3px 0px #444,
			    0px 4px 0px #333,
				0px 5px 0px #222,
			    0px 6px 0px #111,
			    0px 7px 5px #000;
				
				}	
				h1 marquee{
			font-family: Lucida Calligraphy;
			}
			#frm{
			border: solid gray 4px;
			width: 20%;
			border-radius: 5px;
			margin: 100px auto;
			padding: 5px;
			}
			#btn{
			color: #fff;
			background:#337ab7;
			padding 5px;
			margin-left: 0%
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
	</head>
	<body>
	<body>
		<div class="main">

			<ul>
				<li  ><a href="index1.html"> Home </a></li>
				<li><a href="packagepage.html"> Packages </a></li>
				<li><a href="gallery.html"> Gallery </a></li>
				<li class="active"><a href="about.html"> About </a></li>
				<li><a href="#"> Contact </a></li>
			</ul>
		</div>
		<div id="frm">
		<form action= "log.php" method="post">
		<p>
			USER NAME:<input type="text" id="user" name="username"/>
		<p>
		<br>
		<p>
			PASSWORD:<input type="password" id="pass" name="pass"/>
		<p>
		<p> 
			<input type="submit" id="btn" name="LOGIN"/>
		<p>