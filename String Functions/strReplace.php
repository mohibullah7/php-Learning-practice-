<?php
//replace funftion of string is used to repalce the words in the strings 

//str-replace functoon is used to replace certian words it accept theree parameters the first os the (find,replace,string)  find is the word that wew wnat to replace 
//and replace is the wrod tha we want to replace wtih other like chnage one 
//and string var name 
//its case-sensitive function 
$rp = 'this i sreplace word khan  with other word ';
// $v = str_replace('khan','mohib',$rp);

// echo $v;


echo "<br>";
//we can also replace many words ata time by using a array 
$find= ['i','with'];
$replace = ['me','you'];
$bb = str_replace($find,$replace,$rp);
echo $bb;
echo "<br>";


//we have another same function that case insinsitive ;
//str-ireplace 

$ci = 'this is case insisitive function which dont Care about capital letter or othe r';

$v2 =str_ireplace('care','caringg',$ci );

echo $v2;

echo "<br>";
//ok so the care C is capital but its doent care it 
$cnum = 'e function 33 or othe r';

$v3 =str_ireplace(33,444,$cnum );

echo $v3;
//ok si it also dont care about the data types 


//substr-replace is used to replace the values from string using index number from start to end the end number maybe yu give negative from back counting -1-2-3-4-.. it can give exact value so it ca accept 4 parameters the first is the string name second is the replce word start length 3rd is the start length 4th is end length
echo "<br>";
echo "<br>";

$zx = 'this  is substring to it can works to cut the vlaues betwee length ';

$mn=substr_replace($zx,'MMMM ',9,-7);

echo $mn;

echo "<br>";
echo "<br>";

//strtr isaccept 3 parametes the first is string second is is the alphabets we want to replace like e with o or m woth n its most useful sometimes we want ot replace the capital words with it 

$tr = 'this can replace one aplhabet woth other most useful functions ';

$t = strtr($tr,'ca','CO');

echo $t;
//if i write ca woth CO it must have both same  count words liek 2 or 3 must be 3 

?>