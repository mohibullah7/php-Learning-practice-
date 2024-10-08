<?php
//

// $slc = ['first',212,'second',2121,121,];
$slc = ["1"=>'first',"2"=>212,"3"=>'second',"4"=> 2121, "5"=> 121,];
$ct = array_splice($slc,1,2);
echo "<pre>";
print_r($ct);
echo "</pre>";
?>