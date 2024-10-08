<?php


// $arr2 =[
//   23232,32323,323232
// ];

// echo '<table border ="2px">';
// foreach($arr2 as $v1){
//   echo '<tr>';
//   echo '<td>'. $v1 .'</td>';
//   echo '<tr>';

// }

// echo '</table>';


$arr3 =[
 1=> ['fist name','manager',3232,23232],
 2=> ['fist name','manager',4232,23232],
 3=> ['fist name','manager',4232,23232],
 4=> ['fist name','manager',32342,233232],
 5=> ['fist name','manager',344232,23232],
];

echo '<table border ="2px">';
for($v4 = 1 ; $v4 <= 5 ; $v4++){
  echo '<tr>';
  for($v5 = 0; $v5 < count($arr3[$v4]); $v5++){
    echo '<td>'. $arr3[$v4][$v5] .'</td>';
  }
  echo '</tr>';

 

}
echo '</table>';

// echo '<table border="2">';


// for ($v4 = 1; $v4 <= 5; $v4++) {
//     echo '<tr>';
    
   
//     for ($v5 = 0; $v5 < count($arr3[$v4]); $v5++) {
//         echo '<td>' . $arr3[$v4][$v5] . '</td>';
//     }
    
//     echo '</tr>';
// }

// echo '</table>';

?>