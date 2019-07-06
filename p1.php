<?php
$emp=array(array(1,"abc",2455),array(2,"pqr",4343),array(3,"rty",54564));
for($r=0;$r<3;$r++)
{
for($c=0;$c<3;$c++)
{
echo $emp[$r][$c];
}
echo "</br>";
}
?>