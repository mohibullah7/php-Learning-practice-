<?php
//session is usd in login pages display user data 
/*
aession also save temporray information in server not in the user computer like cookie , the inforamtion where we stored in is called session store 

mostly use in user login pages 

methods to create and access sessions


1 $session_start() , is used to start session 
2 creat session, $_SESSION[NAME]='value',
3 if we want to access dont need to create seperate session just start the session adn echo the session 
4 echo $session_[name]  get session value 

when user log out 

Delete Session 
1 session_unset();  remove all sesion variables
2 sesison_destry();  destry the session
*/

session_start();

$_SESSION['mysession']='value of the session';

echo $_SESSION['mysession'];




?>