<?php
//array-value and array-unique is most udeful functions of array it returns only the values of array not key and return index array  , so its only applicable on the associative array and array-unique is used when the data in the array is dublicated its not retuen the same values 


// $v1 = [1=>'one',2=>'two',3=>'three',4=>'four',55=>'five',6=>323];
$v2 = [11=>'one',22=>'one',33=>'three',44=>'four',555=>'five',66=>323];

$vf = array_values($v2);

echo "<pre>";
print_r($vf);
echo "</pre>";

//now using array-unique 

$v3 = [11=>'one',22=>'one',33=>'three',44=>'four',555=>'five',66=>323];

$vf = array_unique($v3);

echo "<pre>";
print_r($vf);
echo "</pre>";

//its only return the unique values 
?>