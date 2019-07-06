<?php
$emp=array(
           array(1,"abc",25000),
           array(2,"pqr",30000),
           array(3,"xyz",40000));
for($r=0;$r<3;$r++)
{
for($c=0;$c<3;$c++)
{
  echo $emp[$r][$c];
}
echo "<br>";
}
?>