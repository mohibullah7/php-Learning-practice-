<?php

function even($data){
$even = [];
$odd = [];

  foreach($data as $num){

  if($num % 2 == 0  ){
    $even[]= $num;
  }
  else{
    $odd[] = $num;
     }
}
return [
  "even" => $even,
  "odd" => $odd
 ];
  
};

function show(){
  $arr = [1,2,3,4,5,6,7,8,9,10];
  $result = even($arr);
  // print_r($result['even']);
  echo "even Number :". implode(',',$result['even'])."<br>";
  echo "Odd numbers :".implode(',',$result['odd']);  

}

show();



?>