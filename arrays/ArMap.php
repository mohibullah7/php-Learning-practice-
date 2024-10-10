<?php
//aaray map have same functions like in js but in php array-map accept mulitple arrays as a paramter and first paremter is the defined funstion the  defined or callback functions accept paramters to accept arrays values we can perform any operatipons on the data we received 

$arr = ['forst','second','third','fourth'];

$a =[1,2,3,4,5,6,7];
$b=[2,2,2,2,2,2,2];

$ass1=['one'=> 300,'two'=>400,'three'=>500];
$ass2=['three'=>400,'six'=>300,'sev'=>3];

function fnc1($v1,$v2){
   return [$v1 => $v2];
};


$new1=array_map(null,'fnc1',$ass1 ,$ass2);

echo "<pre>";
print_r($new1);
echo "</pre>";

?>