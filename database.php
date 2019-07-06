<?php
$conn=mysqli_connect("localhost","root","","demo");
if(mysqli_connect_errno($conn))
{
print"unable to connect to mysql database:".
mysqli_connect_error();
}
else
{
print"connection to mysql database is done";
}
?>