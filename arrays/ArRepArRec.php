<?php
//array_replace is used to replace data inside array woth another array and mostly it used with indexed array and associative array

// array-replace-recursive is used for two dimesinal associative array mostly used to handle complex arrays 
  
//array_replace have accept two parametrs the first one is the array which we want to rpelace and second one is the name of the array to whcih we want to replace


$first = ['one'=>'vege','fruit','jah',8323];
$third =['two'=>'new arr',200,100 ,];
$second = [211,555];
//so its replace only the values according to index of first array if we give one value it will replace the first index value and other one also

$repAr = array_replace($first,$second,$third);

echo "<pre>";
print_r($repAr);
echo "</pre>";

?>