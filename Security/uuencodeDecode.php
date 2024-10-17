<?php
//uuencode and uudecode is used to protect message where we want o send or receive or saved in database that no one read and write 

//uuencode is sued to code the data and uudecode is used to decode the data 

$data1 = 'my password is 2121';

$enc = convert_uuencode($data1);

echo $enc;

echo "<br>";

$dec = convert_uudecode($enc);
echo "<br>";

echo $dec;

echo "<br>";
if($enc === $dec){
  echo "password is working";
}
else{
  echo "not matches";
}


?>