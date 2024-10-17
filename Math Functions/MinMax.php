<?php
/*
min i used to pick a minumum number and max is used to pick maximum number 
*/

$min = [1,2,3,4,5,6];

$v1= min($min);
$v2 =max($min);

print_r($v1);
echo '<br>';
print_r($v2);
echo '<br>';

//also it works with varibale too 
//min(value1,value2,....)
//max(value1,v2.....)

$b1=min(2,3,4,5,6,67,8,8);
echo $b1.'<br>';
?>