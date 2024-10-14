<?php
//str-split is same as explode function but it doent have separator parameter its seperate values by itself   it accept two parameters the first one is string and range 

$spt = 'HEllo';

$v1 = str_split($spt,1);


echo "<pre>";
print_r($v1);
echo "</pre>";

//chunk-split accept tree parameters the first is the string second is the length and thired ine is the separator or any value that should add in after every charcter the length will decide after how many chactyers the sepeartor will add 

$chk = 'this is chunk ';
$v2 = chunk_split($chk,1,',');


echo "<pre>";
print_r($v2);
echo "</pre>";

?>