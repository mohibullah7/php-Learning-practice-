<?php
//array splice remove all the values from number we give in paramtrs 
//eg if give 1 it will erase from index one to end 

// $slc = ['first',212,'second',2121,121,];
$slc = ["1"=>'first',"2"=>212,"3"=>'second',"4"=> 2121, "5"=> 121,];
$ct = array_splice($slc,1,2);
echo "<pre>";
print_r($ct);
echo "</pre>";


$gt = [21,21,212,2112,332,4,343,5,3,2,2];
$vf = array_splice($gt,4);
echo "<pre>";
print_r($vf);
echo "</pre>";
?>