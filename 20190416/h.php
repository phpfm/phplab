<?php
$x=5;
$y=10;
echo $x;
echo $y;


function myTest($y)
{
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
    
}


myTest($y);
echo $y;
?>