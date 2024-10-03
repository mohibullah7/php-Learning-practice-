<?php
//associlative array have same functions but it used key and value like object every key have its own value ;

$asr =[
  'val1'=>300,
  'val2 '=> 40,
  'val5 '=> 440,
  'val3 '=> 40,

];
echo '<pre>';
print_r($asr);
echo '</pre>';


$asrr =[
  1=>300,
  2=> 40,
  3=> 440,
  4=> 40,
  
];

echo '<pre>';
echo $asrr[1];
echo $asrr[2];
echo $asrr[3];
echo '</pre>';
?>