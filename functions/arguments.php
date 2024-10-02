<?php
/*
so we ugh can chnage values of variables and parametrs through raference and & sign i used with paramteric values and the values which is assigned in the var and pass it to the () function parametrs
*/

function second(&$num){
  $num += 7;
return $num;
}
function first(&$num){
     $num = 5;
  return $num;
}


$number = 10;
echo '<br>'. second($number);
echo '<br>'. first( $number);


//  echo $number;

?>