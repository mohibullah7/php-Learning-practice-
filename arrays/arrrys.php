<?php


$a =array(20,'30',true,3.99);

echo $a[1];


print_r($a);

//pre tag is used to organzie data in arrays 

echo '<pre>';
print_r($a);
echo '<pre>';

//while we can also assign values to array in this way when we works with foems 
//its used mostly when we fatch data from forms

$arfroms[0]= 200;
$arfroms[1]= 230;
$arfroms[2]= 20;
$arfroms[3]= 500;

echo '<pre>';
print_r($arfroms);
echo '<pre>';



//lets list items of array using for loop 
echo '<ul>';
$forarr=array('one','two',323,3232,353,);

for($i=0 ; $i < 3 ; $i++){
  echo '<li>'. $forarr[$i] .'</li>';
}
echo '<ul>';
?>