
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- if we want to show teh data in the same page not on otehr php page we acn drectly add php code inthe action=""  -->
  <form action="<?php   
  echo $_SERVER['PHP_SELF'];
  ?>
  " method="post">
    <label for="Name">Name</label>
    <input type="text" name="fname" placeholder="Name" >
    <label for="age">Age</label>
    <input type="text" name="age" placeholder="Age">
    <input type="submit" name="save" value="Submit">

  </form>

  <?php
  if(isset($_POST['save'])){
    echo $_POST['fname']. "<br>";
    echo $_POST['age']. "<br>";
  }
  
  ?>
</body>
</html>

