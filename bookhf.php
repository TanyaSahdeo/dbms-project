<?php
	$conn = mysqli_connect("localhost","root","","tourism");
	$hotel=$_POST[hname];
	$price=0;
	if($hotel=='hotel 1')
	{
		$price=20000;
	}
	if($hotel=='hotel 2')
	{
		$price=10000;
	}
	$no=$_POST[nppl];
	
	if($no%2==0)
	{
		$price=($price*$no)/2;
	}
	else
	{
		$price=($price*($no+1))/2;
	}
	if (mysqli_connect_errno())
	{
		print "Unable to connect to MYSQL:".mysqli_connect_error();
	}
	$sql = "INSERT INTO book_hotel (username,dcity,hname,nppl,price)
	VALUES('$_POST[username]','$_POST[dcity]','$_POST[hname]','$_POST[nppl]','$price')";
	if(!mysqli_query($conn,$sql))
	{
		die('Error: ' . mysqli_error());
	}
	header("Location: bookff.html");
	mysqli_close($conn);
?>