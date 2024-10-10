<?php
//array-rend is used to pick any random values form array it accept two parameters the first oen is the array name and other one is the number if we give number 2 it will give us two random numbers its render the index of the values not the value

$rend = [3232,'kjahs',32,'jhsjah',3222,323,144,32,32,23,232];
$l = array_rand($rend,2);

echo "<pre>";
print_r($l);
echo "</pre>";


//now array_shuffle

$shuf = [3232,'kjahs',32,'jhsjah',3222,323,144,32,32,23,232];
shuffle($shuf);

echo "<pre>";
print_r($shuf);
echo "</pre>";
?>