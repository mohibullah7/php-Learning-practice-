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


function add($a,$b,$c){

  $add = $a+$b+$c ;

 
echo $add;
  
}

add(3,4,6);



function prmt ($h ='jul', $y = 'jun'){
        
  echo $h,$y ;

}
prmt();


function fgh($b,$h,$n){
    echo $b,$h,$n;
}
$one = 40 ;
$two = ' name of ';
$three = 500;

fgh(
  
  b: $one,h: $two,n: $three
);
// function displayUser($user): void {
//     echo "Name: " . $user['name'] . ", Age: " . $user['age'];
// }

// $user = ['name' => 'John', 'age' => 30];
// displayUser($user);  


// function multiply(int $a, int $b): int {
//     return $a * $b;
// }

// echo multiply(a: 4, b: 5);  



?>
