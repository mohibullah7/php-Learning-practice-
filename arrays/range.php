<?php
//range func i used to create array of giving range it accpet 3 paramters the first one i sthe start value second end value and third is the break point any integrer value

$rng = range(1,20,2);
// $rg = range('a','z',2);

$rg = range('h','a');

echo "<pre>";
print_r($rg);
echo "</pre>";

//using foreach loop can also used in this one 

foreach(range(10,70,5) as $v2){
  echo $v2 .'<br>';
}

?>