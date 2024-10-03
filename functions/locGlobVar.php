<?php

$a = 400;
$b = 'string value';
function glb(){

  global $a,$b;
  $c = ($a + $a).$b ;

  echo $c;
}

glb();
?>