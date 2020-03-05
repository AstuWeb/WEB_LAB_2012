<?php
//create a array
//array to have key value pairs

$studentID = array(
		"astra" => 1, 
		"rai" =>2,
		"star" =>3
);
//loop trough studentID aray
foreach($studentID as $key=> $value){
	//output key value in each element in array
	echo $key . " : " .$value. "\n";
}
/*
Output:
astra : 1
rai : 2
star: 3
*/

?>