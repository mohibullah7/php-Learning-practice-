<?php
//bin2hex is working same as uuencode and decode its actaullay convert string into hexdaceimal binary code  its also for security purpose 

$a = 'my data is 2121';

$v1 =bin2hex($a);

echo $v1. '<br>';

$v2 = hex2bin($v1);
echo $v2;
?>