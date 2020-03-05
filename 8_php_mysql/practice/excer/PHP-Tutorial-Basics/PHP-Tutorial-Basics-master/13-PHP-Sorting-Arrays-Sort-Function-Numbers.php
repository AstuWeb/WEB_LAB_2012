<?php

//define a fixed array with three elements
$magicNumbers = array(3.33,11,33, 11);
 
//use the sort function to sort array in ascending order
sort($magicNumbers);

//print array
print_r($magicNumbers);

/*
Expected output:

Array
(
    [0] => 3.33
    [1] => 11
    [2] => 11
    [3] => 33
)

*/

?>