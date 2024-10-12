<?php
//traversing functions is used to select and scroll pointer in the array and select any valus and elements of array by moving cursor you can chnage and get the specific array vlaue using traversing functions 

//pre  next end  current pos key reset each 

//next 
$tf = [1,2,3,4,5,6,7,8];
 $v = next($tf);
 $v = next($tf);
 $v = next($tf);
 echo '<pre>';
print_r($v);
 echo "</pre>";

//end

$tfe = [1,2,3,4,5,6,7,8];
 $v1 = current($tfe);
 echo '<pre>';
print_r($v1);
 echo "</pre>";

 echo "<br>".pos($tfe);
 echo "<br>".next($tfe);
 echo "<br>".next($tfe);


 //pre

 $tpe = [1,2,3,4,5,6,7,8];
 $v2 = prev($tpe);
 echo '<pre>';
print_r($v2);
 echo "</pre>";
?>