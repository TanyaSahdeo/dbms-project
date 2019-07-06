<?php
	$conn = mysqli_connect("localhost","root","","tourism");
	$a1=$_POST['aline'];
	$a2=$_POST['date'];
	$a3=$_POST['time'];
	$a4=$_POST['scity'];
	$a5=$_POST['dcity'];
	$a6=$_POST['username'];
	$a7=$_POST['f_name'];
	$a8=$_POST['l_name'];
	$a9=$_POST['phno'];
	$a10=$_POST['email'];

	
	if (mysqli_connect_errno())
	{
		print "Unable to connect to MYSQL:".mysqli_connect_error();
	}
	$sql = "INSERT INTO flight(aline,date,time,scity,dcity,username,f_name,l_name,phno,email)
	VALUES('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10')";
    if(!mysqli_query($conn,$sql))
	{
		die('Error: ');
	}
	header("Location: Payment.html");
	mysqli_close($conn);
?>