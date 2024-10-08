<?php

$ct = ['name','id',600,'number','id'];
//array_count_values is used to count values and it count dublicate values also
echo count($ct);
echo sizeof($ct);
echo '<pre>';
print_r(array_count_values($ct));
echo "</pre>"
?>