<?php
	$conn = mysqli_connect("localhost","root","","tourism");
	if (mysqli_connect_errno())
	{
		print "Unable to connect to MYSQL:".mysqli_connect_error();
	}
	$sql = "INSERT INTO book_city (username,scity,dcity,nppl,price)
	VALUES('$_POST[username]','DELHI','PARIS','$_POST[nppl]','$_POST[nppl]'*200000)";
	if(!mysqli_query($conn,$sql))
	{
		die('Error: ' . mysqli_error());
	}
	header("Location: bookhdp.html");
	mysqli_close($conn);
?>