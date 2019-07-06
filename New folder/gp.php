<?php
function add($x1,$x2)
{
 $sum=$x1+$x2;
echo"ADD:  $sum<br/>";
}
function sub($x1,$x2)
{
 $diff=$x1-$x2;
echo"SUBS:  $diff<br/>";
}
if(isset($_POST['add']))
{
add($_POST['first'],$_POST['second']);
}

if(isset($_POST['sub']))
{
sub($_POST['first'],$_POST['second']);
}
?>
<form method="post">
First number:<input type="number" name="first"/><br/><br/>
Second number:<input type="number" name="second"/><br/><br/>
<input type="submit" name ="add" value="addition"/>
<input type="submit" name ="sub" value="substraction"/>
</form>