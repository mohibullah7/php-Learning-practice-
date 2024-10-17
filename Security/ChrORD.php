<?php
//chr() and ord() is used to convert ascii value to character chr(ascii) we put one ascii  value as paraamter and it return a charcter of the ascii value 

//ord(string)  return the ascii value of first character
//we can use any value like octal and hexa  


$ord = ord('apple');
//it only return the forst value ascii code a not all pple
echo $ord . "<br>";

$chr = chr($ord);
echo $chr;

?>