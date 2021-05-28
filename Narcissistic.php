<?php

function countDigit($n) 
{ 
    if ($n == 0) 
        return 0; 
 
    return (1 + countDigit($n / 10)); 
} 
 
function check( $n) 
{ 
    $l = countDigit($n); 
    $dup = $n; 
    $sum = 0; 
 
    while ($dup) 
    { 
        $sum += pow($dup % 10, $l); 
        $dup = (int)$dup / 10; 
    } 
 
    return ($n == $sum); 
} 
 
$n = 153; 
echo("153 = ");
if (check(!$n)) 
    echo "TRUE"; 
else
    echo "FALSE"; 

?>
