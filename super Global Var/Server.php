<?php
//$_SERVER is used to get the server data like 
/*
HTTP data 
server inofrmation 
which posrt is woring 
hosting information 
url unforamtion 

*/
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

