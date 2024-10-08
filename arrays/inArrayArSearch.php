<?php
//array_search is indexed array it return index of teh vlaue we search in case of associative array array search retune the key of the associative array
$srch=[212,323,4242,1221,21,121];
//in array search return 1 when value is availale and retuen o of not 
echo in_array(21,$srch);
echo in_array(33,$srch);

//anoother func which is used to searh array_search which return two values index/key 
echo '<br>';
//its return 0 the index of first value 

$dx = [212,'dssds','ewew',12];
echo array_search(212,$dx);
echo '<br>';

echo array_search(12,$dx);

//now if i used associative array 
echo '<br>';
echo '<br>';

$dr = [
  1 =>  'sasa','rww' ,2121,400,
  2 => 300,'jk',200,
  3 => '900',500,
];
echo '<pre>';
echo array_search('900',$dr,true);

echo '</pre>';
echo '<br>';
echo '<br>';


//in array we used for logic building with if conditions 

$rt = [21,212,212,2121,2121,121,'333'];

if( in_array(212,$rt)== 212){
  echo 'password matched';
}
else{
  echo 'try again';
}
echo '<br>';

//in other way in_array also works if condition is true 
if(in_array(21,$rt)){
  echo 'its working without conditons';
}

//in_array accept 3rd paremeter also to find out the 

echo '<br>';
if(in_array(333,$rt)){
  echo 'its working in simple mood with 2 parameter the value is string';
}
else{
  echo 'string value is not matched';
}


echo '<br>';
echo '<br>';
if(in_array(333,$rt,true)){
  echo 'its working in simple mood with 2 parameter the value is string';
}
else{
  echo 'string value is not matched';
}

//not it return esle statemnet because the strict mode is on 
?>