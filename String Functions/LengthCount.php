<?php
//string lenth and count finctions strlen 

$lng = 'this is count functions ';

echo strlen($lng);

//count function counting all the values of the string and retuen numeric values 
//str_word_count  its just cpunting the words neglecting the space 

echo "<br>";
$cnt  = 'counting THE string four five a  b c  ';

echo str_word_count($cnt);
//it accept two parameters the second one is the will retuen the array we caN USE print r tp get the result 
echo "<br>";

$array =  str_word_count($cnt,2);
echo "<pre>";
print_r($array);
echo "</pre>";


?>