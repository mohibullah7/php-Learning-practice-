<?php
//string lenth and count finctions strlen 

$lng = 'this is count functions ';

echo strlen($lng);

//count function counting all the values of the string and retuen numeric values 
//str_word_count  its just cpunting the words neglecting the space 

echo "<br>";
$cnt  = 'counting THE string four five a  b c  ';

echo str_word_count($cnt);
//it accept two parameters the second one is the will retuen the array we caN USE print r tp get the result the resulting array is associative array 
echo "<br>";

$array =  str_word_count($cnt,1);
echo "<pre>";
print_r($array);
echo "</pre>";

//sub-str-count  i sused to count spcific word how many times it repeated in a string and we can set range it accpet 4 paramters the first one is string name 2 is the "word" the3 is lentgh 4 is the end of length 

$str = 'this is my world and this is no is for tis';
 echo substr_count($str,"is",5,30);

 //it can find us how many times the specic word is used 
?>