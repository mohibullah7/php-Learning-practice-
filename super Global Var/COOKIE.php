<?php
/*
cookie is used to get user information its location products and mobile data screen siize and save it in user computer when we need we can retrieve it 

1 create cookie 

setcookie function is used to create cookie it accept 7 parameters 

setcookie(name,value,expire,path,domain,secure,httponly)

name, is the name of the cookie  

value, is the value that we want to save in user computer 

expire, when want to expire cookie or destroy cookei , the time is given in seconds  when the cookie will expire if we dont set it cookei will not expires

path ,  /  path is sued when we want to retrive the cookie / is used from which page of website we retrieve thr cookei 

domain , www.abc.com 

secure , true or false it https or http when it only accept https when true of false it will accept http also 

httponly, it have two values true or false if true it mean its only can access through server side scripting langiage like php python .net 
if false it can be access with client side scripts also like with javascript 


VIEW COOKIE CALUE 
$_COOKIE['COOKIE NAME ']

*/ 
  $cookie_name ='mycookie';
  $cookie_value='this is the value of the cookie';
$coky=setcookie(
  $cookie_name,$cookie_value,time() + (2800 *30),'/',"",false,true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
    <?php

    if(isset( $_COOKIE['mycookie'])){
        echo $_COOKIE['mycookie'];
    }
    else{
      echo "cookie is not set ";
    }
;

    ?>
  </h1>
</body>
</html>