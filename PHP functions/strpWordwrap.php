<?php
//strip-tag is used to avoid html tags in string when we want to print the string that avoid html tags 

$st ='<i>this is <b> strip tags  and </b> and other data </i>';

// echo $st. '<br>';

// $v1=strip_tags($st);
//if we want to add only specific tag we can add another parameter

$v1 =strip_tags($st,'<i>');

echo $v1. '<br>';

//wordwrap wrap the words that used in wrap up the length we give in 

$word='this word can be wrapped';

$v2= wordwrap($word,2,'<br>',true);
echo $v2;
?>