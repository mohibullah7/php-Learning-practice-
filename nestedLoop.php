<?php
//nested loop is used to declared tabular foem of data its working as loop and inner loop mostly used for loop for this 


for ($a =1 ; $a <= 100 ; $a = $a + 10 ){
  for($b = $a ;$b < $a + 10 ; $b++){
    echo $b. ' ';
  }

  echo '<br>';
}
?>