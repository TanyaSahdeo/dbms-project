<?php
	$conn = mysqli_connect("localhost","root","","tourism");
	if (mysqli_connect_errno())
	{
		print "Unable to connect to MYSQL:".mysqli_connect_error();
	}
	$sql = "INSERT INTO signup (username,pass,f_name,l_name,email)
	VALUES('$_POST[username]','$_POST[pass]','$_POST[f_name]','$_POST[l_name]','$_POST[email]')";
	if(!mysqli_query($conn,$sql))
	{
		die('Error: ');
	}
	print "One record added Successfully";
	for($r=0;$r<100000;$r++);
	header("Location: start.html");
	mysqli_close($conn);
?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	