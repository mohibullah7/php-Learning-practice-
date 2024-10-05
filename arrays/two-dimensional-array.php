<?php
//two dimenaiosnal array is 

$arr = [
  [1,'krishna','manager ',900],
  [2,'krishna','manager ',100],
  [3,'krishna','manager ',200],
  [4,'krishna','manager ',500],
 
];

//we can also use foreach loop for this
echo '<table border="2px" cellspacing=0 cellpadding="5px">';

echo '<tr> 
<th>Employe-id </th>
<th>design-id </th>
<th>name-id </th>
<th>salary-id </th>
</tr>';

foreach($arr as  $v1 ){
  echo '<tr>';
  foreach($v1 as  $v2  ){
    echo '<td>'. $v2 .'</td>';
    
  }
  // echo '<br>';
  echo '</tr>';
  
}
echo '</table>';


//this is another way of pronting 2 dimensional array 
// echo 'using foor loop <br>';
// for($row = 0 ; $row < 4 ; $row++){

//   for($col =0 ; $col < 4 ; $col++){
//     echo  $arr[$row][$col] ." ";

//   }


//     echo '<br>';
  
// }
?>