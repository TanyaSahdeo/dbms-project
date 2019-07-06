<?php
	$conn = mysqli_connect("localhost","root","","online booking");
	if (mysqli_connect_errno())
	{
		print "Unable to connect to MYSQL:".mysqli_connect_error();
	}
	$sql = "INSERT INTO signup (username,password,fname,mname,lname,dob,phone number,gender,country,email)
	VALUES('$_POST[username]','$_POST[password]','$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[dob]','$_POST[phone number]','$_POST[gender]','$_POST[country]','$_POST[email]')";
	if(!mysqli_query($conn,$sql))
	{
		die('Error: ');
	}
	print "One record added Successfully";
	for($r=0;$r<100000;$r++);
	header("Location: page1.html");
	mysqli_close($conn);
?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	