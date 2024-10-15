<?php
// Create an associative array with data
$users = [
    [
        'id' => 1,
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'age' => 25,
    ],
    [
        'id' => 2,
        'name' => 'Jane Smith',
        'email' => 'jane@example.com',
        'age' => 28,
    ],
    [
        'id' => 3,
        'name' => 'Mike Johnson',
        'email' => 'mike@example.com',
        'age' => 22,
    ]
];


$newuser=[
  'id' => 4,
  'name' => 'jj Johnson ',
  'email' => 'mike@example.com',
  'age' => 244,
];
$users[]=$newuser;

foreach($users as & $members){
  if($members['id'] == 2){
    $members['email']= 'this@gmail.com';
  }

  elseif($members['age']==244){
    $members['age']= 30;
  }
};


// foreach($users as $key => $members){
//   if($members['age']== 22){
//     unset($users[$key]);
//   }
// }

// Display the data as a table
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
      </tr>";

foreach ($users as $user) {
    echo "<tr>
            <td>{$user['id']}</td>
            <td>{$user['name']}</td>
            <td>{$user['email']}</td>
            <td>{$user['age']}</td>
          </tr>";
}

echo "</table>";
?>
