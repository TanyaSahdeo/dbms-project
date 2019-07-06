<?php
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	
	
	if( 'admin' == $username && 'admin'== $password){
		echo "login success!!! welcome ".$row['username'];
		sleep(5);
		header("Location: admin11.php");
				
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