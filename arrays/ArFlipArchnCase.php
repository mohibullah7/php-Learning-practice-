<?php
//array_flip  i used to flip the key to values and values shift to keys 

$fl = ['one'=>22,'two'=>33,'three'=>44];

$l = array_flip($fl);

echo "<pre>";
print_r($l);
echo "</pre>";

//array-flip-case-key is used to make uppercase values

$f2 = ['one'=>22,'two'=>33,'three'=>44];
$l2 = array_change_key_case($f2,CASE_UPPER);
// $l2 = array_change_key_case($f2,case:CASE_LOWER);


echo "<pre>";
print_r($l2);
echo "</pre>";

?>