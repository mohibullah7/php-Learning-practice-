<?php
//array slice  funstion  is used to cut the values we give range it accept three parameters the first is the array name and second is the start index number and thire=d one is the ending index number 
//the fourth paramter is preseerveed parameter which is either true or false by defualt its false when we use associative array and use number as key so when true it will retuen same number instead of returning index value

// $slc = ['first',212,'second',2121,121,];
$slc = ["1"=>'first',"2"=>212,"3"=>'second',"4"=> 2121, "5"=> 121,];
$ct = array_slice($slc,1,2,true);
echo "<pre>";
print_r($ct);
echo "</pre>";
?>