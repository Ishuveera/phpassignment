<?php
$x = 0;    
$y = 1;
for($i=0;$i<=10;$i++)    
{   
    echo $x .',';
    $z = $x + $y;    
    $x=$y;       
    $y=$z;  
}   
?> 