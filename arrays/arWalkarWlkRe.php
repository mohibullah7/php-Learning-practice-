<?php
//array-walk is function accpet 3 paramertes the third one is optional the basic use of array is to print all teh array with function the first paramer is teh array name and second is function and third one is any number or string value 

//array-walk the function inside  is executed for every values and key of the array just like foreach loop its working like loop 

//array-walk-resursive is used for multidimesional associative array 

$aw = [
  1=>'one',
  2=>'two',
  3=>'three',
  4=>'four'
];

// array_walk($aw,"fnc1");
// function fnc1($value,$key){
// echo "$key : $value" ;
// }

array_walk($aw,"fnc1",'is a key of ');
function fnc1($value,$key,$para){
echo "$key , $para: $value","<br>" ;
}


//array-walk-recursive

$wr = [
 'one'=>[11=>'one',
  21=>'two',
  31=>'three',
  41=>'four'],

  'two'=>[1=>'one',
  2=>'twojjo',
  3=>'thryee',
  4=>'foudsr']
];

array_walk_recursive($wr,"fnc2",'this is parameter');
function fnc2($value,$key,$para){
echo  "$key :$para: $value ,  <br> ";
}


?>