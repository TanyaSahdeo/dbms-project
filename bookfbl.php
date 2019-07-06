<?php
	$conn = mysqli_connect("localhost","root","","tourism");
	if (mysqli_connect_errno())
	{
		print "Unable to connect to MYSQL:".mysqli_connect_error();
	}
	$sql = "INSERT INTO flight(aline,date,time,scity,dcity,username,f_name,l_name,phno,email)
	VALUES('$_POST[aline]','$_POST[date]','$_POST[time]','BANGALORE','LONDON','$_POST[username]','$_POST[f_name]','$_POST[l_name]','$_POST[phno]','$_POST[email]')";
	if(!mysqli_query($conn,$sql))
	{
		die('Error: ');
	}
	header("Location: index1.html");
	mysqli_close($conn);
?>