<?php
//extract func in array is used to convert keys into variables and its values is stired in that variables

//extract func accept 3 parameters (array,extract-rules,prefix)

//extract rules are defined 
//Extra-overright , extra-skip  , extra-prefix-same , extra-prefix-all ,

$ext = ['a'=>'this is a key  ','b'=>'this is b key ','c'=>'this is key c '];
extract($ext);

echo '<br>,' .$a. '<br>';
//so tha how its working

$tt=['ff'=>'saaas',2=>'sasas'];
extract($tt);

echo '<br>,' .$ff. '<br>';

?>