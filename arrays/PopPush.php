<?php
$pp = ['one','two',3223,323,32];

array_pop($pp);
array_push($pp,"new item");

echo "<pre>";
print_r($pp);
echo "</pre>";

?>