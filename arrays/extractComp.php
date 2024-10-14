<?php
//extract func in array is used to convert keys into variables and its values is stired in that variables

//extract func accept 3 parameters (array,extract-rules,prefix)

//extract rules are defined 
//Extr-overright , extr-skip  , extr-prefix-same , extr-prefix-all ,

// $ext = ['a'=>'this is a key  ','b'=>'this is b key ','c'=>'this is key c '];
// extract($ext);

// echo '<br>,' .$a. '<br>';
//so tha how its working
$ff='thisi is globa; var ';
$tt=['ff'=>'saaas',2=>'sasas'];

extract($tt,EXTR_PREFIX_SAME,'test');

echo '<br>,' .$test_ff. '<br>';
echo '<br>,' .$ff. '<br>';

//copact function make associtive array from diiferent varibale scombining them you have to maek new array to store the new asss array , dont need to write $ sign in cpmact func 

$c1 ='one'; 
$c2 ='one two'; 
$c3 ='one thee'; 
$c4 ='one wq'; 
$c5 ='one eqq'; 
$c6 =32323;
$c7 ='ssas';
$c8 =['c6','c7'];
$new = compact("c1","c2","c3","c4","c5",$c8);

echo "<pre>";
print_r($new);
echo "</pre>";


?>