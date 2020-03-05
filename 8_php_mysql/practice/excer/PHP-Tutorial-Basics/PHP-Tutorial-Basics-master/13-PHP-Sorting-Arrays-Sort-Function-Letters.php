<?php
//define a fixed array with three elements
$reminder = array("creating", "be", "always");

//Sorting and printing array
sort($reminder);

//print sorted array
print_r($reminder);

/*
Output:

Array
(
    [0] => always
    [1] => be
    [2] => creating
)
*/
?>