<?php
/*
so we learneed about for loop and do while loop and ternary operators and break and continue statement 
*/
$a=1 ;
while($a <= 10 ){
echo 'while loop is working <br>';
$a++;
}

$b=10;
do{
  echo $b. "do while lopp is working <br>";
 $b--;
}
while($b >= 1);

for($c = 1; $c <= 20; $c++ ){
  if($c==8){
    continue;
  }
  echo $c.'for loop is working <br>';
 
}
$d= '20';
echo "the value is ". ($d == 20) ?  'yes its correct' :  'its wrong';


?>