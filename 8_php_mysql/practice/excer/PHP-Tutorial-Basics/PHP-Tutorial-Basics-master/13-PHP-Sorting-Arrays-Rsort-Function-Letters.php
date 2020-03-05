<?php

// Define a fixed array of strings
$keysToSpiritualEvolution = array("please", "compassion", "show");

/*use the The rsort() function is used for sorting the 
elements of the indexed array in descending order.
*/

rsort($keysToSpiritualEvolution);
//$keysToSpiritualEvolution

print_r($keysToSpiritualEvolution);
/*
(
    [0] => show
    [1] => please
    [2] => compassion
)
*/
?>