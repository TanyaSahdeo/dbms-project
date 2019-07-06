<?php
$conn=mysqli_connect("localhost","root","","demo");
if(mysqli_connect_error($conn))
{
  print "unable to connect to MySQL database :".
	mysqli_connect_error();
}
$sql="INSERT INTO application_form (f_name,m_name,l_name,sex,s_add1,s_add2,country,city,state,m_no,p_no,dob,src,email,password,c_password)
VALUES
('$_POST[f_name]','$_POST[m_name]','$_POST[l_name]','$_POST[sex]','$_POST[s_add1]','$_POST[s_add2]','$_POST[country]','$_POST[city]','$_POST[state]',$_POST[m_no],$_POST[p_no],$_POST[dob],'$_POST[src]','$_POST[email]','$_POST[password]','$_POST[c_password]')";
if(!mysqli_query($conn,$sql))
{
print "Error: " .mysqli_error($conn);
}
print "one record added successfully";
mysqli_close($conn);
?>