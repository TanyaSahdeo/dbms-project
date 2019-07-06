<?php
	$conn = mysqli_connect("localhost","root","","tourism");
	if (mysqli_connect_errno())
	{
		print "Unable to connect to MYSQL:".mysqli_connect_error();
	}
	$sql = "INSERT INTO book_city (username,scity,dcity,nppl,price)
	VALUES('$_POST[username]','DELHI','NEWYORK','$_POST[nppl]','$_POST[nppl]'*120000)";
	if(!mysqli_query($conn,$sql))
	{
		die('Error: ' . mysqli_error());
	}
	header("Location: bookhf.html");
	mysqli_close($conn);
?>