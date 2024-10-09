<?php
//easy one its same as maths intersection this funcions give same value whose datatype is same also vlaue is same its case sensitive 
//we can relate multiple arrays using array-intersect functions 

$a1 =[
1=>'red',2=>'green',3=>'red',4=>'four'
];
$a2 =[
  1=>'fg',2=>'red',3=>'green'
];
$a3=[
  1=>'red', 2=>'fg',3=>'yellow'
];

$final = array_intersect_key($a1,$a3,$a2);

echo "<pre>";
print_r($final);
echo "</pre>";

//intersect'-key

// $keyss = array_intersect_key($a1,$a2,$a3);

// echo "<pre>";
// print_r($Keyss);
// echo "</pre>"


//if we wan to match both values and keys we can use array intersect assoc which will return array of values whose key and values both are same


$a4 =[
  1=>'red',2=>'green',3=>'red',4=>'four'
  ];
  $a5 =[
    1=>'red',2=>'red',3=>'green'
  ];
  // $a3=[
  //   1=>'red', 2=>'fg',3=>'yellow'
  // ];
  
  $assoc = array_intersect_assoc($a4,$a5);
  
  echo "<pre>";
  print_r($assoc);
  echo "</pre>";

  //array intersect uassoc u mean define which is third parameter accaept function we can define the condition as function and write it 


  function check($u1,$u2){
      if($u1 === $u2){
        return 0 ;
      }

      ($u1 > $u2) ? 1 : -1 ;
      
  }
  $u1 =[
    6=>'red',2=>'green',3=>44,4=>'four'
    ];
    $u2=[
      1=>'red', 2=> 'green', 3=>'44',
    ];
   
    
    $uc = array_uintersect_assoc($u1,$u2,'check');
    
    echo "<pre>";
    print_r($uc);
    echo "</pre>";

    /*
     array_intersect_assoc
Description: This function compares both values and keys of arrays and returns the elements that match both in value and key.
Comparison Basis: Compares both the values and the keys.
    
    /*
    3. array_intersect_key
Description: This function compares the keys of arrays and returns the elements where the keys are the same, ignoring the values.
Comparison Basis: Compares keys only.
    */

    /*
    Summary of Differences
array_intersect: Compares only values.
array_intersect_assoc: Compares both values and keys.
array_intersect_key: Compares only keys.
array_intersect_uassoc: Compares values normally and uses a custom function for keys.
array_intersect_ukey: Compares keys using a custom function.
array_uintersect: Compares values using a custom function.
    */

?>