<?php
function add($a,$b)
{
$c=$a+$b;
echo "sum= $c<br/>";
}
function subs($a,$b)
{
$c=$a-$b;
echo "diff= $c<br/>";
}
function mul($a,$b)
{
$c=$a*$b;
echo "prod= $c<br/>";
}
function div($a,$b)
{
$c=$a/$b;
echo "div= $c<br/>";
}

add(10,20);
subs(10,20);
mul(10,20);
div(10,0);
?>