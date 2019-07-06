<?php
$conn=mysqli_connect("localhost","root","","demo");
if(mysqli_connect_error($conn))
{
  print "unable to connect to MySQL database :".
	mysqli_connect_error();
}
$sql="INSERT INTO sample (id,name,age,salary)
VALUES
($_POST[id],'$_POST[name]',$_POST[age],$_POST[salary])";
if(!mysqli_query($conn,$sql))
{
print "Error: " .mysqli_error($conn);
}
print "one record added successfully";
mysqli_close($conn);
?>