<?php
//hmtlentitie function is used to protect form data from attacks  from code js code or any html code t encod the code into entities they put teh html or js code in the form so for this pupose we used htmlentities 

//htmlentities accept two parameters(string,flags)
//flags ->Ent_compat  encode only double quotes 
// ent-quotes  double and single code 
//ent-noquotes  doent encode any quote 


//hmtlspecialchara(strings,flags)   working same as htmlentities but have limitation 
//&  " < > ' these charc is decoded 

?>