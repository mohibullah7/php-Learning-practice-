<?php
//array list function i sued to make it easier to pritn any value and copy the and save the vlaue in the variable list of varibles can save multiple arrayitems at a time 

$lt = ['first','send','ewke','wqkw','wqj'];
$nm = [212,31,2121,323,1221,2121,1];

$values= list($v1,$v2,$v3,$v4,$v5)=$lt;


  for ($i >=  0 ; $i <= 4 ;$i++ ){

   $res= list($i)=$values;
   
  echo "<pre>";
  print_r($res);
  echo "</pre>";
  
   };


 

//  list($n1,,$n2)=$nm;
//  echo ("$n1,<br>,$n2");

//  echo $v2;

?>