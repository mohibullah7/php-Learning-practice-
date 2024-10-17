<?php
//md5 and sh1 is sued to protect passwords in database that cannot easily read by hackers MD5  message digest algorithm  
//md5(string,raw)  raw -> true or false by default false if set true it will make 16 character binary format and cionvert password into binary format 
//if false it will make 32 character binary format hex number 

//sha1 also works same as md5  sha1(string,raw)  but the algorithm used in it is us secure Hash Algorithm its more secure than md5   raw true -> 20 char binary format raw-> false 40 char hex number 

//in string we pass our password 

$password = 'mohibkhan';

// echo md5($password,false);
echo sha1($password);

echo "<br>";
if(md5($password)== '13a7fbc0294f5f27dac8d795c9d70572'){
  echo "passowd is matched login ";
}
else{
  echo "try again ";
}

echo "<br>";

if(md5($password == '13a7fbc0294f5f27dac8d795c9d70572') && sha1($password == '54505d02c1d369593f2d41419191ebe6b76a9928') ){
  echo 'Both sh1 and md5 biany code is equal ';
}


?>