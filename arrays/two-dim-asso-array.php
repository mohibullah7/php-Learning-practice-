<?php
//lets build with two dimensional associaktive array and work on it 

$arr = [
  "mohib" => ['rollNO'=> 1, 'des'=>'manger', 'marks'=> 34400],
  "khan" => ['rollNO'=> 1, 'des'=>'manger', 'marks'=> 34400],
  "maths" => ['rollNO'=> 1, 'des'=>'manger', 'marks'=> 34400],
  "bio" => ['rollNO'=> 1, 'des'=>'manger', 'marks'=> 34400],

];


echo "<table  border = '1px' cellspacing = 0 cellpadding ='5px'>";
foreach($arr as $key => $v1){
  echo "<tr>";
  foreach($v1 as $key=> $v2){
      echo "<td>".$v2."</td>";
  }
  echo "</tr>";   
}
?>