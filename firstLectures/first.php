<?php
//so we can declare php code in the html code 
// also we can use html tags insisde the php code 
// var is declared with dollar sign $ and = value of the variable 
// php code is written same as js only syntaxt difference 
// we can crate objects and functions arrays etc 

$name = 'mkbhd';
$number = 3232323;
$a = 300;
$b = 400;
$c = true ;
echo is_string($b);

echo  '<h3>'.$name.'</h3>';
echo $a + $b ;

echo '<br> this is print meeage  ';
echo '<br> this is print meeage  '.'linked ';

// the $  var is chnaged its values when assign again you can chaneg it 
// lets declare some of the const varivbales that values nto change 

define('num',500);
echo num;

?>