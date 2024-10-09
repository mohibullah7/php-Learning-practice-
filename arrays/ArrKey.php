<?php
//arrasy key functions is uded mostly with associative array its return key of the vlaues if we used it index aarray it return index of the arraty

$a=['one'=>3232,'two'=>444,'three'=>555];
$b = array_keys($a);
echo "<pre>";
print_r($b);
echo "</pre>";

echo "<br>";

$c = array_key_first($a);
echo "<pre>";
print_r($c);
echo "</pre>";

echo "<br>";

$cd = array_key_last($a);
echo "<pre>";
print_r($cd);
echo "</pre>";

echo "<br>";
//exists is uded to search in the array it accept two parameters arry key exists and key exists only working same way 
$cdd = key_exists("two",$a);
echo "<pre>";
print_r($cdd);
echo "</pre>";

if($cdd == true){
  echo 'array exist ';
}
else{
  echo 'array does not exist ';
}
?>