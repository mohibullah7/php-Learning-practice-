<?php
//string search functions is used to search elements in the array 

//strstr 
//function acce[t three parametrs first is the stirng second is the , search,before-search , befire is the true and false values if true the function will return before values of the string that came befor ethe searched term ]

$str = 'this is Mohib i am web developer ';
// $new=strstr($str,'Mohib',true);
$new=strstr($str,'Mohib',false);

echo $new;

//strchr is workking same as strstr

//strrchr is the reversed order of the strchr
$rev = 'this is mohib i am web mohib developer ';

$neww=strrchr($rev,'mohib');
echo "<br>";
echo $neww;

//strbprk  it will search the character in the word and will return the statemnst that comes after it 

$ff= 'this is first time to see ';
//lets search t 
echo "<br>";
$bb= strpbrk($ff,'t');
echo $bb;
//so i t return after t all the other characters

?>