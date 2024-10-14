<?php
//strtolower to convert str to lower case 

//strtoupper to convert to upper case

//ucfirst  to convert evevry first word of teh string to uc first 

//ucwords  to convert every word of the the string 
//lcfirst  to lowercse the words of the string 

//strtolower 

$tol = 'THIS IS TOLOWER CASSE FUNCTIONS ';

echo strtolower($tol);
//toupper
$toopr = 'this can be converted to strapprcase';
echo "<br>";
echo strtoupper($toopr);
//ucfirst  its convert the first letter of the first word of sentence 
echo "<br>";

$uc = 'this is ucfirst function of string';

echo ucfirst($uc);

//lcfirst 
echo "<br>";
$lc = "LC word i sused to convert lower case the first letter";
echo lcfirst($lc);

//ucwords is used to convert all the words to capital first letters of the word in sentenece in string 
echo "<br>";

$word = 'its can convert the first letter of all the owrds ';

echo ucwords($word);
?>