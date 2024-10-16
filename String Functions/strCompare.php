<?php

//compare function i used to compare string values if t he value is true it will return 0 if not it will return -1 , 
//strcasecmp is case insensitive 
$a = 'this is first compare';
$b ='this is first compare';

$c =strcmp($a,$b);

echo $c;

//strncmp  n = length it will give certian length as third parameter 

//strncasecmp is case insenistive 
$ab = 'this is first compare';
$ba ='this is not compare';

$ca =strncmp($ab,$ba,8);
//it will return tru if the lenth is 1 to 8 

echo $ca;


//substr_compare accept  para (string1,string2,starnt,length,case )  case can be true or false 
echo "<br>";
$sb1 = 'hello world';
$sb2 ='HELLO WORLD';

$cs =substr_compare($sb1,$sb2,0,10,false);
//if fasle it is case sensitive 

echo $cs;


echo "<br>";

//similar-text  function counts the number of simmilar characters in the strings 
$st1= 'Hello world';
$st2 = "Hello World";
$st = similar_text($st1,$st2);
echo $st;

//its also case sensitive 
?>