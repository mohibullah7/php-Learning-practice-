<?php

//super global variables 
//$_get $_post $_req  $_session $_server $_cookie $_file 
//GET DATA  IS SHOW In the url while using post method the data is not showing in the url 
//post is used with secret data like password name etc 
//$-request is used when you dont care about get or post mehtod only to get the data from the form 
//get is used when search queries in search bar 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="testform.php" method="post">
    <label for="Name">Name</label>
    <input type="text" name="fname" placeholder="Name" >
    <label for="age">Age</label>
    <input type="text" name="age" placeholder="Age">
    <input type="submit" name="save" value="Submit">

  </form>
</body>
</html>

