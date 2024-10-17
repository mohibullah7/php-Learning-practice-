<?php
/*
file variable is used in froms in files data insertion like uploading phtos jpg png pdf and other data which we save on our servers 

move_uploaded_file(file,dest)
file is the file name 
dest is the destination where we want to save the file the path of the file 

$_FILES
1 name
2 size 
3 temp,name
4 type jpg/png pdf etc 

enctype ="multipart/form-data " is used because we cant send file data through post pr get method so we can use $_file to send file data 


*/

if(isset($_FILES['picture'])){
  echo "<pre>";
  print_r($_FILES);
  echo "</pre>";

$file_name = $_FILES['picture']['name'];
 $file_size = $_FILES['picture']['size'];
 $file_temp = $_FILES['picture']['tmp_name'];
 $file_type =$_FILES['picture']['type'];

 move_uploaded_file($file_temp,'upload-image/'.$file_name);
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="picture" id=""><br>
    <input type="submit" value="upload picture">
  </form>
</body>
</html>