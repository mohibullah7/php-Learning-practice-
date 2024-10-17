<?php
$_POST['fname'];
$_POST['lname'];
echo "<pre>";
print_r($_POST);
echo "</pre>";

if(isset($_FILES['profile-image'])){
  echo "<pre>";
    print_r($_FILES);
  echo "</pre>";

  $u_name= $_FILES['profile-image']['name'];
  $u_path= $_FILES['profile-image']['full_path'];
  $file_type =$_FILES['profile-image']['type'];
  $tmp_name = $_FILES['profile-image']['tmp_name'];

 if(move_uploaded_file($tmp_name,'testFile/'.$u_name)){
    
    echo 'file is uploded succssfully';
  
}
else{
  echo 'file is not uploaded ';
};
}

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
      <input type="text" name="fname"><br>
      <input type="text" name="lname"><br>
      <input type="file" name="profile-image" id=""><br>
      <input type="submit" value="uplaod file">
  </form>
</body>
</html>