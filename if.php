<?php
// logical operator 
// and or  xor || && ! 
$a = 300 ;
$b = 400;
$c = '20 ';
$d = 20;

if ($a == $b and $c == $d ){
  echo 'yes its equal to this ';

}
else if ($a != $b ){
  echo  'else statement is excecuted';
}

else{
  echo 'notiing is work ';
}


if (!($a >= 10 && $a <= 500 )){
  echo '<br> yes its equal to this ';

}
else {
  echo 'not operatoe works ';
}


$age = 10 ;
if (!($age >= 20)){
  echo 'logoc is correct ';
}
else {
  echo 'logic is altered ';
}


?>