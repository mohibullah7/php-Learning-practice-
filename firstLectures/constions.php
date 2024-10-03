<?php

$vlaues = 50 ;

switch(true){
  case $vlaues <= 20:
    echo 'first statememt';

    break;
    case ($vlaues <= 40):
      echo 'second statememt';
      // also we can write multiple statemnets there 

      break;
      case ($vlaues >= 30):
        echo 'third statememt';
  
        break;

        default : echo 'nothing works';
   
}

// ternary operator 

$num = 10 ;

($num >= 30 )? $z = 'its worked ': $z= 'not worked ';   

echo '<h1>'.$z.'</h1>' ;

$chk = '30';
$v= 'value is :'.(($chk == 30) ?  'matched ':  'not matched');
echo $v;

?>