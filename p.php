<!DOCTYPE html>
<html>
		<body>
		<form action= "p.php" method="post">
		<tr>
				<td><h3>Select hotel</h3></td>
				<td><select name="hname">
					<option value="no"><h4>NO</h4></option>
					<option value="hotel 1"><h4>med1</h4></option>
					<option value="hotel 2"><h4>med2</h4></option>
				</select>
				</td>
				
	    </tr>
		<tr>
		<td><H3>NO OF PEOPLE</H3></td>
		<td><input type="number" name="nppl" required></td>
		</tr>
		<TR>
		<TD><H3><input type="submit"></H3></TD>
		</TR>
		</form>
	</body>
</html>
<?php
	$conn = mysqli_connect("localhost","root","","tourism");
	$hotel=$_POST['hname'];
	$price=0;
	if($hotel=='hotel 1')
	{
		$price=200*$_POST['nppl'];
	}
	if($hotel=='hotel 2')
	{
		$price=100*$_POST['nppl'];
	}
	
	if (mysqli_connect_errno())
	{
		print "Unable to connect to MYSQL:".mysqli_connect_error();
	}
	else{
		echo "$price";
	}
	mysqli_close($conn);
?>