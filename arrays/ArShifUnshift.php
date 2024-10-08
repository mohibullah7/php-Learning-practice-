<?php
//array shift and array unshift is working same like pop and push but it can add entry in the first index and remove from first index 

$shift = ['remove',212,212,212,212,211];
array_shift($shift);
//array shift shift the first value from the array 

array_unshift($shift,'added');

echo "<pre>";
print_r($shift);
echo "</pre>";

?>