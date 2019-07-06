<?php
	$conn=mysqli_connect("localhost","root","","tourism");
	
	$username = $_POST['username'];
	$password = $_POST['pass'];
	
	/*$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);*/
    
	//mysqli_select_db("tourism");
	$sql="Select * from signup where username= '$username' and pass= '$password' limit 1";
	
	$result= mysqli_query($conn,$sql);
				//or die("Failed to query database ".mysql_error());
	$row = mysqli_fetch_array($result);
	if( $row['username'] == $username && $row['pass']== $password){
		echo "login success!!! welcome ".$row['username'];
		sleep(5);
		header("Location: index1.html");
				
	}
	else{
		echo "failed to login!";
	}
	/*if(mysqli_num_rows($result)==1){
		echo "You have successfully logged in";
		exit();
	}
	else{
		echo "you have entered incorrect password";
		exit();
	}*/
	
?>