<!DOCTYPE html>
<html>
	<head>
	
		<title> </title>
		
		<style>
			body {
			color: #FFF;
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
			h2 {
				font-size: 2em;
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
			h3 {
				font-size: 1.4em;
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
			h4 {
				font-size: 1.1em;
				font-family: Lucida Calligraphy;
				color: #fff;
			    text-shadow:
			    0px 1px 0px #666,
			    0px 2px 0px #555,
			    0px 3px 0px #444,
			    0px 4px 0px #333;
				
				}					
				p{
				color:#fff00f;
				}
				h1 marquee{
			font-family: Lucida Calligraphy;
			}
			table tbody tr td a h4:hover {
		  background:#34f;
		  color:#ffff00;
		  transition:0.8s;
		  font-size: 20px;
		}
			
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
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
		<body>
		<form action= "bookhdm.php" method="post">
		<br> <br> <br> <br> <br> <br> <br>
		<table border="1">
		<tr>
		<td><H3>USER NAME</H3></td>
		<td><H4><input type="text" id="username" name="username" required></H4></td>
		</tr>
		<tr>
		<td><H3>SOURCE CITY</H3></td>
		<td><H4>DELHI</H4></td>
		</tr>
		<tr>
		<td><H3>DESTINATION CITY</H3></td>
		<td><H4>MALDIVES</H4></td>
		</tr>
		<tr>
				<td><h3>Select hotel</h3></td>
				<td><select name="hname">
					<option value="no"><h4>NO</h4></option>
					<option value="hotel 1"><h4>HOTEL 1</h4></option>
					<option value="hotel 2"><h4>HOTEL 2</h4></option>
				</select>
				</td>
				
	    </tr>
		<td><H3>NO OF PEOPLE</H3></td>
		<td><input type="number" name="nppl" required></td>
		</tr>
		<TR>
		<TD><H3><input type="submit"></H3></TD>
		</TR>
		</form>
	</body>
</html>