<?php

$coolNumbers = array(3,33,11);

//use ersort function to store array content in descending order
rsort($coolNumbers);

print_r($coolNumbers);

/*
output:
Array
(
    [0] => 33
    [1] => 11
    [2] => 3
)
*/
?>