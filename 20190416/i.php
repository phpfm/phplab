<?php
function myTest($x)
{
    static $x=0;
    echo $x;
    $x++;

}


myTest($x);
echo $x;
?>