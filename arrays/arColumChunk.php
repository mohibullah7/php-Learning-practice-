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

?>