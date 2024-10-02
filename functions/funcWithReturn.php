<?php
function rtn($fname,$lname){
    
  $v= $fname+ $lname;

  return $v;
}

$d = rtn(300,200);
// echo $d .'<br>';

function prcnt($any){
$pt = ($any * 100) / 800 ;  
echo $pt;
}

 prcnt($d);


?>