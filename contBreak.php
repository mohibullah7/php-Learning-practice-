<?php
// cont and break is used to skip a number or break the loop we can used it in any loops for do while or any of them 

for( $a = 1 ; $a <= 10 ; $a++){

  if($a==3){
    continue;
  }
  
  echo $a.'<br>';
}

for ($b = 10 ;$b >= 1; $b--){
  if($b == 5){
    break ;
  }
  echo $b.'<br>';
}

?>