<?php
//array-column is used to to make another array from multidimensiaonla associative array it accept 3 parameters the first one is the array name second one is the values and third is the key of the values 

$arr = [
  ['id'=>3232,
  'name'=>'klosasa',
  'lname'=>'loop',
],
  ['id'=>44,
  'name'=>'klozx',
  'lname'=>'loosasp',
],
  ['id'=>55,
  'name'=>'klop',
  'lname'=>'lom',
],
];
$ar1=array_column($arr,'id','name');

echo "<pre>";
print_r($ar1);
echo "</pre>";


//array  chunk is used to make multidemsinal array from othr array it accept two paraeters first one is the array name and other one is the number how mnay pair of array we want to make it make multi dim associative array

$b3=['one','teow','hqwuh',3232,232,3232,232,232];
$chk =array_chunk($b3,2);
echo "<pre>";
print_r($chk);
echo "</pre>";

//the third parameter is the preserved value which by defualt false and we can set it true to get the key of the array 

$r= [
  'q'=>'we','w'=>'re',22=>'444',33=>'99'
];
$t = array_chunk($r,2,true);

echo "<pre>";
print_r($t);
echo "</pre>";



?>