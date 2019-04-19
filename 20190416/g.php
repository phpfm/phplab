<?php
$x=5;
$y=10;
echo $x;
echo $y;


function myTest($y)
{
    global $x,$y;
    $y=$x+$y;

}

myTest($y);
echo $y;输出//15
?>