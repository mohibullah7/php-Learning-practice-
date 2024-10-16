<?php
//addslashes is used to add slashes to data to protect from the hackers addslashes add sslashes from rightto left and stiplashes is used to remove the slashes we added 

//addsalshes(string,characters)
//stripslashes (string)
//we have to put the data in single or double quotes we want to protect it 

$data = 'this is "Mohib data " and this is impostrnat ';
echo $data. "<br>";
 echo addslashes($data)."<br>";
 //noe lets remove slashes 

 echo stripslashes($data);

 //addcslashes is accept two para (string,"value where you want to start ");

 //addcslashes($data ,"Mo");
?>