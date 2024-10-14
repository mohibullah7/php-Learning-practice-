<?php
//explode and implode string functions 

//explode is used to make array from string and imlode i sued to make string from array items 

//explode accept three parameters first one is the (separator, string , limit)
//implode accept two paramerts (seoartor , array)
//join its also working like implode 

$exp = 'this 333,222,222,22,22';

$v = explode(",",$exp,6);

echo "<pre>";
print_r($v);
echo "</pre>";

//implode 

$imp = ['first',2121,'jskajs',2133,'rrrr'];

$st = implode("<br>",$imp);

echo "<pre>";
print_r($st);
echo "</pre>";


//join same as implode

$jn = ['first',2121,'jskajs',2133,'rrrr'];

$st = join(",",$jn);

echo "<pre>";
print_r($st);
echo "</pre>";


?>