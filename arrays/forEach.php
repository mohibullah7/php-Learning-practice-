<?php
//foreach loop is used to same as for loop but its easy to get all values of array without writing the associated numbers for loop 

$ra = [32,'jkdsj',900,30,'ghja'];

foreach($ra as $values  ){
  echo $values.'<br> ';
}


$rra =[
  'one'=>320,
  'two'=>20,
  'three'=>40,
  'four'=>20,

];
foreach($rra as $key => $val){
  echo $key. '='. $val .'<br>';
}

?>