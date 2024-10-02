<?php
function click(){
   $nam = 'mohibbkhan';
  for ($a = 1 ; $a <= 10 ; $a++){
      if($nam == 'khan'){
        echo 'yes it same person <br>';
      }
      else if ($nam != 'khan'){
        echo 'its wrong perosn <br>';
      }

      else {
        echo 'nothing worked <br>';
      }
  }
}

click();



function displayUser($user): void {
    echo "Name: " . $user['name'] . ", Age: " . $user['age'];
}

$user = ['name' => 'John', 'age' => 30];
displayUser($user);  // Output: Name: John, Age: 30


function multiply(int $a, int $b): int {
    return $a * $b;
}

echo multiply(a: 4, b: 5);  // Output: 20



?>
