<?php
//array_merge is used with index and associative array
//array_merge_recursive is used with two dimensional array 
//array_combine is used with index Arrya only 


//Array merge 

$armg =['one','two',12,21,3,12];
$mg = [22,22,22,22];
$new = array_merge($armg,$mg);
echo "<pre>";
print_r($new);
echo "</pre>";


//array_combine

//actually works like replace array its not meging elemensts but chnage the elemnsts with new one
$cmb1 = [1,2,3,4];
$cmb2 =[5,6,7,8];
$cmb = array_combine($cmb1,$cmb2);
echo "<pre>";
print_r($cmb);
echo "</pre>";


//array-merge-recursive

$v1 =[
  1=>[333,333,333,333],
  2=>[22,22,22,22],
  3=>[44,44,44,44]
];
$v2 = [
  4=>[55,55,55,55],
  5=>[66,66,66,66],
  6=>[8,5,3,2]
];
$rt = array_merge_recursive($v1,$v2);
echo "<pre>";
print_r($rt);
echo "</pre>";
?>