<?php
$students = [
"ali"=>[
  "id"=> 1,
  "name"=>"vvjhon",
  "reg"=>300,
  "sect"=>'a'
],
"ahmed"=>[
  "id"=> 2,
  "name"=>"ssjhon",
  "reg"=>400,
  "sect"=>'b'
],
"fahad"=>[
  "id"=> 3,
  "name"=>"ffjhon",
  "reg"=>500,
  "sect"=>'c'
],
];

$newst = [
"khan"=>[
    "id"=> 4,
  "name"=>"jhsson",
  "reg"=>600,
  "sect"=>'d'
  ]
];
$std=array_merge_recursive($students,$newst);

// echo "<pre>";
// print_r($std);
// echo "</pre>";


echo "<table  border='1px' cellspacing=2 >";
echo "<tr>
      <th>ID</th>
      <th>Name</th>
      <th>reg</th>
      <th>sect</th>
      </tr>
      ";

      foreach($std as  $user){
        echo "<tr>";
        echo "<td>".$user['id']."</td>";
        echo "<td>".$user['name']."</td>";
        echo "<td>".$user['sect']."</td>";
        echo "<td>".$user['reg']."</td>";
        echo "</tr>";
      }

      echo "</table>";
?>