<?php
//sort array is used to manage arrays sorting top bottom how to presnet array and rearrange array items 

//there are multiple sort array functions is used to present data 


$st = ['dpple','z','r','t','c','a','b','g','h'];

sort($st);

echo "<pre>";
print_r($st);
echo "</pre>";

//now lets check number 
$num = [2,3,5,6,7,1,8,9];
sort($num);

echo "<pre>";
print_r($num);
echo "</pre>";

//lets check on associative array but its not prtint the key of the ass array if we want that rsort is used to reverse the sorted array asort => associative sort i used to print key as well its used with associtaive array
$ass=[
  'b'=>'dd',
  'c'=>'cc',
  'f'=>'aa',
  'a'=>'ww',
  'g'=>'rr',
  'h'=>'kk',
  'z'=>'zz',

];
sort($ass);
// rsort($ass);

echo "<pre>";
print_r($ass);
echo "</pre>";


//asort  and arsort is used to reverse the asort values 

$as=[
  'b'=>'dd',
  'c'=>'cc',
  'f'=>'aa',
  'a'=>'ww',
  'g'=>'rr',
  'h'=>'kk',
  'z'=>'zz',

];
// asort($as);
arsort($as);

echo "<pre>";
print_r($as);
echo "</pre>";


//now if we want to sorting by key we can use ksort method for it 


$kas=[
  'b'=>'dd',
  'c'=>'cc',
  'f'=>'aa',
  'a'=>'ww',
  'g'=>'rr',
  'h'=>'kk',
  'z'=>'zz',

];
// asort($as);
// ksort($kas);
krsort($kas);

echo "<pre>";
print_r($kas);
echo "</pre>";


//natural sort natsort is working like reasing coplete string till end moslty usd with naming and extension of the files or paths 

$naso=['Img5.png','Img6.png','Img4.png','Img1.png','Img2.png','Img3.png',];
natsort($naso);

echo "<pre>";
print_r($naso);
echo "</pre>";

//Natcasesort is case sensitive sorting its sort first the small letter values

$cnaso=['img5.png','img6.png','img4.png','Img1.png','Img2.png','Img3.png',];
natcasesort($cnaso);

echo "<pre>";
print_r($cnaso);
echo "</pre>";

//other array function s are array-multisort which can sort the multiplle arrays at a time bu tthe index should be equal 

//array-reverse functions is used to reverse the array 
?>