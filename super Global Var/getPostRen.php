<?php

//super global variables 
//$_get $_post $_req  $_session $_server $_cookie $_file 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="testform.php" method="get">
    <label for="Name">Name</label>
    <input type="text" name="fname" placeholder="Name" >
    <label for="age">Age</label>
    <input type="text" name="age" placeholder="Age">
    <input type="button" name="save" value="Submit">

  </form>
</body>
</html>

