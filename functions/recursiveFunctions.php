<?php
// when we call function in its own body its called recursive fnctions 
//so main function of rec func is to use it like loop its working a=same as loops 
function rec($number){
  $a= 'vlaue1';
  $b = "value2";
  if($number <= 10){
    echo $number;
    rec($number + 1);

  }
  
}

rec(1);


function factorial ($num){
if($num == 0){
  return 1;
}
else {
  return ($num * factorial($num -1));
}
}

echo '<br>'.factorial(5);
?>