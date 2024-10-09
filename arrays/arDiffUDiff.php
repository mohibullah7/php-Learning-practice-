<?php
//array diff and u diff is used to differintiate between arrays how many differ values are there 

$d1 =['one','two','three',32,322];
$d2 =['sasa','sad','two',32,322];
$fd= array_diff($d2,$d1);

echo "<pre>";
print_r($fd);
echo "</pre>";

//its can used with associative and index array with both but array-diff-assoc only used woth associative array 
$d3 =[22=>'sasa',77=>'two',8=>'three',3=>32,6=>322];
$d4 =[22=>'sasa',77=>'two',3=>'two',6=>32,8=>322];
$fd2= array_diff_assoc($d3,$d4);

echo "<pre>";
print_r($fd2);
echo "</pre>";

//ite returns only the values whic one are not equal both keys and values

//it will return the differnet key values
$d5 =[22=>'sasa',77=>'two',8=>'three',3=>32,6=>322];
$d6 =[23=>'sasa',77=>'two',3=>'two',6=>32,44=>322];
$fd3= array_diff_key($d5,$d6);

echo "<pre>";
print_r($fd3);
echo "</pre>";

?>