<?php
//array-fill and array-fill-key is used to creaet another assoc array 
//array fill key is can use other array vlues as key it accept two parameters the index array and the value 
//array-fill accept 3 parameters it doesnt required sepearte array to take values from it it accpet 3 parametrs the fitst s the index 2 is the number 3 is the value 


$afk = ['one','two',3,4,5];

$v1 = array_fill_keys($afk,'new values added');


echo "<pre>";
print_r($v1);
echo "</pre>";

//now array-fill 


$v2 =array_fill(2,4,'array fill mehod ');
echo "<pre>";
print_r($v2);
echo "</pre>";

?>