<?php
/*In an associative array, the keys assigned to values can be arbitrary 
and user defined strings. 
In the following example the array uses keys instead of index numbers
*/
$studentID = array("Astra"=> 11,"Rai"=>33, "Star"=>22);
echo $studentID["Astra"];
echo"\n";
echo $studentID["Rai"];
echo"\n";
echo $studentID["Star"];
/*
Expected output: 
11
33
22
*/

?>