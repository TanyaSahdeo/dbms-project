<?php
function add($x1,$x2)
{
$sum=$x1+$x2;
echo "add:$sum<br/>";
}
function sub($x1,$x2)
{
$diff=$x1-$x2;
echo "diff:$diff<br/>";
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
first number:<input type="number" name="first"/><br/>
second number:<input type="number"name="second"/><br/>
<input type="submit" name="add" value="addition"/><br/>
<input type="submit" name="sub" value="substraction"/><br/>
</form>

