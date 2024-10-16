

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
//include statments is used to link other php files or add it into one file of php working same as react component 

include "header.php";
include "footer.php";
include 'sidebar,php';

//there is another same function require also working same but when the one require function nsame is not matched or any error whole php file will not working and retuen error 

require "header.php";
require "footer.php";

//include-once and required-once is used to protect from dublicacy of files for example if we add two times header.php in the main file so it will show it two times 

?>
</body>
</html>