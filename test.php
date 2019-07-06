<?php
$conn=mysqli_connect("localhost","root","","sample");
if(mysqli_connect_errno())
{
print"unable to connect to mysql:".mysqli_connect_error();
}
$sql="INSERT INTO students(first_name,last_name,city)
VALUES
('$_POST[first_name]','$_POST[last_name]','$_POST[city]')";
if(!mysqli_query($conn,$sql))
{
print 'error:'.mysqli_error($conn);
}
print"one record added Successfully";
mysqli_close($conn);
?>