<?php
/*
80 90 merit 
60 70 good 
50 to 50 poor
30 to 40 3rd grade 
below 30 fail 
 */
$marks = 20;
//  $std1 = 80;
//  $std2 = 50;
//  $std3 = 60;
//  $std4 = 20 ;
//  $std6 = 70;

 if ($marks >= 80 || $marks == 100){
  echo 'you got merit ';

 }
 else if ($marks >= 70 || $marks == 80){
   echo 'you got 2nd grade ';
 }

 else if ($marks >= 60 || $marks == 70 ){
   echo 'you got 3rd grade';
 }

 else if ( $marks >= 30 || $marks == 50){
  echo 'you got 4th grade ';
 }

 else if ($marks < 30 ){
  echo 'fail ';
 }

?>